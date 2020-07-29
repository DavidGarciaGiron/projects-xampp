<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from deportes where id = ".$_GET["id"];
$query = $con->query($sql1);
$phppanamericanos= null;
if($query->num_rows>0){
    while ($r=$query->fetch_object()){
        $phppanamericanos=$r;
        break;
    }

}
?>

<?php if($phppanamericanos!=null):?>

    <form role="form" method="post" action="php/actualizar.php">
        <div class="form-group">
            <label for="nombre_deporte">Deporte</label>
            <input type="text" class="form-control" value="<?php echo $phppanamericanos->nombre_deporte; ?>" name="nombre_deporte" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" class="form-control" value="<?php echo $phppanamericanos->descripcion; ?>" name="descripcion" required>
        </div>
        <div class="form-group">
            <label for="historia">Historia</label>
            <input type="text" class="form-control" value="<?php echo $phppanamericanos->historia; ?>" name="historia" required>
        </div>
        <input type="hidden" name="id" value="<?php echo $phppanamericanos->id; ?>">
        <button type="submit" class="btn btn-default">Actualizar</button>
    </form>
<?php else:?>
    <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>