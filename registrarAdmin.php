<?php

include "conexion.php";
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];

$insertar = "INSERT INTO administradores (usuario, contrasena) VALUES ('$usuario', '$contrasena')";

//validar usuario
$verficar_usuario = mysqli_query($conectar , "SELECT * FROM administradores WHERE usuario = '$usuario' ");
 if( mysqli_num_rows($verficar_usuario) > 0 ){
  echo '
  <script>
    alert("Este usuario ya esta registrado");
    location.href="agregarAdministrador.php";
  </script>

';
exit;
 }


  $query = mysqli_query($conectar, $insertar);

  if($query){
    echo '
      <script>
        alert("Se ha registrado correctamente");
        location.href="panel.php";
      </script>
    
    ';
  }
  else{
    echo '
      <script>
        alert("Intentelo de nuevo");
        location.href="agregarAdministrador.php";
      </script>
    
    ';
  }

?>