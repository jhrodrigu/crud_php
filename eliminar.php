<?php 

include("db.php");

if(isset($_GET['id'])){
  $id = $_GET["id"];
  $query = "DELETE * FROM personal where id = $id ";
}



header("Location: index.php");

?>