
<html>
	<head>
		<title>Tabla de Deportes</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Tabla de Deportes</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default">Insertar Nuevo Deporte</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Insertar Nuevo Deporte</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
    <div class="form-group">
        <label for="nombre_deporte">Id</label>
        <input type="text" class="form-control" name="id" required>
    </div>
  <div class="form-group">
    <label for="nombre_deporte">Deporte</label>
    <input type="text" class="form-control" name="nombre_deporte" required>
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" required>
  </div>
  <div class="form-group">
    <label for="historia">Historia</label>
    <input type="text" class="form-control" name="historia" required>
  </div>
  <button type="submit" class="btn btn-default">Insertar Nuevo Deporte</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>