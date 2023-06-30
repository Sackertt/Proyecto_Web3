@extends('template.master')
@section('contenidoPrincipal')
<div class="container">
    <div class="row">
        <div class="col mt-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3>Insertar motivo de baneo Imagen</h3>
                </div>
                <div class="card-body" >
                    <form action="{{route('admin.motivobanSubir',$imagen->id)}}" method="POST">
                        @method('put');
                        @csrf
                        <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Imagen</label>
                        <input type="text" class="form-control" id="nombre" placeholder="{{$imagen->titulo}}" readonly>
                        </div>
                        <div class="mb-3">
                        <label for="motivoBan"  class="form-label">Motivo Baneo</label>
                        <textarea class="form-control" id="motivoBan" name="motivoBan" rows="2"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger text-white">Banear Imagen</button>
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
        
       
    </div>

</div>
    
@endsection