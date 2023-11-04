<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AtletaController extends Controller
{
    public function areaAtleta() {
        return view("area_atleta.area-atleta");
    }
    public function getAtletas() {
        return response()->json(Atleta::all());
    }

    public function getAtleta($id) {
        $atleta =Atleta::findOrFail($id);
        return response()->json($atleta);
    }

    public function postAtleta(Request $request, $idCampeonato) {
        if (Atleta::where('email', $request->email)->exists()) {
            return redirect(route('loginAtleta'))->with('mensagem', 'Você já é cadastrado, faça o login para continuar!');
        }

        if ($request->confPass == $request->password) {
            $atleta = Atleta::create ([
                'nome' => $request->nome,
                'data_nascimento' => $request->data_nascimento,
                'cpf' => $request->cpf,
                'sexo' => $request->sexo,
                'email' => $request->email,
                'password'=> Hash::make($request->password),
                'equipe' => $request->equipe,
                'faixa' => $request->faixa,
                'peso' => $request->peso
            ]);

            $atleta->joinCampeonato($idCampeonato);

            return redirect()->back()->with('mensagem', 'Atleta inscrito com sucesso!');
        }
        return redirect()->back()->with('mensagem', 'Senhas não conferem');
    }

    public function putAtleta(Request $request, $id) {
        $atleta =Atleta::findOrFail($id);
        $atleta->nome = $request->nome;
        $atleta->data_nascimento = $request->data_nascimento;
        $atleta->cpf = $request->cpf;
        $atleta->sexo = $request->sexo;
        $atleta->email = $request->email;
        $atleta->password = $request->password;
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

    public function joinCampeonato($idAtleta, $idCampeonato) {
        $atleta = Atleta::findOrFail($idAtleta);
        $atleta->joinCampeonato($idCampeonato);
        return redirect()->back();
    }
}
