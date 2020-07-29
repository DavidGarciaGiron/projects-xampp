<?php

if(!empty($_POST)){
    if( isset($_POST["id"]) &&
        isset($_POST["nombre_deporte"]) &&
        isset($_POST["descripcion"]) &&
        isset($_POST["historia"])){

        if($_POST["id"]!=""&& $_POST["nombre_deporte"]!=""&&$_POST["descripcion"]!=""&&$_POST["historia"]!=""){

            include "conexion.php";

            $sql = "update deportes set nombre_deporte=\"$_POST[nombre_deporte]\",descripcion=\"$_POST[descripcion]\",historia=\"$_POST[historia]\" where id=".$_POST["id"];

            $query = $con->query($sql);

            if($query!=null){
                print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";

            }else{
                print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

            }
        }
    }
}

?>