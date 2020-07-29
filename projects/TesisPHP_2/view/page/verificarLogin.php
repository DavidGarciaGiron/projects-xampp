<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="../assets/img/logov3.png">
	<title>Validar Login - Imperium Discipulus</title>
</head>
<body>


<?php
	if (!isset($_SESSION["user"])) {
?>

	<script type="text/javascript">
		alert("Dirección de E-mail o Contraseña son Incorrectos.");
		window.location.href="login.php";
	</script>

<?php
	} else {
		if ($_SESSION["user"]["id_rol"] == 1) {
			header("location: admin.php");
		}
		elseif ($_SESSION["user"]["id_rol"] == 2) {
			header("location: docente.php");
		}
		elseif ($_SESSION["user"]["id_rol"] == 3) {
			header("location: student.php");
		}
	}
?>

	
</body>
</html>


