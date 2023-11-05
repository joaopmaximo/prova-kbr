<?php

namespace Database\Seeders;

use App\Models\Campeonato;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampeonatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campeonato::insert([
            [
                'titulo_campeonato' => 'Campeonato A',
                'imagem' => '4b226f87b86143b86bc3b50bf0bf0121.jpg',
                'estado' => 'São Paulo',
                'cidade' => 'São Paulo',
                'data_realizacao' => Carbon::createFromFormat('Y-m-d', '2023-10-15'),
                'sobre_evento' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'ginasio' => 'Ginásio A',
                'informacoes_gerais' => 'Informações gerais sobre o evento A.',
                'entrada_publico' => 'Entrada gratuita',
                'tipo' => 'Kimono',
                'fase' => 'Inscrições Abertas',
                'status' => 1,
                'destaque' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo_campeonato' => 'Campeonato B',
                'imagem' => '9fcc406d64df6189b8f7e6d762389695.jpg',
                'estado' => 'Rio de Janeiro',
                'cidade' => 'Rio de Janeiro',
                'data_realizacao' => Carbon::createFromFormat('Y-m-d', '2023-11-20'),
                'sobre_evento' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'ginasio' => 'Ginásio B',
                'informacoes_gerais' => 'Informações gerais sobre o evento B.',
                'entrada_publico' => 'Entrada paga',
                'tipo' => 'No-Gi',
                'fase' => 'Chaves de Lutas',
                'status' => 1,
                'destaque' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo_campeonato' => 'Campeonato C',
                'imagem' => '0536a379e7a491422f8077e00af50066.jpg',
                'estado' => 'São Paulo',
                'cidade' => 'Campinas',
                'data_realizacao' => Carbon::createFromFormat('Y-m-d', '2023-12-25'),
                'sobre_evento' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'ginasio' => 'Ginásio C',
                'informacoes_gerais' => 'Informações gerais sobre o evento C.',
                'entrada_publico' => 'Entrada gratuita',
                'tipo' => 'Kimono',
                'fase' => 'Resultados',
                'status' => 1,
                'destaque' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo_campeonato' => 'Campeonato D',
                'imagem' => '9219cb17bbc266266ded4018b5419785.jpg',
                'estado' => 'São Paulo',
                'cidade' => 'São Paulo',
                'data_realizacao' => Carbon::createFromFormat('Y-m-d', '2023-09-15'),
                'sobre_evento' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'ginasio' => 'Ginásio D',
                'informacoes_gerais' => 'Informações gerais sobre o evento D.',
                'entrada_publico' => 'Entrada gratuita',
                'tipo' => 'Kimono',
                'fase' => 'Inscrições Abertas',
                'status' => 1,
                'destaque' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo_campeonato' => 'Campeonato E',
                'imagem' => '17342fa52dddcf2959d6eefa1730f445.jpg',
                'estado' => 'Rio de Janeiro',
                'cidade' => 'Niterói',
                'data_realizacao' => Carbon::createFromFormat('Y-m-d', '2023-10-10'),
                'sobre_evento' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'ginasio' => 'Ginásio E',
                'informacoes_gerais' => 'Informações gerais sobre o evento E.',
                'entrada_publico' => 'Entrada gratuita',
                'tipo' => 'No-Gi',
                'fase' => 'Inscrições Abertas',
                'status' => 1,
                'destaque' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo_campeonato' => 'Campeonato F',
                'imagem' => '457679f71d25db4c2f45cce21e490d73.jpg',
                'estado' => 'São Paulo',
                'cidade' => 'Campinas',
                'data_realizacao' => Carbon::createFromFormat('Y-m-d', '2023-10-20'),
                'sobre_evento' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'ginasio' => 'Ginásio F',
                'informacoes_gerais' => 'Informações gerais sobre o evento F.',
                'entrada_publico' => 'Entrada paga',
                'tipo' => 'Kimono',
                'fase' => 'Chaves de Lutas',
                'status' => 1,
                'destaque' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo_campeonato' => 'Campeonato G',
                'imagem' => '8793461f2315c8f16ead47fc1555873c.jpg',
                'estado' => 'Rio de Janeiro',
                'cidade' => 'Rio de Janeiro',
                'data_realizacao' => Carbon::createFromFormat('Y-m-d', '2023-10-25'),
                'sobre_evento' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'ginasio' => 'Ginásio G',
                'informacoes_gerais' => 'Informações gerais sobre o evento G.',
                'entrada_publico' => 'Entrada gratuita',
                'tipo' => 'No-Gi',
                'fase' => 'Chaves de Lutas',
                'status' => 0,
                'destaque' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo_campeonato' => 'Torneio da Cidade',
                'imagem' => 'c2fccf9126b7345918f81fbe01ae1576.jpg',
                'estado' => 'São Paulo',
                'cidade' => 'Santos',
                'data_realizacao' => Carbon::createFromFormat('Y-m-d', '2023-10-30'),
                'sobre_evento' => 'Um grande torneio reunindo atletas da região.',
                'ginasio' => 'Ginásio Municipal',
                'informacoes_gerais' => 'Informações adicionais sobre o evento.',
                'entrada_publico' => 'Gratuita',
                'tipo' => 'Kimono',
                'fase' => 'Chaves de Lutas',
                'status' => 1,
                'destaque' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'titulo_campeonato' => 'Copa Paulista de Jiu-Jitsu',
                'imagem' => 'd495e60cce8e6971cacb60914707c975.jpg',
                'estado' => 'Rio de Janeiro',
                'cidade' => 'Niterói',
                'data_realizacao' => Carbon::createFromFormat('Y-m-d', '2023-11-25'),
                'sobre_evento' => 'Uma competição de alto nível com atletas de todo o estado.',
                'ginasio' => 'Ginásio Estadual',
                'informacoes_gerais' => 'Detalhes importantes sobre a competição.',
                'entrada_publico' => 'Entrada paga',
                'tipo' => 'No-Gi',
                'fase' => 'Inscrições Abertas',
                'status' => 1,
                'destaque' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        
    }
}
