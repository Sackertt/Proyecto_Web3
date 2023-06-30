@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
<div class="row m-5 p-3 ">
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
    <div>
</div>
    
@endsection