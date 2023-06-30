<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use Illuminate\Support\Facades\DB;

class AdministadoresController extends Controller
{
    public function perfil() {
        $perfiles = DB::table('perfiles')->get();
        return view('admin.perfil',compact('perfiles'));
    }   
    public function ban() {
        $imagenes = DB::table('imagenes')->get();
        return view('admin.ban',compact('imagenes'));
    }   
}
