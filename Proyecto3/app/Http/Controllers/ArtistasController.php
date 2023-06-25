<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cuenta;
use App\Models\Imagen;
use App\Http\Requests\ArtistasRequest;
use App\Http\Requests\ArteRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ArtistasController extends Controller
{
    public function register(ArtistasRequest $request){
        $cuenta = new Cuenta();
        $cuenta->user= $request->user;
        $cuenta->password = Hash::make($request->password);
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->perfil_id = 1;
        $cuenta->save();
        return view('publico.register');
    }
    public function create(){
        
        return view('artista.create');
    }
    public function store(ArteRequest $request){
        $imagen = new Imagen();
        $imagen->titulo = $request->titulo;
        $file = $request->file('img');
        $name = $file->getClientOriginalName();
        $file->storeAs('',$name,'public');
        $imagen->archivo = $name;
        $imagen->cuenta_user = Auth::user()->user;
        $imagen->save();
        return redirect()->route('publico.index');
    }
    public function update(Request $request, Imagen $imagen){
        $imagen->titulo = $request->titulo;
        $imagen->save();

        return redirect()->route('artista.gestion');
    }
    public function edit($imagen) {
        $imagen = DB::table('imagenes')->where('id',$imagen)->first();
        
        return view('artista.edit',compact('imagen'));
    }
    public function gestion(){
        $imagenes = DB::table('imagenes')->where('cuenta_user',Auth::user()->user)->get();
        return view('artista.gestion',compact('imagenes'));
    }
    
    public function delete(Imagen $imagen){
        Storage::delete('public/'.$imagen->archivo);
        DB::table('imagenes')->where('id',$imagen->id)->delete();
        return redirect()->route('artista.gestion');
    }
}
