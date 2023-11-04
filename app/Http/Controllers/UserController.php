<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Brazanation\States\States;
use Brazanation\States\Cities;

class UserController extends Controller
{

    public function painelAdmLogin() {
        if(Auth::check() && (Auth::user()->role == "0"|| Auth::user()->role == "1")) {
            return redirect(route('painelAdm'));
        } else if(Auth::check()) {
            return redirect(route('index'));
        }
        return view('painel_administrativo.login');
    }

    public function painelAdm() {
        $usuarios = User::all();
        return view('painel_administrativo.listagem-usuarios', compact('usuarios'));
    }

    public function painelAdmCadastrarUsuario() {
        return view('painel_administrativo.cadastrar-usuario');
    }

    public function painelAdmEditarUsuario($id) {
        $usuario = User::findOrFail($id);
        return view('painel_administrativo.editar-usuario', compact('usuario'));
    }

    public function painelAdmCadastrarCampeonato() {
        return view('painel_administrativo.cadastrar-campeonato', ['estados' => States::all()]);
    }

    public function painelAdmListagemCampeonatos() {
        $campeonatos = Campeonato::all();
        return view('painel_administrativo.listagem-campeonatos', compact('campeonatos'));
    }

    public function painelAdmEditarCampeonato($id) {
        $campeonato = Campeonato::findOrFail($id);
        return view('painel_administrativo.editar-campeonato', compact('campeonato'));
    }

    public function getUsers() {
        return response()->json(User::all());
    }

    public function getUser($id) {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function postUser(Request $request) {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password'=> ['required'],
            'confPass'=> ['required'],
            'role'=> ['required']
        ], [
            'name.required' => 'O campo nome é obrigatório!',
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'O email não é válido!',
            'password.required' => 'O campo senha é obrigatório!',
            'confPass.required' => 'O campo confirmar senha é obrigatório!',
            'role.required' => 'O campo permissões é obrigatório!'
        ]);

        if ($credentials['confPass'] == $credentials['password']) {
            User::create ([
                'name' => $credentials['name'],
                'email' => $credentials['email'],
                'password'=> Hash::make($credentials['password']),
                'role'=> $credentials['role']
            ]);
            return redirect()->back()->with('mensagem', 'Usuário cadastrado com sucesso!');
        }
        return redirect()->back()->with('mensagem', 'Senhas não conferem');
    }

    public function putUser(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('mensagem','Usuário alterado com sucesso!');
    }

    public function deleteUser($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
