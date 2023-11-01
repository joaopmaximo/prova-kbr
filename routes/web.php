<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\CampeonatoController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\Campeonato;
use Illuminate\Support\Facades\Route;

// View Pages

Route::get('/teste', function () {
    $campeonato = Campeonato::find(6);
    return dd( $campeonato->imagem );
});

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/integra/{id}', [PagesController::class, 'integra'])->name('integra');

Route::view('/inscricao', 'inscricao')->name('inscricao');

Route::redirect('/painel-administrativo', '/painel-administrativo/cadastrar-usuario');

Route::view('/painel-administrativo/listagem-usuarios', 'painel_administrativo.listagem-usuarios')->name('listagemUsuarios');

Route::view('/painel-administrativo/cadastrar-usuario', 'painel_administrativo.cadastrar-usuario')->name('cadastrarUsuario');

Route::view('/painel-administrativo/cadastrar-campeonato', 'painel_administrativo.cadastrar-campeonato')->name('cadastrarCampeonato');

Route::view('/painel-administrativo/listagem-campeonatos', 'painel_administrativo.listagem-campeonatos')->name('listagemCampeonatos');

Route::view('/painel-administrativo/login', 'painel_administrativo.login')->name('painelAdmLogin');

// CRUD Atleta

Route::get('/atletas', [AtletaController::class, 'getAtletas'])->name('getAtletas');;

Route::get('/atleta/{id}', [AtletaController::class, 'getAtleta'])->name('getAtleta');;

Route::post('/atleta', [AtletaController::class, 'postAtleta'])->name('postAtleta');;

Route::put('/atleta/{id}', [AtletaController::class, 'putAtleta'])->name('putAtleta');;

Route::delete('/atleta/{id}', [AtletaController::class, 'deleteAtleta'])->name('deleteAtleta');;

// CRUD Campeonato

Route::get('/campeonatos', [CampeonatoController::class, 'getCampeonatos'])->name('getCampeonatos');;

Route::get('/campeonato/{id}', [CampeonatoController::class, 'getCampeonato'])->name('getCampeonato');;

Route::post('/campeonato', [CampeonatoController::class, 'postCampeonato'])->name('postCampeonato');

Route::put('/campeonato/{id}', [CampeonatoController::class, 'putCampeonato'])->name('putCampeonato');;

Route::delete('/campeonato/{id}', [CampeonatoController::class, 'deleteCampeonato'])->name('deleteCampeonato');;

// CRUD User e Auth

Route::get('/users', [UserController::class, 'getUsers'])->name('getUsers');;

Route::get('/user/{id}', [UserController::class, 'getUser'])->name('getUser');;

Route::post('/user', [UserController::class, 'postUser'])->name('postUser');;

Route::put('/user/{id}', [UserController::class, 'putUser'])->name('putUser');;

Route::delete('/user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');;

Route::post('/painel-administrativo/auth', [AuthController::class,'auth'])->name('auth');