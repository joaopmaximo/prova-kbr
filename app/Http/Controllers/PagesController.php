<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;

class PagesController extends Controller
{

    public function index() {
        $campeonatos = Campeonato::orderBy("created_at","desc")->get();
        $mes = array(
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
        return view('index', compact('campeonatos', 'mes'));
    }

    public function integra($id) {
        $mes = array(
            'Jan' => 'Janeiro',
            'Feb' => 'Fevereiro',
            'Mar' => 'Marco',
            'Apr' => 'Abril',
            'May' => 'Maio',
            'Jun' => 'Junho',
            'Jul' => 'Julho',
            'Aug' => 'Agosto',
            'Nov' => 'Novembro',
            'Sep' => 'Setembro',
            'Oct' => 'Outubro',
            'Dec' => 'Dezembro'
        );
        $semana = array(
            'Sun' => 'Domingo', 
            'Mon' => 'Segunda-Feira',
            'Tue' => 'Terca-Feira',
            'Wed' => 'Quarta-Feira',
            'Thu' => 'Quinta-Feira',
            'Fri' => 'Sexta-Feira',
            'Sat' => 'Sábado'
        );
        $campeonato = Campeonato::find($id);
        return view('integra', compact('campeonato', 'mes', 'semana'));
    }

    public function inscricao() {
        return view('inscricao');
    }

    public function listagemUsuarios() {
        return view('painel_administrativo.listagem-usuarios');
    }

    public function cadastrarUsuario() {
        return view('painel_administrativo.cadastrar-usuario');
    }
    
    public function cadastrarCampeonato() {
        return view('painel_administrativo.cadastrar-campeonato');
    
    }
    public function listagemCampeonatos() {
        return view('painel_administrativo.listagem-campeonatos');
    }
}
