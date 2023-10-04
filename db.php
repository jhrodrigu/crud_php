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


/*
nombre de la tabla = chud_php
nombre de las columnas= nombre, apellido, telefono
*/ 

?>