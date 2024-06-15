<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Pedro Henrique',
            'email' => 'pedroplayborges@gmail.com',
            'password' => bcrypt('admin'),
            'cpf' => '02511560364',
            'date_of_birth' => '2004-10-06',
            'avatar' => null,
        ]);
        $admin->assignPermission('admin');

        $client = User::create([
            'name' => 'Ana Karen',
            'email' => 'anakaren@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '13822713368',
            'date_of_birth' => '2002-11-20',
            'avatar' => null,
        ]);
        $client->assignPermission('client');

        $client = User::create([
            'name' => 'Rosa Angelica',
            'email' => 'rosaangelica@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '21120335302',
            'date_of_birth' => '1971-11-24',
            'avatar' => null,
        ]);
        $client->assignPermission('client');

        $client = User::create([
            'name' => 'Pedro de Sousa Borges',
            'email' => 'pedroborges@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '70442023308',
            'date_of_birth' => '1976-01-14',
            'avatar' => null,
        ]);
        $client->assignPermission('client');
    }
}
