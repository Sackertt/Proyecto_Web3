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
                            
                            <div  class="col" ><a class="btn btn-secondary" href="{{route('artista.edit',$imagen->id)}}">Editar Imagen</a></div>
                           
                           
                            <div class="col">
                                <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar Imagen</button></div>
                            </div>
                    </div>
                </div>
                
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Imagen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
            </div>
            <div class="modal-body">
                ¿Seguro que desea eliminar la imagen?
            </div>
            <div class="modal-footer">
                <form action="{{route('artista.delete',$imagen->id)}}" >
                @csrf
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger text-white">Eliminar Imagen</button>
                </form>
                
            </div>
            </div>
        </div>
    </div>
    @endforeach
    

    <a href="{{route('artista.create')}}" class="btn btn-secondary">Agregar Arte</a>
            
            
        </div>
    <div>
</div>
    
@endsection