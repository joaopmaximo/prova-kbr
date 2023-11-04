<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:atleta')->except('logout');
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
            return redirect(route('index')); // redirecionamento
        }
        
        return redirect()->back()->with('erro', 'Email ou senha inválido');
    }
}
