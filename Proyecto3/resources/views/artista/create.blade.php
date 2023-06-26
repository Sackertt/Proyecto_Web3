@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
<div class="row m-5 p-3 ">
        <div class="col">
            <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Subir Imagen</h2>
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
                <button type="submit" class="btn btn-primary">Subir Imagen</button>
            </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <p>Por favor solucione los siguientes problemas:</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            </div>
            
            
        </div>
    <div>
</div>
    
@endsection