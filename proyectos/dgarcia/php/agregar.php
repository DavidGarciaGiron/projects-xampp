<?php

if(!empty($_POST)){
    if( isset($_POST["id"]) &&
        isset($_POST["nombre_deporte"]) &&
        isset($_POST["descripcion"]) &&
        isset($_POST["historia"])){

        if($_POST["id"]!=""&& $_POST["nombre_deporte"]!=""&&$_POST["descripcion"]!=""&&$_POST["historia"]!=""){
            include "conexion.php";

            $sql = "insert into deportes(id,nombre_deporte,descripcion,historia) value (\"$_POST[id]\",\"$_POST[nombre_deporte]\",\"$_POST[descripcion]\",\"$_POST[historia]\")";
            $query = $con->query($sql);
            if($query!=null){
                print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
            }else{
                print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

            }
        }
    }
}



?>