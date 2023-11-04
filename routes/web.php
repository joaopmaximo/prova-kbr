<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\CampeonatoController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/teste', function (Request $request) {
    if (Auth::guard('atleta')->attempt($request->all())) {
        return redirect('/teste2');
    }
    
    return 'Falha na autenticação';
});

Route::get('/teste2', function () {
    dd(Auth::guard('atleta')->check());
});


Route::get('/', [PagesController::class, 'home'])->name('home');

Route::redirect('/home', '/');

Route::get('/integra/{id}', [PagesController::class, 'integra'])->name('integra');

Route::get('/inscricao/{id}', [CampeonatoController::class, 'inscricaoAtleta'])->name('inscricaoAtleta');

Route::get('/login', [AuthController::class, 'loginAtleta'])->name('loginAtleta');

Route::get('/painel-administrativo/login', [AuthController::class, 'loginUser'])->name('loginUser');

Route::post('/painel-administrativo/auth', [AuthController::class,'authUser'])->name('authUser');

Route::post('/auth', [AuthController::class,'authAtleta'])->name('authAtleta');

Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::post('/atleta/{idCampeonato}', [AtletaController::class, 'postAtleta'])->name('postAtleta');

Route::middleware('atletaRole')->group(function () {
    
    Route::get('/area-atleta', [AtletaController::class,'areaAtleta'])->name('areaAtleta');

});

// rotas que o usuario e admin podem acessar
Route::middleware(['auth', 'userRole:0,1'])->group(function () {

    Route::get('/painel-administrativo/listagem-campeonatos', [UserController::class, 'painelAdmListagemCampeonatos'])->name('listagemCampeonatos');

    Route::get('/painel-administrativo', [UserController::class, 'painelAdm'])->name('painelAdm');
    
    Route::get('/painel-administrativo/listagem-usuarios', [UserController::class, 'painelAdm'])->name('listagemUsuarios');

});

// rotas que so o admin pode acessar
Route::middleware(['auth', 'userRole:1'])->group(function () {

    Route::get('/painel-administrativo/cadastrar-usuario', [UserController::class, 'painelAdmCadastrarUsuario'])->name('cadastrarUsuario');

    Route::get('/painel-administrativo/editar-usuario/{id}', [UserController::class, 'painelAdmEditarUsuario'])->name('editarUsuario');
    
    Route::get('/painel-administrativo/cadastrar-campeonato', [UserController::class, 'painelAdmCadastrarCampeonato'])->name('cadastrarCampeonato');

    Route::get('/painel-administrativo/editar-campeonato/{id}', [UserController::class, 'painelAdmEditarCampeonato'])->name('editarCampeonato');

    Route::get('/atletas', [AtletaController::class, 'getAtletas'])->name('getAtletas');

    Route::get('/atleta/{id}', [AtletaController::class, 'getAtleta'])->name('getAtleta');

    Route::put('/atleta/{id}', [AtletaController::class, 'putAtleta'])->name('putAtleta');

    Route::delete('/atleta/{id}', [AtletaController::class, 'deleteAtleta'])->name('deleteAtleta');

    Route::get('/campeonatos', [CampeonatoController::class, 'getCampeonatos'])->name('getCampeonatos');

    Route::get('/campeonato/{id}', [CampeonatoController::class, 'getCampeonato'])->name('getCampeonato');

    Route::post('/campeonato', [CampeonatoController::class, 'postCampeonato'])->name('postCampeonato');

    Route::put('/campeonato/{id}', [CampeonatoController::class, 'putCampeonato'])->name('putCampeonato');

    Route::delete('/campeonato/{id}', [CampeonatoController::class, 'deleteCampeonato'])->name('deleteCampeonato');

    Route::post('/user', [UserController::class, 'postUser'])->name('postUser');

    Route::get('/users', [UserController::class, 'getUsers'])->name('getUsers');

    Route::get('/user/{id}', [UserController::class, 'getUser'])->name('getUser');

    Route::put('/user/{id}', [UserController::class, 'putUser'])->name('putUser');

    Route::delete('/user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

});
