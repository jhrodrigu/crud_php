<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creacion de un CRUD</title>
</head>

<body>
  <h1>Creacion de un CRUD en PHP</h1>

  <form action="guardar.php" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="">
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido">
    <br>
    <label for="telefono">telefono</label>
    <input type="number" name="telefono">
    <br>
    <input type="submit" name="guardar" value="Guardar">
  </form>

</body>

</html>