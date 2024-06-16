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

    public function index(Request $request)
    {
        $name = $request->name ?? "";
        $created_at = "";

        if(isset($request->created_at))
        {
            $created_at = Carbon::createFromFormat('d/m/Y', $request->created_at)->format('Y-m-d');
        }

        $clients = $this->user->getUsersClients($name, $created_at);
        
        $clients->transform(function ($client) {
            $client->formatted_date_of_birth = $this->formattedDate($client->date_of_birth);
            $client->formatted_created_at = $this->formattedTimestamp($client->created_at);
            return $client;
        });
        // dd($name, $created_at);
        // dd($clients);

        return view('client.index', compact('clients'));
    }

    public function show($id)
    {
        if (!$client = $this->user->find($id)) {
            return redirect()->route('client.index');
        }
        if (!$client->hasPermission('client')) {
            return redirect()->route('client.index')->with('error', 'Você so podê visualizar Clientes.');
        }

        $location = $client->address()->first();
        $client->formatted_date_of_birth = $this->formattedDate($client->date_of_birth);
        $client->formatted_created_at = $this->formattedTimestamp($client->created_at);
        $client->formatted_cpf = $this->formattedCPF($client->cpf);
        
        if($location){
            $location->formatted_cep = $this->formattedCEP($location->cep);
        }
        // dd($location);

        return view('client.show', compact('client', 'location'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $client = $request->only('name', 'email', 'date_of_birth', 'cpf');
        $location = $request->only('street', 'number', 'complement', 'neighborhood', 'cep', 'city', 'state');
        $client['password'] = bcrypt($request->password);

        // dd($client, $location);

        if ($request->avatar) {
            $extension = $request->avatar->getClientOriginalExtension();
            $client['avatar'] = $request->avatar->storeAs('usersAvatar', "{$client['name']}_" . now() . ".{$extension}");
        }

        $user = $this->user->create($client);
        $user->assignPermission('client');
        $location['user_id'] = $user->id;
        $this->address->create($location);

        return redirect()->route('client.index');
    }

    public function edit($id)
    {
        if (!$client = $this->user->find($id)) {
            return redirect()->route('client.index');
        }
        if (!$client->hasPermission('client')) {
            return redirect()->route('client.index')->with('error', 'Você so podê editar Clientes.');
        }

        $location = $client->address()->first();
        $client->formatted_date_of_birth = $this->formattedDate($client->date_of_birth);
        // dd($location);

        return view('client.edit', compact('client', 'location'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        $client = $request->only('name', 'email', 'date_of_birth', 'cpf');
        $location = $request->only('street', 'number', 'complement', 'neighborhood', 'cep', 'city', 'state');

        if (!$user = $this->user->find($id)) {
            return redirect()->route('client.index');
        }
        if (!$user->hasPermission('client')) {
            return redirect()->route('client.index')->with('error', 'Você so podê editar Clientes.');
        }
        if ($request->password) {
            $client['password'] = bcrypt($request->password);
        }
        if ($request->avatar) {
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }
            $extension = $request->avatar->getClientOriginalExtension();
            $client['avatar'] = $request->avatar->storeAs('usersAvatar', "{$client['name']}_" . now() . ".{$extension}");
        }

        $user->update($client);
        $user->assignAddress($location, $user->id);

        return redirect()->route('client.index');
    }

    public function delete($id)
    {
        if ($client = $this->user->find($id)) {
            if (!$client->hasPermission('client')) {
                return redirect()->route('client.index')->with('error', 'Você só podê excluir Clientes.');
            }
            if ($client->avatar) {
                Storage::delete($client->avatar);
            }
            $client->delete();
        }

        return redirect()->route('client.index');
    }

    // Funcao de Formatação e Validação

    private function formattedDate($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }

    private function formattedTimestamp($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y');
    }

    private function formattedCPF($cpf)
    {
        return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
    }

    private function formattedCEP($cep)
    {
        return substr($cep, 0, 5) . '-' . substr($cep, 5, 3);
    }
}
