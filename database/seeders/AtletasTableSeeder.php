<?php

namespace Database\Seeders;

use App\Models\Atleta;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AtletasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $atleta1 = Atleta::create([
            'nome' => 'josias',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '25/10/2003')->format('Y-m-d'),
            'cpf' => 45645658,
            'sexo' => 'Masculino',
            'email' => 'josias@josias.com',
            'password' => Hash::make('josias'),
            'equipe' => 'equipejosias',
            'faixa' => 'Preta',
            'peso' => 'Leve'
        ]);

        $atleta1->joinCampeonato(0);

        $atleta2 = Atleta::create([
            'nome' => 'maria',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '12/05/1995')->format('Y-m-d'),
            'cpf' => 123456789,
            'sexo' => 'Feminino',
            'email' => 'maria@maria.com',
            'password' => Hash::make('maria'),
            'equipe' => 'equipemaria',
            'faixa' => 'Marrom',
            'peso' => 'Pesado'
        ]);
        
        $atleta2->joinCampeonato(1);
        
        $atleta3 = Atleta::create([
            'nome' => 'lucas',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '18/09/2000')->format('Y-m-d'),
            'cpf' => 987654321,
            'sexo' => 'Masculino',
            'email' => 'lucas@lucas.com',
            'password' => Hash::make('lucas'),
            'equipe' => 'equipelucas',
            'faixa' => 'Preta',
            'peso' => 'Leve'
        ]);
        
        $atleta3->joinCampeonato(2);
        
        $atleta4 = Atleta::create([
            'nome' => 'carla',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '03/08/1998')->format('Y-m-d'),
            'cpf' => 111223344,
            'sexo' => 'Feminino',
            'email' => 'carla@carla.com',
            'password' => Hash::make('carla'),
            'equipe' => 'equipcarla',
            'faixa' => 'Marrom',
            'peso' => 'Pesado'
        ]);
        
        $atleta4->joinCampeonato(3);
    
        $atleta5 = Atleta::create([
            'nome' => 'pedro',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '21/11/1999')->format('Y-m-d'),
            'cpf' => 333444555,
            'sexo' => 'Masculino',
            'email' => 'pedro@pedro.com',
            'password' => Hash::make('pedro'),
            'equipe' => 'equippedro',
            'faixa' => 'Preta',
            'peso' => 'Leve'
        ]);
        
        $atleta5->joinCampeonato(4);

        $atleta6 = Atleta::create([
            'nome' => 'laura',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '14/02/1997')->format('Y-m-d'),
            'cpf' => 666777888,
            'sexo' => 'Feminino',
            'email' => 'laura@laura.com',
            'password' => Hash::make('laura'),
            'equipe' => 'equipelaura',
            'faixa' => 'Preta',
            'peso' => 'Pesado'
        ]);
        
        $atleta6->joinCampeonato(5);

        $atleta7 = Atleta::create([
            'nome' => 'gabriel',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '10/05/2000')->format('Y-m-d'),
            'cpf' => 999000111,
            'sexo' => 'Masculino',
            'email' => 'gabriel@gabriel.com',
            'password' => Hash::make('gabriel'),
            'equipe' => 'equipgabriel',
            'faixa' => 'Marrom',
            'peso' => 'Pesado'
        ]);
        
        $atleta7->joinCampeonato(6);

        $atleta8 = Atleta::create([
            'nome' => 'luana',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '18/09/1996')->format('Y-m-d'),
            'cpf' => 222333444,
            'sexo' => 'Feminino',
            'email' => 'luana@luana.com',
            'password' => Hash::make('luana'),
            'equipe' => 'equipluana',
            'faixa' => 'Preta',
            'peso' => 'Leve'
        ]);
        
        $atleta8->joinCampeonato(7);

        $atleta9 = Atleta::create([
            'nome' => 'thiago',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '26/03/1999')->format('Y-m-d'),
            'cpf' => 555666777,
            'sexo' => 'Masculino',
            'email' => 'thiago@thiago.com',
            'password' => Hash::make('thiago'),
            'equipe' => 'equipthiago',
            'faixa' => 'Preta',
            'peso' => 'Leve'
        ]);
        
        $atleta9->joinCampeonato(8);

        $atleta10 = Atleta::create([
            'nome' => 'isabela',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '14/07/1995')->format('Y-m-d'),
            'cpf' => 111222333,
            'sexo' => 'Feminino',
            'email' => 'isabela@isabela.com',
            'password' => Hash::make('isabela'),
            'equipe' => 'equipisabela',
            'faixa' => 'Preta',
            'peso' => 'Pesado'
        ]);
        
        $atleta10->joinCampeonato(1);

        $atleta11 = Atleta::create([
            'nome' => 'rodrigo',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '22/11/1997')->format('Y-m-d'),
            'cpf' => 888999000,
            'sexo' => 'Masculino',
            'email' => 'rodrigo@rodrigo.com',
            'password' => Hash::make('rodrigo'),
            'equipe' => 'equiprodrigo',
            'faixa' => 'Azul',
            'peso' => 'Leve'
        ]);
        
        $atleta11->joinCampeonato(1);

        $atleta12 = Atleta::create([
            'nome' => 'claudia',
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', '30/04/1998')->format('Y-m-d'),
            'cpf' => 777888999,
            'sexo' => 'Feminino',
            'email' => 'claudia@claudia.com',
            'password' => Hash::make('claudia'),
            'equipe' => 'equipclaudia',
            'faixa' => 'Azul',
            'peso' => 'Pesado'
        ]);
        
        $atleta12->joinCampeonato(2);
    }
}
