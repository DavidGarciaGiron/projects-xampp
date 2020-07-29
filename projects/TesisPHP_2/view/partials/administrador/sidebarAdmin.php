<!DOCTYPE html> 
<html lang="en" dir="ltr"> 
<head>
	<meta charset="utf-8">
	<title>Sidebar Dashboard Template</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/sidebar.css">
	<link href="../assets/fontawesome-free-5.13.1-web/css/all.css" rel="stylesheet">
</head>
<body>
	
	<!-- sidebar area start -->
	<div class="sidebarBackground">
		<div class="sidebar">
			<center>
				<h3> Imperium <span id="span1">Discipulus</span> </h3>
				<img src="../assets/img/avatar.jpg" id="avatar1">
				<h5 id="rol_id">
					<?php echo $_SESSION["user"]["id_rol"] == 1 ? 'Administrador' : 'No Identificado'; ?>
				</h5>
				<h4 id="username"><?php echo $_SESSION["user"]["username"]; ?></h4>
			</center>

			<a href="#"><i class="fas fa-desktop"></i><span>Tablero</span></a>
			<a href="#"><i class="fas fa-briefcase"></i><span>Administrador</span></a>
			<a href="#"><i class="fas fa-users"></i><span>Usuarios</span></a>
			<a href="#"><i class="fas fa-cogs"></i><span>Configuracion</span></a>

		</div>
	</div>	
	<!-- sidebar area end -->

</body>
</html>