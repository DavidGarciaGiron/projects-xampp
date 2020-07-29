@extends('plantilla')

@section('seccion')
    <h1>Editar la Nota - Consumo de Base de Datos</h1>
    <hr>
    <div class="card-header">
        <h4 class="h4 text-info text-md-left">NOTA: {{ $nota->id }}</h4>
    </div>
    <form action="{{ route('notas.update', $nota->id) }}" method="post">
        @method('PUT')
        @csrf

        @error('nombre')
            <div class="alert alert-danger">
                El Nombre es Obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        @error('descripcion')
            <div class="alert alert-danger">
                La Descripcion es Obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        @error('created_at')
            <div class="alert alert-danger">
                La Fecha es Obligatorio
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror

        <input type="text" name="nombre"
               placeholder="Nombre" class="form-control mb-2"
               value="{{ $nota->nombre }}">
        <input type="text" name="descripcion"
               placeholder="Descripcion" class="form-control mb-2"
               value="{{ $nota->descripcion }}">
        <input type="date" name="created_at"
               placeholder="Fecha" class="form-control mb-2"
               value="{{ $nota->created_at }}">

        <button class="btn btn-dark btn-block"
                type="submit">Editar</button>
    </form>
    <br>

    @if (session('mensaje'))
    <br>
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    <br>
    @endif

    <a href="{{ route('notas') }}" class="btn btn-danger">Regresar <- </a>
@endsection
