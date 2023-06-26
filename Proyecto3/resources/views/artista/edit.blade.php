@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
<div class="row m-5 p-3 ">
        <div class="col">
            <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Editar Datos de Arte</h2>
            </div>
            <div class="card-body">
            <form method="POST" action="{{route('artista.update',$imagen->id)}}" enctype="">
                @method('PUT')
                @csrf
                <div class="col">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" value="{{$imagen->titulo}}" name="titulo" class="form-control" id="titulo" >
                </div>
                <div class="mb-3">
                    <label for="archivo" class="form-label">Titulo</label>
                    <input type="text" value="{{$imagen->archivo}}" name="archivo" class="form-control" id="archivo" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Editar Imagen</button>
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