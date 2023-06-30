@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
<div class="row m-5 p-3 ">
        <div class="col">
            <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Perfiles</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($perfiles as $perfil )
                            <tr>
                                <th scope="row">{{$perfil->id}}</th>
                                <td>{{$perfil->nombre}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>  
            </div>          
        </div>
    <div>
</div>
    
@endsection