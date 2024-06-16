<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\{Address, User};
use Carbon\Carbon;
use Illuminate\Http\Request;

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
            $client->formated_date_of_birth = $this->formatedDate($client->date_of_birth);
            $client->formated_created_at = $this->formatedTimestamp($client->created_at);
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
        $client = $request->only('name', 'email', 'password', 'date_of_birth', 'cpf', 'avatar');
        $address = $request->only('street', 'number', 'complement', 'neighborhood', 'cep', 'city', 'state');
        
        dd($client, $address);

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
