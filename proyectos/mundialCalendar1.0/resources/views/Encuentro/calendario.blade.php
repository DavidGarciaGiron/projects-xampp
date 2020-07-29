@extends('layouts.layout')
@section('content')
<div id="titulo">
<center><h1>Aplicacion Mini Mundial en Laravel</h1></center>
<hr>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <b><a class="navbar-brand" href="#" style="font-family:cursive;">#UNIDOS.IEMPRE.CON.EL.MUNDIAL.RUSSIA.2018</a><b>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"  style="font-family:cursive;">Calendario</a></li>
      <li><a href="{{ route('encuentro.index')}}"  style="font-family:cursive;">ADMINISTRADOR </a>
      	
</li>
      <li><a  style="font-family:cursive;" class="btn btn-outline-info d-lg-inline-block mb-3 mb-md-0 ml-md-3" type="button" name="imprimir" value="IMPRIMIR P&aacute;gina" onclick="window.print();">IMPRIMIR
</a></li>
      
    </ul>
  </div>
</nav>



<div container>
<table class="table table-bordered">
<thead>
        <tr>
        <th style="font-family:cursive;">Lunes</th>
        <th style="font-family:cursive;">Martes</th>
        <th style="font-family:cursive;">Miercoles</th>
        <th style="font-family:cursive;">Jueves</th>
        <th style="font-family:cursive;">Viernes</th>
        <th style="font-family:cursive;">Savado</th>
        <th style="font-family:cursive;">Domingo</th>
        </tr>
</thead >
<tbody>
<tr>
<td style="font-family:cursive;">11 Junio <hr>
3 Dias para el Mundial</td>





<div id="img">
<img src="https://vignette.wikia.nocookie.net/althistory/images/b/b4/Bandera_Alemania-Geo-Politica.png/revision/latest?cb=20130201020006&path-prefix=es">
<img src="https://st2.depositphotos.com/5426476/8610/v/950/depositphotos_86109572-stock-illustration-brazil-flag-with-color-splash.jpg" alt="">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1M6hRa07PanImA4g7I4PQdOnl6ho7_kdsw-GLwo2RhIs7dklN" alt="">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdgXfTWktpO6XVQFJt2KDn7UKXj_iGeTyjaCfKWCR_fUPCyu165Q" alt="">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgDqdQ_srY_qWupg7dxE1p_XI3THpmcua-DShVnlh-uGHiszt4" alt="">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdB3zxXx5k22jK4NVnkYdsBSlo6zZ1eMZH7QAB7WNVAU5MMIxa" alt="">
<img src="https://static.vecteezy.com/system/resources/previews/000/121/481/original/old-poland-flag-vector.jpg" alt="">
<br>
<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Drapeau_du_Royaume_de_Uv%C3%A9a_%281860-1886%29.png/1280px-Drapeau_du_Royaume_de_Uv%C3%A9a_%281860-1886%29.png">
<img src="http://ospinaopina.com/wp-content/uploads/2015/07/bandera-de-espana-hd-1902.jpg" alt="">
<img src="https://st2.depositphotos.com/3519321/9188/i/450/depositphotos_91886364-stockafbeelding-peruaanse-vlag.jpg" alt="">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASYAAACrCAMAAAD8Q8FaAAAAM1BMVEXYJCf////YICPbOTvWChDura7ur7DVAADWBg3xurr++vvXGBzWAAnZKy7vsrPyvb7mgoOOm1RjAAABWElEQVR4nO3dXUrDUBhF0Zhqmpr+zX+0is/i3ZRiLa41gI/c/Xwg0wQAAAAAAAAAAPxH835gfvQX/gXz7mVgp5NMkUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUzT9jp2PI0ynY7hzPbot95uu56XsfMoUzpyfd5O62VU4H4u66Nfe7P18HuZDjLJJJNMkUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJRUqyXZe3sfG+KRxZnnjfZC13P7aXiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUzJZ6b3H8n0xT/HAQAAAAAAAACAb30AROImwTrlJLwAAAAASUVORK5CYII=" alt="">
<img src="https://s3.pixers.pics/pixers/700/FO/57/76/46/61/700_FO57764661_66b15c8fabe808a677259238dbd351b6.jpg" alt="">
<img src="https://i.ytimg.com/vi/xglFsTeEH64/maxresdefault.jpg" alt="">
<img src="https://portavox.com.mx/wp-content/uploads/2016/02/Bandera-Mexico-Portavox-1280x640.jpg">
</div>

<td  style="font-family:cursive;">12 Junio <hr>
2 Dias para el Mundial</td>





<td style="border-bottom: 2px"  style="font-family:cursive;">13 Junio <hr>---ETAPA DE GRUPOS-- <br><br> 1 Dia para el Mundial</td>





<td style="font-family:cursive;"> 14 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-14')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2: {{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">15 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-15')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">16 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-16')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">17 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-17')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





</tr>
<tr style="font-family:cursive;">
<td>18 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-18')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">19 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-19')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">20 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-20')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach 
</td>





<td style="font-family:cursive;">21 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-21')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">22 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-22')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">23 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-23')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">24 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-24')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





</tr>
<tr>
<td style="font-family:cursive;">25 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-25')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">26 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-26')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">27 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-27')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach 
</td>





<td style="font-family:cursive;">28 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-28')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach 
</td>





<td style="font-family:cursive;">29 Junio <hr>

<h5>OCTAVOS DE FINAL</h5>
</td>
<td style="font-family:cursive;">30 Junio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-06-30')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach 
</td>





<td style="font-family:cursive;">1 Julio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-07-01')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach 
</td>





</tr>
<tr>
<td style="font-family:cursive;">2 Julio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-07-02')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">3 Julio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-07-03')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">4 Julio <hr>
<h3></h3>
</td>





<td style="font-family:cursive;">5 Julio <hr>
<h3>CUARTOS DE FINAL</h3></td>





<td style="font-family:cursive;">6 Julio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-07-06')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>





<td style="font-family:cursive;">7 Julio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-07-07')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td >




<td style="font-family:cursive;">8 Julio <hr>
<h3>CUARTOS DE FINAL</h3></td>
</tr>
<tr>
<td style="font-family:cursive;"><P>9 Julio <hr>
<h3>CUARTOS DE FINAL</h3></P>
<P>SEMIFINALES</P></td>
<td>10 Julio <hr>@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-07-10')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>




<td style="font-family:cursive;">11 Julio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-07-11')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>




<td style="font-family:cursive;">12 Julio <hr>
<h3>CUARTOS DE FINAL</h3></td>




<td style="font-family:cursive;">13 Julio <hr></td>









<td style="font-family:cursive;">14 Julio <hr>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-07-14')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>




<td style="font-family:cursive;">15 Julio <hr>
<P>---FINAL--</P>
@foreach($calendarios as $calendario)
@if($calendario->fecha=='2018-07-15')
<div>
<p>Pais1: {{$calendario->pais1}}</p>
<p>Pais2:{{$calendario->pais2}}</p>
<p>Estadio: {{$calendario->estadio}}</p>
<p>Fecha: {{$calendario->fecha}}</p>
<p>Hora: {{$calendario->hora}}<hr></p>
</div>
@endif
@endforeach
</td>




</tr>
</tr>

</tbody>

</table>
<div id="img">
	

<img src="https://vignette.wikia.nocookie.net/althistory/images/b/b4/Bandera_Alemania-Geo-Politica.png/revision/latest?cb=20130201020006&path-prefix=es">
<img src="https://st2.depositphotos.com/5426476/8610/v/950/depositphotos_86109572-stock-illustration-brazil-flag-with-color-splash.jpg" alt="">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1M6hRa07PanImA4g7I4PQdOnl6ho7_kdsw-GLwo2RhIs7dklN" alt="">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdgXfTWktpO6XVQFJt2KDn7UKXj_iGeTyjaCfKWCR_fUPCyu165Q" alt="">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgDqdQ_srY_qWupg7dxE1p_XI3THpmcua-DShVnlh-uGHiszt4" alt="">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdB3zxXx5k22jK4NVnkYdsBSlo6zZ1eMZH7QAB7WNVAU5MMIxa" alt="">
<img src="https://static.vecteezy.com/system/resources/previews/000/121/481/original/old-poland-flag-vector.jpg" alt="">
<br>
<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Drapeau_du_Royaume_de_Uv%C3%A9a_%281860-1886%29.png/1280px-Drapeau_du_Royaume_de_Uv%C3%A9a_%281860-1886%29.png">
<img src="http://ospinaopina.com/wp-content/uploads/2015/07/bandera-de-espana-hd-1902.jpg" alt="">
<img src="https://st2.depositphotos.com/3519321/9188/i/450/depositphotos_91886364-stockafbeelding-peruaanse-vlag.jpg" alt="">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASYAAACrCAMAAAD8Q8FaAAAAM1BMVEXYJCf////YICPbOTvWChDura7ur7DVAADWBg3xurr++vvXGBzWAAnZKy7vsrPyvb7mgoOOm1RjAAABWElEQVR4nO3dXUrDUBhF0Zhqmpr+zX+0is/i3ZRiLa41gI/c/Xwg0wQAAAAAAAAAAPxH835gfvQX/gXz7mVgp5NMkUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUzT9jp2PI0ynY7hzPbot95uu56XsfMoUzpyfd5O62VU4H4u66Nfe7P18HuZDjLJJJNMkUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJRUqyXZe3sfG+KRxZnnjfZC13P7aXiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUyJTIlMiUzJZ6b3H8n0xT/HAQAAAAAAAACAb30AROImwTrlJLwAAAAASUVORK5CYII=" alt="">
<img src="https://s3.pixers.pics/pixers/700/FO/57/76/46/61/700_FO57764661_66b15c8fabe808a677259238dbd351b6.jpg" alt="">
<img src="https://i.ytimg.com/vi/xglFsTeEH64/maxresdefault.jpg" alt="">
<img src="https://portavox.com.mx/wp-content/uploads/2016/02/Bandera-Mexico-Portavox-1280x640.jpg">
</div>
<br><br>

<input class="btn btn-outline-info d-lg-inline-block mb-3 mb-md-0 ml-md-3" type="button" name="imprimir" value="IMPRIMIR P&aacute;gina" onclick="window.print();">

</div>




@endsection