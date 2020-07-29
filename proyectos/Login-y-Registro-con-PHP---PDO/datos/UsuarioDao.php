<?php

include 'Conexion.php';
include '../entidades/Usuario.php';

class UsuarioDao extends Conexion
{
    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    /**
     * Metodo que sirve para validar el login
     *
     * @param      object         $usuario
     * @return     boolean
     */

    public static function login($usuario)
    {
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":email", $usuario->getUsuario());
        $resultado->bindValue(":password", $usuario->getPassword());

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if ($filas["email"] == $usuario->getUsuario()
                && $filas["password"] == $usuario->getPassword()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Metodo que sirve obtener un usuario
     *
     * @param      object         $usuario
     * @return     object
     */

    public static function getUsuario($usuario)
    {
        $query = "SELECT id_users,name,lastname,email,password,id_rol FROM users WHERE email = :email AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":email", $usuario->getUsuario());
        $resultado->bindValue(":password", $usuario->getPassword());

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new Usuario();
        $usuario->setId_users($filas["id_users"]);
        $usuario->setName($filas["name"]);
        $usuario->setLastname($filas["lastname"]);
        $usuario->setEmail($filas["email"]);
        $usuario->setPassword($filas["password"]);
        $usuario->setId_rol($filas["id_rol"]);

        return $usuario;
    }

    /**
     * Metodo que sirve para registrar usuarios
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function registrar($usuario)
    {
        $query = "INSERT INTO users (name,lastname,email,password,id_rol) VALUES (:name,:lastname,:email,:password,:id_rol)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":name", $usuario->getName());
        $resultado->bindValue(":lastname", $usuario->getLastname());
        $resultado->bindValue(":email", $usuario->getEmail());
        $resultado->bindValue(":password", $usuario->getPassword());
        $resultado->bindValue(":id_rol", $usuario->getId_rol());

        if ($resultado->execute()) {
            return true;
        }

        return false;
    }
}
