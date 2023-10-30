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

    public function integra() {
        return view('integra');
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
