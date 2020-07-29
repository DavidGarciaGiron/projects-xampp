@extends('layouts.layout')
@section('content')


<div class="row">
  <section class="content">
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">
              <div class="panel-body">
                <div class="pull-left"><h3 style="color:black; font-family: 'Big Caslon', 'Book Antiqua', 'Palatino Linotype', Georgia, serif;">TABLA DE DATOS DE LOS PARTIDOS</h3>
                </div>  
                <div class="pull-right">
                  <div class="btn-group">
                    <a href="{{ route('encuentro.create') }}" class="btn btn-info" style="color:black; font-family: 'Big Caslon', 'Book Antiqua', 'Palatino Linotype', Georgia, serif;">AÑADIR NUEVO ENCUENTRO DEL MUNDIAL</a>
                   </div>
                  </div>
                 <div class="table-container">
                    <table id="mytable" class="table table-bordred table-striped" style="color:black; font-family: 'Big Caslon', 'Book Antiqua', 'Palatino Linotype', Georgia, serif;background: rgb(0,0,0,0.4);">
                     <thead>
                        <th>Pais1</th>
                         <th>Pais2</th>
                         <th>Estadio</th>
                         <th>Grupo</th>
                         <th>Hora</th>
                         <th>Fecha</th>
                         <th>Editar</th>
                         <th>Eliminar</th>
                       </thead>
                       <tbody>
                         @if($encuentros->count())  
                        @foreach($encuentros as $encuentro)  
                         <tr>
                        <td>{{$encuentro->pais1}}</td>
                        <td>{{$encuentro->pais2}}</td>
                        <td>{{$encuentro->estadio}}</td>
                        <td>{{$encuentro->grupo}}</td>
                        <td>{{$encuentro->hora}}</td>
                        <td>{{$encuentro->fecha}}</td>
                           <td><a class="btn btn-primary btn-xs" href="{{action('EncuentrosController@edit', $encuentro->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('EncuentrosController@destroy', $encuentro->id)}}" method="post">
                           {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
                     <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                  </form>

                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
          
        </div>
      </div>
      {{ $encuentros->links() }}
    </div>
  </div>
</section>
</div>
 
@endsection
                           