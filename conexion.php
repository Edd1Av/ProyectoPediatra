<?php
  $host = "localhost";
  $user = "root";
  $pass = "1234";
  $bd = "pediatra";

  $conectar = mysqli_connect($host,$user,$pass,$bd);
  
  if(!$conectar){
    echo "no se pudo conectar a la base de datos";
  }
?>