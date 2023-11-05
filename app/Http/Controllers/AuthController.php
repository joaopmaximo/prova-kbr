<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function __construct() {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:atleta')->except('logout');
    }

    public function inscricaoAtleta($id) {
        $campeonato = Campeonato::findOrFail($id);
        return view('area_atleta.inscricao-atleta', compact('campeonato'));
    }

    public function loginAtleta() {
        return view('area_atleta.login-atleta');
    }

    public function loginUser() {
        return view('painel_administrativo.login');
    }

    public function authUser(Request $request) {

        // valida a entrada e armazena as credenciais da requisicao
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password'=> ['required']
        ], [
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'O email não é válido!',
            'password.required' => 'O campo senha é obrigatório!'
        ]);

        // verifica se as credenciais estao no banco de dados
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // gera um id para a sessão
            return redirect(route('painelAdm')); // redirecionamento
        }

        return redirect()->back()->with('erro', 'Email ou senha inválido');
    }

    public function authAtleta(Request $request) {

        // valida a entrada e armazena as credenciais da requisicao
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password'=> ['required']
        ], [
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'O email não é válido!',
            'password.required' => 'O campo senha é obrigatório!'
        ]);

        if (Auth::guard('atleta')->attempt($credentials)) {
            $request->session()->regenerate(); // gera um id para a sessão
            return redirect(route('areaAtleta')); // redirecionamento
        }

        return redirect()->back()->with('erro', 'Email ou senha inválido');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
