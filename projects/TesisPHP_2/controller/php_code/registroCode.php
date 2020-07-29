<?php

include '../php_code/UserControlador.php';
include '../helps/helps.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( isset($_POST["txtFullname"])  && isset($_POST["txtUsername"]) && isset($_POST["txtEmail"]) && 
         isset($_POST["txtPassword"])) && isset($_POST["txtId_rol"]) {

        $txtFullname     = validar_campo($_POST["txtFullname"]);
        $txtUsername      = validar_campo($_POST["txtUsername"]);
        $txtEmail    = validar_campo($_POST["txtEmail"]);
        $txtPassword   = validar_campo($_POST["txtPassword"]);
        $txtId_rol = validar_campo($_POST["txtId_rol"]);

        if (UserControlador::registrar($txtFullname, $txtUsername, $txtEmail, $txtPassword, $txtId_rol)) {
            $user = UserControlador::getUser($txtEmail, $txtPassword);
            $_SESSION["user"] = array(
                "id_user"   => $user->getId_user(),
                "fullname"  => $user->getFullname(),
                "username"  => $user->getUsername(),
                "email"     => $user->getEmail(),
                "password"  => $user->getPassword(),
                "id_rol"    => $user->getId_rol(),
            );

            header("location:admin.php");
        }

    }
} else {
    header("location:registro.php?error=1");
}

?>-