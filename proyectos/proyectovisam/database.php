<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'visamdb';

    try{
        $conn = new PDO("mysql:host=$server; dbname=$database;", $username, $password);
    } catch (PDOException $e) {
        die('Connected Failed: '.$e->getMessage());
    }
?>

