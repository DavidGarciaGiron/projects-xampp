<?php

include '../datos/UsuarioDao.php';

class UsuarioControlador
{

    public static function login($email, $password)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setEmail($email);
        $obj_usuario->setPassword($password);

        return UsuarioDao::login($obj_usuario);
    }

    public function getUsuario($email, $password)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setEmail($email);
        $obj_usuario->setPassword($password);

        return UsuarioDao::getUsuario($obj_usuario);
    }

    public function registrar($name, $lastname, $email, $password, $id_rol)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setName($name);
        $obj_usuario->setLastname($lastname);
        $obj_usuario->setEmail($email);
        $obj_usuario->setPassword($password);
        $obj_usuario->setId_rol($id_rol);

        return UsuarioDao::registrar($obj_usuario);
    }

}
