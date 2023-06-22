@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
<div class="row m-5 p-3 ">
        <div class="col">
            <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Iniciar Sesion</h2>
            </div>
            <div class="card-body">
            <form method="POST" action="{{route('cuenta.login')}}">
                @csrf
                <div class="col mb-3">
                <label for="usuario" class="form-label">Nombre de Usuario</label>
                <input type="user" name="user" class="form-control" id="usuario">
                </div>
                <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" id="contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
            </div>
            </div>
            
            
        </div>
    <div>
</div>
    
@endsection