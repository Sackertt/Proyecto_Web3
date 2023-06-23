<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        $imagenes = Imagen::All();
        return view('publico.index',compact('imagenes'));
    }
    public function login(){
        return view('publico.sesion');
    }
    public function register(){
        return view('publico.register');
    }
}
