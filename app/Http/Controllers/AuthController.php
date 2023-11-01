<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request) {

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
        if ($teste = Auth::attempt($credentials)) {
            $request->session()->regenerate(); // gera um id para a sessão
            return redirect()->intended('/painel-administrativo/cadastrar-usuario'); // redirecionamento
        } else {
            return redirect()->back()->with('erro', 'Email ou senha inválido');
        }
    }
}
