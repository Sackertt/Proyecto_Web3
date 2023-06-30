<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use Illuminate\Support\Facades\DB;
use Gate;

class AdministadoresController extends Controller
{
    public function perfil() {
        if(Gate::denies('admin-acceso')){
            return redirect()->route('publico.index');
        }
        $perfiles = DB::table('perfiles')->get();
        return view('admin.perfil',compact('perfiles'));
    }   
    public function ban() {
        if(Gate::denies('admin-acceso')){
            return redirect()->route('publico.index');
        }
        $imagenes = DB::table('imagenes')->get();
        return view('admin.ban',compact('imagenes'));
    }   
}
