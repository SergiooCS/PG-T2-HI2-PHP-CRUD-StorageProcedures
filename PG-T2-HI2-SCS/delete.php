<?php
require_once('connection.php');
$nombre=$_POST['name'];
    


$delete=$gbd->query("call eliminarUsuarios('$nombre')");
    //$delete->bindValue('nombre',$nombre);
    //$delete->execute();
header('location:index.php');
