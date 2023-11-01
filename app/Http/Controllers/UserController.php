<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUsers() {
        return response()->json(User::all());
    }

    public function getUser($id) {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function postUser(Request $request) {
        if ($request->confPass == $request->password) {
            $user = User::create ([
                'name' => $request->name,
                'email' => $request->email,
                'password'=> Hash::make($request->password),
            ]);
            return response()->json($user);
        }
        return response(null, 400);
    }

    public function putUser(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json($user);
    }

    public function deleteUser($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return response(null, 204);
    }
}
