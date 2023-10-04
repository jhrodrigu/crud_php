<?php

session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'crud_php'
);


//VALIDAR DE QUE LA CONEXION FUNCIONA
// if(isset($conn)){
//   echo 'Conexion exitosa';
// }

?>