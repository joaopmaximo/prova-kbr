<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Atleta extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'data_nascimento',
        'cpf',
        'sexo',
        'email',
        'senha',
        'equipe',
        'faixa',
        'peso',
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];
}
