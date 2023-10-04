<?php 

include("db.php");

if(isset($_POST['guardar'])){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];


  $query = "INSERT INTO personal(nombre, apellido, telefono) VALUES('$nombre', '$apellido', '$telefono')";
  $result = mysqli_query($conn, $query);

  if(!$result){
    die('falla de conexion');
  };

  $_SESSION['message'] = 'Se aguardado satisfactoriamente';

   header("Location: index.php");


}

?>