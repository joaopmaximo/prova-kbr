<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo_campeonato',
        'imagem',
        'cidade_estado',
        'data_realizacao',
        'sobre_evento',
        'ginasio',
        'informacoes_gerais',
        'entrada_publico',
        'fase',
        'status'
    ];
}
