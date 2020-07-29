<?php 
	include 'UserControlador.php';
	include '../helps/helps.php';

	session_start();

	header('Content-type: application/json');
	$resultado = array();

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["txtEmail"]) && isset($_POST["txtPassword"])) {

			$txtEmail = validar_campo($_POST["txtEmail"]);
			$txtPassword = validar_campo($_POST["txtPassword"]);

			$resultado = array("estado" => "true");

			if (UserControlador::login($txtEmail, $txtPassword)) {
				$user = UserControlador::getUser($txtEmail, $txtPassword);
				$_SESSION["user"]= array(
					"id_user"  => $user->getId_user(),
					"fullname" => $user->getFullname(),
					"username" => $user->getUsername(),
					"email"    => $user->getEmail(),
					"password" => $user->getPassword(),
					"id_rol"   => $user->getId_rol(),
				);

			    if (isset($_SESSION["user"])) {
			       if ($_SESSION["user"]["id_rol"] == 1) {
			          header("location: ../../view/page/admin.php");
			       }
			       elseif ($_SESSION["user"]["id_rol"] == 2) {
			       	  header("location: ../../view/page/docente.php");
			       }
			       elseif ($_SESSION["user"]["id_rol"] == 3) {
			       	  header("location: ../../view/page/student.php");
			       }
			       else {
			       	  header("location: ../../view/page/verificarLogin.php");
			       }
			    } else {
			       	header("location: ../../view/page/verificarLogin.php");
			    }
    
				return print(json_encode($resultado));
			}

		}	
	}
	$resultado = array("estado" => "false");
	return header("location: ../../view/page/verificarLogin.php");

?>