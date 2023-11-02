<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
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

        // verifica se as credenciais estao no banco de dados
        if (Auth::attempt($credentials)) {
            // verifica se a credencial de um atleta
                $request->session()->regenerate(); // gera um id para a sessão
                return redirect(route('areaAtleta')); // redirecionamento
        }

        return redirect()->back()->with('erro', 'Email ou senha inválido');
    }

    public function logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('painelAdmLogin'));
    }
}
