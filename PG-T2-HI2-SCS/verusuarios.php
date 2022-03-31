<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PG-T2-HI2-SCS</title>
  </head>
  <body>
    <h1>PG-T2-HI2-SCS</h1>
    <h2>Tabla de usuarios</h2>
    <!-- barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="insert.php">INSERTAR USUARIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="actualizar.php">ACTUALIZAR USUARIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="eliminar.php">ELIMINAR USUARIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="verusuarios.php">VER USUARIO</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<table class="table">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">EMAIL</th>
        <th scope="col">FOTO</th>
    </tr>


<?php
require_once('connection.php');
$show=$gbd->query("SELECT * FROM usuarios");

foreach ($show as $fila) {
    echo "<tr><td>" . $fila['id'] . "</td><td>".$fila['nombre']."</td><td>".$fila['email']."</td><td>"."<img src=".$fila['foto']." width='250px' height='200px'<img>"."</td></tr>";
}



?>

</table>











<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>