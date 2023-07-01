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
                                <form action="{{route('admin.motivobanSubir',$imagen->id)}}" method="post">
                                    @csrf
                                    @method('put')
                                                
                                    <div class="mb-3">
                                        <label for="motivoBan" class="form-label">Motivo de Ban</label>
                                        <input type="text" class="form-control" name="motivoBan" id="motivoBan">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Banear Imagen</button>
                                </form>     
                            </div>
                        @elseif($imagen->baneada == 1)
                            <div class="col" >
                                <form action="{{route('admin.desbanear',$imagen->id)}}" method="post">
                                    @method('put')  
                                    @csrf 
                                    <button type="submit" class="btn btn-success text-white">Desbanear</button>
                                </form>
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