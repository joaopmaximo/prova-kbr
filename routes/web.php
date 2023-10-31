<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\CampeonatoController;
use App\Http\Controllers\AtletaController;
use App\Models\Campeonato;
use Illuminate\Support\Facades\Route;

// View Pages

Route::get('/teste', function () {
    $campeonato = Campeonato::find(6);
    return dd( $campeonato->imagem );
});

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/integra/{id}', [PagesController::class, 'integra'])->name('integra');

Route::get('/inscricao', [PagesController::class, 'inscricao'])->name('inscricao');

Route::redirect('/painel-administrativo', '/painel-administrativo/cadastrar-usuario');

Route::get('/painel-administrativo/listagem-usuarios', [PagesController::class, 'listagemUsuarios'])->name('listagemUsuarios');

Route::get('/painel-administrativo/cadastrar-usuario', [PagesController::class, 'cadastrarUsuario'])->name('cadastrarUsuario');

Route::get('/painel-administrativo/cadastrar-campeonato', [PagesController::class, 'cadastrarCampeonato'])->name('cadastrarCampeonato');

Route::get('/painel-administrativo/listagem-campeonatos', [PagesController::class, 'listagemCampeonatos'])->name('listagemCampeonatos');

// CRUD Atleta

Route::get('/atletas', [AtletaController::class, 'getAtletas']);

Route::get('/atleta/{id}', [AtletaController::class, 'getAtleta']);

Route::post('/atleta', [AtletaController::class, 'postAtleta']);

Route::put('/atleta/{id}', [AtletaController::class, 'putAtleta']);

Route::delete('/atleta/{id}', [AtletaController::class, 'deleteAtleta']);

// CRUD Campeonato

Route::get('/campeonatos', [CampeonatoController::class, 'getCampeonatos']);

Route::get('/campeonato/{id}', [CampeonatoController::class, 'getCampeonato']);

Route::post('/campeonato', [CampeonatoController::class, 'postCampeonato']);

Route::put('/campeonato/{id}', [CampeonatoController::class, 'putCampeonato']);

Route::delete('/campeonato/{id}', [CampeonatoController::class, 'deleteCampeonato']);