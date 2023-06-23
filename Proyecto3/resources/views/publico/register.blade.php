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
            <form method="POST" action="{{route('artista.register')}}">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="usuario" class="form-label">Nombre de Usuario</label>
                        <input type="user" name="user" class="form-control" id="usuario">
                     </div>
                    <div class="col">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="contraseña">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="usuario" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="usuario">
                    </div>
                    <div class="col">
                        <label for="usuario" class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="usuario">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
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