<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;

class PagesController extends Controller
{
    public $mes = array(
        'Jan' => 'Jan',
        'Feb' => 'Fev',
        'Mar' => 'Mar',
        'Apr' => 'Abr',
        'May' => 'Mai',
        'Jun' => 'Jun',
        'Jul' => 'Jul',
        'Aug' => 'Ago',
        'Nov' => 'Nov',
        'Sep' => 'Set',
        'Oct' => 'Out',
        'Dec' => 'Dez'
    );

    public $semana = array(
        'Sun' => 'Domingo', 
        'Mon' => 'Segunda-Feira',
        'Tue' => 'Terca-Feira',
        'Wed' => 'Quarta-Feira',
        'Thu' => 'Quinta-Feira',
        'Fri' => 'Sexta-Feira',
        'Sat' => 'Sábado'
    );

    public function index() {
        $campeonatos = Campeonato::orderBy("created_at","desc")->get();
        
        return view('index', ['campeonatos' => $campeonatos, 'mes' => $this->mes]);
    }
    
    public function integra($id) {
        $campeonato = Campeonato::find($id);
        
        return view('integra', ['campeonato' => $campeonato, 'mes' => $this->mes, 'semana' => $this->semana]);
    }

    
}
