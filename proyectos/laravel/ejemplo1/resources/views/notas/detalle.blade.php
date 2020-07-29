@extends('plantilla')

@section('seccion')
    <h1>Detalle de Nota - Consumo de Base de Datos</h1>
    <hr>
    <div class="card-header">
        <h4 class="h4 text-info text-md-left">NOTA: {{ $nota->id }}</h4>
    </div>
    <div class="card-body">
        <h6 class="text-md-left">Nombre:      {{ $nota->nombre }}</h6>
        <h6 class="text-md-left">Descripcion: {{ $nota->descripcion }}</h6>
        <h6 class="text-md-left">Fecha:       {{ $nota->created_at }}</h6><br>
    </div>

    <a href="{{ route('notas') }}" class="btn btn-danger">Regresar <- </a>
@endsection
