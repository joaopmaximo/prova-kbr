<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Atleta extends Authenticatable
{
    use HasFactory;
    
    protected $guard = 'atleta';
    protected $fillable = [
        'nome',
        'data_nascimento',
        'cpf',
        'sexo',
        'email',
        'password',
        'equipe',
        'faixa',
        'peso'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function campeonatos() {
        return $this->belongsToMany(Campeonato::class);
    }

    public function joinCampeonato($idCampeonato) {
        $this->campeonatos()->attach($idCampeonato);
    }
}
