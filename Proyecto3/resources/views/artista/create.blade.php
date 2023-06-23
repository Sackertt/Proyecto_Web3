@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
<div class="row m-5 p-3 ">
        <div class="col">
            <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Crear Cuenta de Artista</h2>
            </div>
            <div class="card-body">
            <form method="POST" action="{{route('artista.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col">
                    <label for="usuario" class="form-label">Titulo</label>
                    <input type="text" name="titulo" class="form-control" id="usuario">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Subir Imagen</label>
                    <input class="form-control" type="file" name="img" id="formFile">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>

            </div>
            </div>
            
            
        </div>
    <div>
</div>
    
@endsection