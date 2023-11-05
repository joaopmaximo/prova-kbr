<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                'role' => 1,
                'status' => 1
            ],
            [
                'name' => 'JoaoSilva',
                'email' => 'joao.silva@example.com',
                'password' => Hash::make('senha123'),
                'role' => 0,
                'status' => 1
            ],
            [
                'name' => 'MariaPereira',
                'email' => 'maria.pereira@example.com',
                'password' => Hash::make('senha456'),
                'role' => 0,
                'status' => 1
            ],
            [
                'name' => 'PedroSantos',
                'email' => 'pedro.santos@example.com',
                'password' => Hash::make('senha789'),
                'role' => 0,
                'status' => 0
            ],
            [
                'name' => 'AnaOliveira',
                'email' => 'ana.oliveira@example.com',
                'password' => Hash::make('senhaABC'),
                'role' => 0,
                'status' => 0
            ],
            [
                'name' => 'CarlosCosta',
                'email' => 'carlos.costa@example.com',
                'password' => Hash::make('senhaXYZ'),
                'role' => 0,
                'status' => 1
            ]
        ]);
    }
}
