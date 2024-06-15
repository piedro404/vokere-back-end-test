<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $clients = $this->model->getUsersClients();

        $clients->transform(function ($client) {
            $client->formated_date_of_birth = $this->formatedDate($client->date_of_birth);
            $client->formated_created_at = $this->formatedTimestamp($client->created_at);
            return $client;
        });

        return view('client.index', compact('clients'));
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
