<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Models\Cuenta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(Request $request){
        $usuario=$request->artista;
        $artistas = DB::table('cuentas')->where('perfil_id',1)->get();
        if($artistas->contains('user', $usuario)){
            $imagenes = DB::table('imagenes')->where('cuenta_user',$usuario)->where('baneada',0)->get();
        } else {
            $imagenes = DB::table('imagenes')->where('baneada',0)->get();
        }

        return view('publico.index',compact(['imagenes','artistas']));
    }
    public function login(){
        return view('publico.sesion');
    }
    public function register(){
        return view('publico.register');
    }
    public function redirectToHome()
{
    return view('home');
}

}
