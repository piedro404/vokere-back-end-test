<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\{Address, User};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    private $user;
    private $address;

    public function __construct(User $user, Address $address)
    {
        $this->user = $user;
        $this->address = $address;
    }

    public function index()
    {
        $clients = $this->user->getUsersClients();

        $clients->transform(function ($client) {
            $client->formatted_date_of_birth = $this->formatedDate($client->date_of_birth);
            $client->formatted_created_at = $this->formatedTimestamp($client->created_at);
            return $client;
        });

        return view('client.index', compact('clients'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $client = $request->only('name', 'email', 'date_of_birth', 'cpf');
        $address = $request->only('street', 'number', 'complement', 'neighborhood', 'cep', 'city', 'state');
        $client['password'] = bcrypt($request->password);

        // dd($client, $address);

        if ($request->avatar) {
            $extension = $request->avatar->getClientOriginalExtension();
            $client['avatar'] = $request->avatar->storeAs('usersAvatar', "{$client['name']}_" . now() . ".{$extension}");
        }

        $user = $this->user->create($client);
        $user->assignPermission('client');
        $address['user_id'] = $user->id;
        $this->address->create($address);

        return redirect()->route('client.index');
    }

    public function delete($id)
    {
        if ($client = $this->user->find($id)) {
            if ($client->avatar) {
                Storage::delete($client->avatar);
            }
            $client->delete();
        }

        return redirect()->route('client.index');
    }

    // Funcao de Formatação

    private function formatedDate($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }

    private function formatedTimestamp($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y');
    }
}
