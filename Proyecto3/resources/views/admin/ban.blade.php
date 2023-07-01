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
                            <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Banear Imagen
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Motivo Baneo</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('admin.motivobanSubir',$imagen->id)}}" method="POST">
                                        @method('put')
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="motivoBan"  class="form-label">Motivo Baneo</label>
                                                    <textarea class="form-control" id="motivoBan" name="motivoBan" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary">Confirmar Baneo</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
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