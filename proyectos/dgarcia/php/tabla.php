<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from deportes";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>ID</th>
    <th>DEPORTE</th>
    <th>DESCRIPCION</th>
    <th>HISTORIA</th>
    <th>EDITAR</th>
    <th>ELIMINAR</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
    <td><?php echo $r["id"]; ?></td>
    <td><?php echo $r["nombre_deporte"]; ?></td>
    <td><?php echo $r["descripcion"]; ?></td>
    <td><?php echo $r["historia"]; ?></td>
	<td style="width:150px;">
        <a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a></td>
    <td><a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a></td>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
