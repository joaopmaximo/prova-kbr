<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\CampeonatoController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\Campeonato;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    $campeonato = Campeonato::find(6);
    return dd( $campeonato->imagem );
});

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/integra/{id}', [PagesController::class, 'integra'])->name('integra');

Route::view('/inscricao', 'inscricao-atleta')->name('inscricaoAtleta');

Route::view('/login', 'login-atleta')->name('loginAtleta');



Route::get('/painel-administrativo/login', [UserController::class, 'painelAdmLogin'])->name('painelAdmLogin');

Route::post('/painel-administrativo/auth', [AuthController::class,'auth'])->name('auth');

Route::get('/logout', [AuthController::class,'logout'])->name('logout');

// permissoes

Route::middleware(['auth', 'userRole:2'])->group(function () {
    Route::get('/painel-administrativo/cadastrar-usuario', [UserController::class, 'painelAdmCadastroUsuario'])->name('cadastrarUsuario');

    Route::get('/painel-administrativo/cadastrar-campeonato', [UserController::class, 'painelAdmCadastroCampeonato'])->name('cadastrarCampeonato');

    Route::get('/painel-administrativo/listagem-campeonatos', [UserController::class, 'painelAdmListagemCampeonatos'])->name('listagemCampeonatos');

    Route::get('/painel-administrativo', [UserController::class, 'painelAdm'])->name('painelAdm');

    Route::get('/painel-administrativo/listagem-usuarios', [UserController::class, 'painelAdm'])->name('listagemUsuarios');

    Route::get('/atletas', [AtletaController::class, 'getAtletas'])->name('getAtletas');

    Route::get('/atleta/{id}', [AtletaController::class, 'getAtleta'])->name('getAtleta');

    Route::post('/atleta', [AtletaController::class, 'postAtleta'])->name('postAtleta');

    Route::put('/atleta/{id}', [AtletaController::class, 'putAtleta'])->name('putAtleta');

    Route::delete('/atleta/{id}', [AtletaController::class, 'deleteAtleta'])->name('deleteAtleta');

    Route::get('/campeonatos', [CampeonatoController::class, 'getCampeonatos'])->name('getCampeonatos');

    Route::get('/campeonato/{id}', [CampeonatoController::class, 'getCampeonato'])->name('getCampeonato');

    Route::post('/campeonato', [CampeonatoController::class, 'postCampeonato'])->name('postCampeonato');

    Route::put('/campeonato/{id}', [CampeonatoController::class, 'putCampeonato'])->name('putCampeonato');

    Route::delete('/campeonato/{id}', [CampeonatoController::class, 'deleteCampeonato'])->name('deleteCampeonato');

    Route::get('/users', [UserController::class, 'getUsers'])->name('getUsers');

    Route::get('/user/{id}', [UserController::class, 'getUser'])->name('getUser');

    Route::post('/user', [UserController::class, 'postUser'])->name('postUser');

    Route::put('/user/{id}', [UserController::class, 'putUser'])->name('putUser');

    Route::delete('/user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
});