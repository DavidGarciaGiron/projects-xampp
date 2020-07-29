<?php include '../partials/head.php';?>

<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="registroCode.php" method="POST" role="form">
							<legend>Registro de Usuarios</legend>
							<div class="form-group">
								<label for="fullname">Nombre</label>
								<input type="text" name="txtFullname" class="form-control" id="fullname" autofocus required placeholder="Ingresa tu Nombre">
							</div>

							<div class="form-group">
								<label for="username">Usuario</label>
								<input type="text" name="txtUsername" class="form-control" id="username" autofocus required placeholder="Ingresa tu Usuario">
							</div>

							<div class="form-group">
								<label for="email">E-mail</label>
								<input type="email" name="txtEmail" class="form-control" id="email"  required placeholder="Ingresa tu dirección de e-mail">
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="txtPassword" class="form-control" required id="password" placeholder="****">
							</div>

							<div class="form-group">
								<label for="id_rol">Tipo de Usuario</label>
								<input type="text" name="txtId_rol" class="form-control" id="id_rol" autofocus required placeholder="Tipo de Usuario">
							</div>

							<button type="submit" class="btn btn-success">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.container -->

<?php include 'partials/footer.php';?>