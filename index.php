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

  <?php if (isset($_SESSION['message'])) { ?>
    <?= $_SESSION['message'] ?>
  <?php session_unset();
  } ?>

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
  <br>

  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM personal";
      $result_tabla = mysqli_query($conn, $query);

       while($row =mysqli_fetch_array($result_tabla)) {?>
<tr>
  <td><?php echo $row['nombre'] ?></td>
  <td><?php echo $row['apellido'] ?></td>
  <td><?php echo $row['telefono'] ?></td>
  <td>
    <a href="editar.php?id=<?php echo $row['id']?>"> Editar</a>
  </td>
  <td>
  <a href="eliminar.php?id=<?php echo $row['id']?>"> Eliminar</a>
  </td>
</tr>

<?php }?>

      
    </tbody>
  </table>

</body>

</html>