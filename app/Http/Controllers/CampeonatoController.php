<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use Illuminate\Http\Request;

class CampeonatoController extends Controller
{
    public function getCampeonatos() {
        return response()->json(Campeonato::all());
    }

    public function getCampeonato($id) {
        $campeonato =Campeonato::findOrFail($id);
        return response()->json($campeonato);
    }

    public function postCampeonato(Request $request) {
        $campeonato =Campeonato::create ([
            'titulo_campeonato' => $request->titulo_campeonato,
            'imagem' => $request->imagem,
            'cidade_estado' => $request->cidade . ", " . $request->estado,
            'data_realizacao' => $request->data_realizacao,
            'sobre_evento' => $request->sobre_evento,
            'ginasio' => $request->ginasio,
            'informacoes_gerais' => $request->informacoes_gerais,
            'entrada_publico' => $request->entrada_publico,
            'tipo'=> $request->tipo,
            'fase' => $request->fase,
            'status' => $request->status
        ]);
        return response()->json($campeonato);
    }

    public function putCampeonato(Request $request, $id) {
        $campeonato =Campeonato::findOrFail($id);
        $campeonato->titulo_campeonato = $request->titulo_campeonato;
        $campeonato->imagem = $request->imagem;
        $campeonato->cidade_estado = $request->cidade_estado;
        $campeonato->data_realizacao = $request->data_realizacao;
        $campeonato->sobre_evento = $request->sobre_evento;
        $campeonato->ginasio = $request->ginasio;
        $campeonato->informacoes_gerais = $request->informacoes_gerais;
        $campeonato->entrada_publico = $request->entrada_publico;
        $campeonato->tipo = $request->tipo;
        $campeonato->fase = $request->fase;
        $campeonato->status = $request->status;
        $campeonato->save();
        return response()->json($campeonato);
    }

    public function deleteCampeonato($id) {
        $campeonato =Campeonato::findOrFail($id);
        $campeonato->delete();
        return response(null, 204);
    }
}
