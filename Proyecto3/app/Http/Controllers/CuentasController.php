<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Gate;

class CuentasController extends Controller
{
    public function login(Request $request)
    {
        $user = $request->user;
        $password = $request->password;
        
        if(Auth::attempt(['user'=>$user,'password'=>$password])){
            return redirect()->route('publico.index');
        }

        return back()->withErrors([
            'user' => 'Credenciales Incorrectas',
        ])->onlyInput('user');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('publico.index');
    }
}
