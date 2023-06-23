@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
<div class="row m-5 p-3 ">
        <div class="col-4">
            <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Titulo</h2>
            </div>
            <div class="card-body">
                <img src="{{asset('images/descarga.jpg')}}" alt="" class="img-fluid">
            </div>
            </div>
            
            
        </div>
        @foreach($imagenes as $imagen)
            <div class="col-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2>{{$imagen->titulo}}</h2>
                    </div>
                    <div class="card-body">
                        <img class="img-thumbnail" src="{{asset('app/public/'.$imagen->archivo)}}"  alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        @endforeach
    <div>
</div>
    
@endsection