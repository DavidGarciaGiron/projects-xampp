<?php

include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

session_start();

header('Content-type: application/json');
$resultado = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtEmail"]) && isset($_POST["txtPassword"])) {

        $txtEmail  = validar_campo($_POST["txtEmail"]);
        $txtPassword = validar_campo($_POST["txtPassword"]);

        $resultado = array("estado" => "true");

        if (UsuarioControlador::login($txtEmail, $txtPassword)) {
            $usuario = UsuarioControlador::getUsuario($email, $txtPassword);
            $_SESSION["usuario"] = array(
                "id_rol"         => $usuario->getId_rol(),
                "name"     => $usuario->getName(),
                "lastname"    => $usuario->getLastname(),
                "email"      => $usuario->getEmail(),
                "id_rol" => $usuario->getId_rol(),
            );
            return print(json_encode($resultado));
        }

    }
}

$resultado = array("estado" => "false");
return print(json_encode($resultado));
