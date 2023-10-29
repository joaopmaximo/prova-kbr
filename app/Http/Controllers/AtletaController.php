<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use Illuminate\Http\Request;

class AtletaController extends Controller
{
    public function getAtletas() {
        return response()->json(Atleta::all());
    }

    public function getAtleta($id) {
        $atleta =Atleta::findOrFail($id);
        return response()->json($atleta);
    }

    public function postAtleta(Request $request) {
        $atleta =Atleta::create ([
            'nome' => $request->nome,
            'data_nascimento' => $request->data_nascimento,
            'cpf' => $request->cpf,
            'sexo' => $request->sexo,
            'email' => $request->email,
            'senha' => $request->senha,
            'equipe' => $request->equipe,
            'faixa' => $request->faixa,
            'peso' => $request->peso
        ]);
        return response()->json($atleta);
    }

    public function putAtleta(Request $request, $id) {
        $atleta =Atleta::findOrFail($id);
        $atleta->nome = $request->nome;
        $atleta->data_nascimento = $request->data_nascimento;
        $atleta->cpf = $request->cpf;
        $atleta->sexo = $request->sexo;
        $atleta->email = $request->email;
        $atleta->senha = $request->senha;
        $atleta->equipe = $request->equipe;
        $atleta->faixa = $request->faixa;
        $atleta->peso = $request->peso;
        $atleta->save();
        return response()->json($atleta);
    }

    public function deleteAtleta($id) {
        $atleta =Atleta::findOrFail($id);
        $atleta->delete();
        return response(null, 204);
    }
}
