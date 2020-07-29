<?php

class Conexion
{

    /**
     * Conexión a la base datos
     *
     * @return PDO
     */
    public static function conectar()
    {
        try {

            $cn = new PDO("mysql:host=us-cdbr-iron-east-03.cleardb.net;dbname=heroku_0a149001d862274", "bae20832880af9", "29128b35");

            return $cn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

}
