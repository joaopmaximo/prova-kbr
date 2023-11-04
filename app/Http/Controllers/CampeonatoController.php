<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use Illuminate\Http\Request;

class CampeonatoController extends Controller
{

    public function inscricaoAtleta($id) {
        $campeonato = Campeonato::findOrFail($id);
        return view('area_atleta.inscricao-atleta', compact('campeonato'));
    }

    public function getCampeonatos() {
        return response()->json(Campeonato::all());
    }

    public function getCampeonato($id) {
        $campeonato =Campeonato::findOrFail($id);

        return response()->json($campeonato);
    }

    public function postCampeonato(Request $request) {
        $credentials = $request->validate([
            'titulo_campeonato' => ['required'],
            'imagem' => ['required'],
            'estado'=> ['required'],
            'cidade'=> ['required'],
            'data_realizacao'=> ['required'],
            'sobre_evento'=> ['required'],
            'ginasio'=> ['required'],
            'informacoes_gerais'=> ['required'],
            'entrada_publico' => [],
            'tipo'=> ['required'],
            'fase'=> ['required'],
            'status'=> ['required']
        ], [
            'titulo_campeonato.required' => 'O campo título é obrigatório!',
            'imagem.required' => 'O campo imagem é obrigatório!',
            'estado.required' => 'O campo estado é obrigatório!',
            'cidade.required' => 'O campo cidade é obrigatório!',
            'data_realizacao.required' => 'O campo data de realização é obrigatório!',
            'sobre_evento.required' => 'O campo sobre o evento é obrigatório!',
            'ginasio.required' => 'O campo ginasio é obrigatório!',
            'informacoes_gerais.required' => 'O campo informações gerais é obrigatório!',
            'tipo.required' => 'O campo tipo é obrigatório!',
            'fase.required' => 'O campo fase é obrigatório!',
        ]);

        // manipulando o upload da imagem
        $extension = $credentials['imagem']->extension();
        $imageName = md5($credentials['imagem']->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $credentials['imagem']->move(public_path("/imgs"), $imageName);

        Campeonato::create ([
            'titulo_campeonato' => $credentials['titulo_campeonato'],
            'imagem' => $imageName,
            'estado' => $credentials['estado'],
            'cidade' => $credentials['cidade'],
            'data_realizacao' => $credentials['data_realizacao'],
            'sobre_evento' => $credentials['sobre_evento'],
            'ginasio' => $credentials['ginasio'],
            'informacoes_gerais' => $credentials['informacoes_gerais'],
            'entrada_publico' => $credentials['entrada_publico'],
            'tipo'=> $credentials['tipo'],
            'fase' => $credentials['fase'],
            'status' => $credentials['status']
        ]);

        return redirect()->back()->with('mensagem', 'Campeonato cadastrado com sucesso!');
    }

    public function putCampeonato(Request $request, $id) {
        $campeonato =Campeonato::findOrFail($id);
        $campeonato->titulo_campeonato = $request->titulo_campeonato;
        $campeonato->imagem = $request->imagem;
        $campeonato->estado = $request->cidade_estado;
        $campeonato->cidade = $request->cidade_cidade;
        $campeonato->data_realizacao = $request->data_realizacao;
        $campeonato->sobre_evento = $request->sobre_evento;
        $campeonato->ginasio = $request->ginasio;
        $campeonato->informacoes_gerais = $request->informacoes_gerais;
        $campeonato->entrada_publico = $request->entrada_publico;
        $campeonato->tipo = $request->tipo;
        $campeonato->fase = $request->fase;
        $campeonato->status = $request->status;
        $campeonato->save();

        return redirect()->back()->with('mensagem','Campeonato alterado com sucesso!');
    }

    public function deleteCampeonato($id) {
        $campeonato =Campeonato::findOrFail($id);
        $campeonato->delete();

        return redirect()->back();
    }
}
