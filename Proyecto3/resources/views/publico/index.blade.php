@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
    <div class="row">
        <div class="col mt-3">
           <form action="{{route('publico.index')}}">
                <select class="form-select"  name="artista" aria-label="Default select example">
                    <option selected>Seleccione Artista para filtrar busqueda</option>
                    @foreach($artistas as $artista)
                      <option value="{{$artista->user}}">{{$artista->user}}</option>
                    @endforeach
                </select>
                <button class="btn btn-secondary mt-1" type="submit">Aplicar Cambios</button>
            </form>
            
        </div>
    </div>
    <div class="row mt-3 mb-3 d-flex flex-wrap">
    @foreach($imagenes as $imagen)
        <div class="col-6 mb-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2>{{$imagen->titulo}}</h2>
                </div>
                <div class="card-body d-flex flex-column">
                    <img src="{{asset('storage/'.$imagen->archivo)}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection