<?php
require_once('connection.php');
// var_dump($conexion);
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$repetir_contraseña=$_POST['repetir_contraseña'];
$foto=$_POST['foto'];




$insertar=$gbd->query("call insertarUsuarios('$nombre','$email','$contraseña','$repetir_contraseña','$foto')");
//var_dump($insertar);
header("location: index.php");



