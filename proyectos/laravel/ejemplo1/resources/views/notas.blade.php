@extends('plantilla')

@section('seccion')
    <h1>Notas - Consumo de Base de Datos</h1>
    <hr>
    <div class="container col-md-12">
        <h3>Registrar un Nueva Nota:</h3>
        <br>
        <form action="{{ route('notas.crear') }}" method="post">
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
                   value="{{ old('nombre') }}">
            <input type="text" name="descripcion"
                   placeholder="Descripcion" class="form-control mb-2"
                   value="{{ old('descripcion') }}">
            <input type="date" name="created_at"
                   placeholder="Fecha" class="form-control mb-2"
                   value="{{ old('created_at') }}">
            <button class="btn btn-primary btn-block"
                    type="submit">Agregar</button>
        </form>
        @if (session('mensaje'))
        <br>
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
        <br>
        @endif
    </div>
    <hr>
    <h3>Lista de Notas Agregadas:</h3>
    <br>
    <table class="table table-light">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">FECHA</th>
            <th scope="col">OPERACIONES</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($notas as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>
                    <a href="{{ route('notas.detalle', $item) }}">
                        {{ $item->nombre }}
                    </a>
                </td>
                <td>{{ $item->descripcion }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a href="{{ route('notas.editar', $item) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('notas.eliminar', $item) }}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $notas->links() }}
@endsection
