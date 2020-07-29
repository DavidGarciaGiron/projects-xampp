@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> REVISE QUE LOS CAMPOS ESTEN BIEN COLOCADOS<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 					<h1 style="font-size: 40px;">REGISTRE PARTIDOS NUEVOS</h1>
			<div class="panel panel-default">
				<div class="panel-heading">
					
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('encuentro.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="pais1" id="pais1" class="form-control input-sm" placeholder="El equipo numero 1 ">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="pais2" id="pais2" class="form-control input-sm" placeholder="El equipo numero 2">
									</div>
								</div>
                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="estadio" id="estadio" class="form-control input-sm" placeholder="Estadio ..">
									</div>
								</div>
                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="grupo" id="grupo" class="form-control input-sm" placeholder="grupo ..">
									</div>
								</div>
							</div>
 
								<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="date" name="fecha" id="fecha" class="form-control input-sm" >
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="time" name="hora" id="hora" class="form-control input-sm" placeholder="hora de encuentro">
									</div>
								</div>
							</div>
							
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('encuentro.index') }}" class="btn btn-info btn-block" >ATRAS</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection