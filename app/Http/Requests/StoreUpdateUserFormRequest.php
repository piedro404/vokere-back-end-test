<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->id ?? '';
        
        $this->merge([
            'cpf' => preg_replace('/[\.\-_]/', '', $this->cpf),
            'cep' => preg_replace('/[\.\-_]/', '', $this->cep),
            'state' => preg_replace('/[\.\-_]/', '', $this->state),
        ]);

        $rules = [
            // User
            'name' => [
                'required',
                'string', 
                'min:3',
                'max:255', 
            ],
            'email' => [
                'required',
                'email',
                "unique:users,email,{$id},id",
            ],
            'password' => [
                'required',
                'min:5',
                'max:255',
            ],
            'cpf' => [
                'required',
                'min:11',
                'max:11',
                "unique:users,cpf,{$id},id"
            ],
            'date_of_birth' => [
                'required',
                'date',
            ],
            'avatar' => [
                'nullable',
                'image',
                'max:5120',
            ],
            // Address
            'street' => [
                'required',
                'string', 
                'min:3',
                'max:255', 
            ],
            'number' => [
                'required',
                'string', 
                'min:1',
                'max:255', 
            ],
            'complement' => [
                'nullable',
                'string', 
                'max:255', 
            ],
            'neighborhood' => [
                'required',
                'string', 
                'min:3',
                'max:255', 
            ],
            'city' => [
                'required',
                'string', 
                'min:3',
                'max:255', 
            ],
            'state' => [
                'required',
                'string', 
                'min:2',
                'max:2', 
            ],
            'cep' => [
                'required',
                'string', 
                'min:8',
                'max:8', 
            ],
        ];

        return $rules;
    }
}