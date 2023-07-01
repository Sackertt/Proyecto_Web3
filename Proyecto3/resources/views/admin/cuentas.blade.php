@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
<div class="row m-5 p-3 ">
        <div class="col">
            <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Cuentas</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cuentas as $cuenta)
                            <tr>
                                <th scope="row">{{$perfil->id}}</th>
                                <td>{{$cuenta->user}}</td>
                                <td>{{$cuenta->nombre}}</td>
                                <td>{{$cuenta->apellido}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>  
            </div>          
        </div>
    <div>
</div>
    
@endsection