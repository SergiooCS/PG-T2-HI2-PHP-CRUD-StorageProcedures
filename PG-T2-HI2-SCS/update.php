<?php
require_once('connection.php');
$nombre=$_POST['nombre'];
$email=$_POST['email'];


$delete=$gbd->query("call updateUsuarios('$nombre','$email')");
//$delete->bindValue(':nombre',$nombre);
//$delete->bindValue(':email',$email);
//$resultado=$delete->execute();
header("location: index.php");