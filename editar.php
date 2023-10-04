<?php

include("db.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM personal WHERE id = $id";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $telefono = $row['telefono'];
  };
}

if (isset($_POST['actualizar'])) {
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];

  $query = "UPDATE personal SET nombre = '$nombre', apellido = '$apellido', telefono = $telefono WHERE id = $id";
  mysqli_query($conn, $query);

  $_SESSION['message'] = 'Se actualizo bien';
  header("Location: index.php");
};

?>

<form action="editar.php?id=<?php echo $_GET['id'] ?>" method="post">

  <input type="text" name="nombre" value="<?php echo $nombre ?>">
  <input type="text" name="apellido" value="<?php echo $apellido ?>">
  <input type="text" name="telefono" value="<?php echo $telefono ?>">

  <input type="submit" name="actualizar" value="Actualizar">

</form>