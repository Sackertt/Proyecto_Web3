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
                    <div class="row mt-3">
                        @if($imagen->baneada == 0)
                            <div class="col">
                                <a href="{{route('admin.motivoban',$imagen->id)}}" class="btn btn-danger text-white">Banear</a>
                            </div>
                        @elseif($imagen->baneada == 1)
                            <div class="col" >
                                <a href=""class="btn btn-success text-white">Desbanear</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div>
</div>
    
@endsection