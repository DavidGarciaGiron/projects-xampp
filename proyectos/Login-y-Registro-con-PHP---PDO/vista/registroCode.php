<?php

include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtName"]) && isset($_POST["txtLastname"]) && isset($_POST["txtEmail"]) && isset($_POST["txtPassword"]) && isset($_POST["txtId_rol"])) {

        $txtName       = validar_campo($_POST["txtName"]);
        $txtLastname   = validar_campo($_POST["txtLastname"]);
        $txtEmail      = validar_campo($_POST["txtEmail"]);
        $txtPassword   = validar_campo($_POST["txtPassword"]);
        $txtId_rol     = validar_campo($_POST["txtId_rol"]);

        if (UsuarioControlador::registrar($txtName, $txtLastname, $txtEmail, $txtPassword, $txtId_rol)) {
            $usuario             = UsuarioControlador::getUsuario($txtEmail, $txtPassword);
            $_SESSION["usuario"] = array(
                "id_users"         => $usuario->getId_users(),
                "name"     => $usuario->getName(),
                "lastname"    => $usuario->getLastname(),
                "email"      => $usuario->getEmail(),
                "password" => $usuario->getPassword(),
                "id_rol" => $usuario->getId_rol(),
            );

            header("location:admin.php");
        }

    }
} else {
    header("location:registro.php?error=1");
}
