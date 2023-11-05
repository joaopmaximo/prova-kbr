<?php

namespace App\Http\Controllers;

use App\Models\Campeonato;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function filtrarUsuarios(Request $request)  {
        $busca = $request->busca;
        $status = $request->status;
        $dataInicio = $request->de;
        $dataFinal = $request->ate;
        $filtros = $request->all();

        $usuarios = User::where('name', 'LIKE', "%$busca%")
        ->when($status !== null, function ($query) use ($status) {
            return $query->where('status', $status);
        })
        ->when($dataInicio !== null, function ($query) use ($dataInicio) {
            return $query->whereDate('created_at', '>=', $dataInicio);
        })
        ->when($dataFinal !== null, function ($query) use ($dataFinal) {
            return $query->whereDate('created_at', '<=', $dataFinal);
        })
        ->orderBy('created_at', 'desc')
        ->paginate(3);

        return view("painel_administrativo.listagem-usuarios", compact('usuarios','filtros'));
    }
    
    public function painelAdm() {
        $usuarios = User::orderBy("created_at","asc")->paginate(4);;

        return view('painel_administrativo.listagem-usuarios', compact('usuarios'));
    }

    public function painelAdmCadastrarUsuario() {
        return view('painel_administrativo.cadastrar-usuario');
    }

    public function painelAdmEditarUsuario($id) {
        $usuario = User::findOrFail($id);

        return view('painel_administrativo.editar-usuario', compact('usuario'));
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
            'role'=> ['required'],
            'status'=> ['required']
        ], [
            'name.required' => 'O campo nome é obrigatório!',
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'O email não é válido!',
            'password.required' => 'O campo senha é obrigatório!',
            'confPass.required' => 'O campo confirmar senha é obrigatório!',
            'role.required' => 'O campo permissões é obrigatório!',
            'status.required' => 'O campo status é obrigatório!'
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

        if (!is_null($request->password)) {
            $user->password = Hash::make($request->password);
        }

        if (!is_null($request->role)) {
            $user->role = $request->role;
        }

        if (!is_null($request->status)) {
            $user->status = $request->status;
        }

        $user->save();

        return redirect()->back()->with('mensagem','Usuário alterado com sucesso!');
    }

    public function deleteUser($id) {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->back();
    }
}
