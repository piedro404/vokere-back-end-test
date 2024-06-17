<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\{User, Address};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    private $user;
    private $address;

    public function __construct(User $user, Address $address)
    {
        $this->user = $user;
        $this->address = $address;
    }

    public function index() {
        $auth = Auth::user();
        $user = $this->user->find($auth->id);
        $location = $user->address()->first();

        $user->formatted_date_of_birth = $this->formattedDate($user->date_of_birth);
        $user->formatted_created_at = $this->formattedTimestamp($user->created_at);
        $user->formatted_cpf = $this->formattedCPF($user->cpf);
        
        if($location){
            $location->formatted_cep = $this->formattedCEP($location->cep);
        }

        return view('profile.show', compact('user', 'location'));
    }

    public function edit()
    {
        $auth = Auth::user();
        $user = $this->user->find($auth->id);
        $location = $user->address()->first();
        $user->formatted_date_of_birth = $this->formattedDate($user->date_of_birth);
        // dd($location);

        return view('profile.edit', compact('user', 'location'));
    }

    public function update(StoreUpdateUserFormRequest $request)
    {
        $auth = Auth::user();
        $user = $this->user->find($auth->id);
        $infos = $request->only('name', 'email', 'date_of_birth', 'cpf');
        $location = $request->only('street', 'number', 'complement', 'neighborhood', 'cep', 'city', 'state');

        if ($request->avatar) {
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }
            $extension = $request->avatar->getClientOriginalExtension();
            $infos['avatar'] = $request->avatar->storeAs('usersAvatar', "{$infos['name']}_" . now() . ".{$extension}");
        }

        $user->update($infos);
        $user->assignAddress($location, $user->id);

        return redirect()->route('auth.index');
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
