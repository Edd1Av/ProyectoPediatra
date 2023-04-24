<?php
require "conexion.php";
$id = $_GET['id'];


$eliminar = "DELETE FROM administradores WHERE id='$id'";
$resultado = mysqli_query($conectar,$eliminar);

if($resultado){
  header("location:panel.php");
}
else{
  echo "No se pudo eliminar al usuario";
}


?>