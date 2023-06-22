<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('publico.index');
    }
    public function login(){
        return view('publico.sesion');
    }
}
