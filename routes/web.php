<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AtletaController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::get('/integra', [PagesController::class, 'integra'])->name('integra');

Route::get('/inscricao', [PagesController::class, 'inscricao'])->name('inscricao');

Route::get('/atletas', [AtletaController::class, 'getAtletas']);

Route::get('/atleta/{id}', [AtletaController::class, 'getAtleta']);

Route::post('/atleta', [AtletaController::class, 'postAtleta']);

Route::put('/atleta/{id}', [AtletaController::class, 'putAtleta']);

Route::delete('/atleta/{id_do_atleta}', [AtletaController::class, 'deleteAtleta']);