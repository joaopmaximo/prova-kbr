<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::get('/integra', [PagesController::class, 'integra'])->name('integra');

Route::get('/inscricao', [PagesController::class, 'inscricao'])->name('inscricao');

Route::get('/atletas', [atletaController::class, 'getAtletas']);

Route::get('/atleta/{id}', [atletaController::class, 'getAtleta']);

Route::post('/cadastrar', [atletaController::class, 'postAtleta']);

Route::put('/atleta/{id}', [atletaController::class, 'putAtleta']);

Route::delete('/atleta/{id_do_atleta}', [atletaController::class, 'deleteAtleta']);