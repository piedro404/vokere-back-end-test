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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'cpf' => '70730444031',
            'date_of_birth' => '2004-10-06',
            'avatar' => null,
        ]);
        $admin->assignAddress([
            'street' => 'José do Egito',
            'number' => '62',
            'complement' => 'Casa dos Fundos',
            'neighborhood' => 'Centro',
            'city' => 'São Raimundo das Mangabeiras',
            'state' => 'MA',
            'cep' => '65840000',
        ], $admin->id);
        $admin->assignPermission('admin');

        $admin = User::create([
            'name' => 'Vokerê Vaga :)',
            'email' => 'vokere@gmail.com',
            'password' => bcrypt('admin'),
            'cpf' => '21224611012',
            'date_of_birth' => '2019-01-01',
            'avatar' => null,
        ]);
        $admin->assignAddress([
            'street' => 'Av. 3, 5 - Cohab I',
            'number' => '5',
            'complement' => 'Escritorio',
            'neighborhood' => 'Centro',
            'city' => 'Balsas',
            'state' => 'MA',
            'cep' => '65800000',
        ], $admin->id);
        $admin->assignPermission('admin');

        $manager = User::create([
            'name' => 'Hedleydarsh',
            'email' => 'hedleydarsh@gmail.com',
            'password' => bcrypt('admin'),
            'cpf' => '43709183081',
            'date_of_birth' => '1990-01-01',
            'avatar' => null,
        ]);
        $manager->assignAddress([
            'street' => 'Av. Brasil',
            'number' => 'A2',
            'complement' => 'Apartamento',
            'neighborhood' => 'Centro',
            'city' => 'Balsas',
            'state' => 'MA',
            'cep' => '65800000',
        ], $manager->id);
        $manager->assignPermission('manager');

        $client = User::create([
            'name' => 'Ana Karen',
            'email' => 'anakaren@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '13822713368',
            'date_of_birth' => '2002-11-20',
            'avatar' => null,
        ]);
        $client->assignAddress([
            'street' => 'José do Egito',
            'number' => '62',
            'complement' => 'Casa dos Fundos',
            'neighborhood' => 'Centro',
            'city' => 'São Raimundo das Mangabeiras',
            'state' => 'MA',
            'cep' => '65840000',
        ], $client->id);
        $client->assignPermission('client');

        $client = User::create([
            'name' => 'Rosa Angelica',
            'email' => 'rosaangelica@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '21120335302',
            'date_of_birth' => '1971-11-24',
            'avatar' => null,
        ]);
        $client->assignAddress([
            'street' => 'José do Egito',
            'number' => '62',
            'complement' => 'Casa dos Fundos',
            'neighborhood' => 'Centro',
            'city' => 'São Raimundo das Mangabeiras',
            'state' => 'MA',
            'cep' => '65840000',
        ], $client->id);
        $client->assignPermission('client');

        $client = User::create([
            'name' => 'Pedro de Sousa Borges',
            'email' => 'pedroborges@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '70442023308',
            'date_of_birth' => '1976-01-14',
            'avatar' => null,
        ]);
        $client->assignAddress([
            'street' => 'José do Egito',
            'number' => '62',
            'complement' => 'Casa dos Fundos',
            'neighborhood' => 'Centro',
            'city' => 'São Raimundo das Mangabeiras',
            'state' => 'MA',
            'cep' => '65840000',
        ], $client->id);
        $client->assignPermission('client');

        $client = User::create([
            'name' => 'Pedro Henrique',
            'email' => 'pedroplayborges@gmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '02511560364',
            'date_of_birth' => '2004-10-06',
            'avatar' => null,
        ]);
        $client->assignAddress([
            'street' => 'José do Egito',
            'number' => '62',
            'complement' => 'Casa dos Fundos',
            'neighborhood' => 'Centro',
            'city' => 'São Raimundo das Mangabeiras',
            'state' => 'MA',
            'cep' => '65840000',
        ], $client->id);
        $client->assignPermission('client');
    }
}
