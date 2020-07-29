@extends('plantilla')

@section('seccion')
    <h1>Nosotros-consumir arreglo</h1>
    <br>
    <h1>Este es mi Equipo de Trabajo</h1>

    @foreach ($equipo as $item)
        <a href="{{ route('nosotros',$item) }}" class="h4 text-info">{{ $item }}</a><br>
    @endforeach

    @if(!empty($nombre))
        @switch($nombre)
            @case($nombre=='David')
                <br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="h4 text-info text-md-left">USUARIO: {{ $nombre }}</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="text-md-left">Nombre:   David Adolfo</h6>
                        <h6 class="text-md-left">Apellido: Garcia Giron</h6>
                        <h6 class="text-md-left">Edad:     20 años</h6><br>
                    </div>
                </div>
                @break
            @case($nombre=='Piero')
                <br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="h4 text-info text-md-left">USUARIO: {{ $nombre }}</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="text-md-left">Nombre:   Piero Axcel</h6>
                        <h6 class="text-md-left">Apellido: Granda Ricaldi</h6>
                        <h6 class="text-md-left">Edad:     19 años</h6><br>
                    </div>
                </div>
                @break
            @case($nombre=='Arian')
                <br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="h4 text-info text-md-left">USUARIO: {{ $nombre }}</h4>
                    </div>
                    <div class="card-body">
                        <h6 class="text-md-left">Nombre:   Arian</h6>
                        <h6 class="text-md-left">Apellido: Angoma Vilchez</h6>
                        <h6 class="text-md-left">Edad:     20 años</h6><br>
                    </div>
                </div>
                @break
            @default

        @endswitch
    @endif

@endsection
