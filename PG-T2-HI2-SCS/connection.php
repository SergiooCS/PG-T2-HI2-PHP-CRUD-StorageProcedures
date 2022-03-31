<?php
$dsn = 'mysql:dbname=programacion;host=localhost';
$usuario = 'root';
$contraseña = '';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña); //constructor
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}