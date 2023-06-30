<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;
use App\Models\Imagen;
use Illuminate\Support\Facades\DB;
use Gate;
use App\Http\Requests\BanearRequest;

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
    public function motivoban($imagen) {
        $imagen = DB::table('imagenes')->where('id',$imagen)->first();
        return view('admin.motban',compact('imagen'));
    }   
    public function motivobanSubir(BanearRequest $request,Imagen $imagen){
        $imagen->motivo_ban = $request->motivoBan;
        $imagen->baneada = 1;
        $imagen->save();
        return redirect()->route('publico.index');
    }
}
