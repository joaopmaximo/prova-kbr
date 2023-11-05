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
        'estado',
        'cidade',
        'data_realizacao',
        'sobre_evento',
        'ginasio',
        'informacoes_gerais',
        'entrada_publico',
        'tipo',
        'fase',
        'status',
        'destaque'
    ];

    public function atletas() {
        return $this->belongsToMany(Atleta::class);
    }

    public function destacar() {
        $this['destaque'] = 1;
        
        return $this->save();
    }

    public function removerDestaque() {
        $this['destaque'] = 0;

        return $this->save();
    }
}
