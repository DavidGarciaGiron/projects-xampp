<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }
} else {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../link.php'); ?>
    <title>Juegos Panamericanos - Pagina Principal</title>
</head>



<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="admin.php" style="font-size: 18px; margin-top: 20px;">Usuario</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white" style="height: 90%;">
    <div class="masthead-content">
        <div class="container">
            <h1 style="font-size: 100px;"">Bienvenido</h1>
            <H2 style="font-size: 45px;"><?php echo $_SESSION["usuario"]["nombre"]; ?></H2><br>
            <h3 style="font-size: 30px;">Tipo de Usuario: <?php echo $_SESSION["usuario"]["privilegio"] == 1 ? 'Admin' : 'Visitante'; ?></h3>
            <br><br>



            <img src="images/icon.png" alt="IMG" class="img1"> <br><br>


            <a href="../ver2.php" class="btn btn-primary btn-xl rounded-pill mt-5" style="font-size: 20px;">Comenzar</a>
        </div>
    </div>
</header>
<!-- Footer -->
<footer class="py-5 bg-black" style="height: 10%;>
        <div class="container">
<p class="m-0 text-center text-white small" style="font-size: 18px;">Desarrollado por: David Garcia Giron</p>
</div>
<!-- /.container -->
</footer>


<?php include 'partials/footer.php';?>
</body>
</html>