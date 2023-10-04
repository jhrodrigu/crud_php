<?php 

include("db.php");

if(isset($_GET['id'])){
  $id = $_GET["id"];
  $query = "DELETE FROM personal where id = $id ";

  $result = mysqli_query($conn, $query);
  if(!$result){
    die("Fallo la eliminacion");
  };


  $_SESSION['message'] = 'Se elimino satisfactoriamente';
  header("Location: index.php");
}

?>