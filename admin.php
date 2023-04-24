<?php
    session_start();
    if (isset($_SESSION["autentificado"]) == "SI") 
    {
        header("Location: panel.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <title>Panel</title>
</head>
<body>
  <div class="cont ctr">
    <br>
  </div>
<div class="cont cntr formulario-contacto">
    <form action="login.php" method="post">
      <br>
      <h2>Iniciar Sesión</h2>
      <br>
      <img src="imagenes/logo.png">
      <br>
      <br>
      <br>
      <input type="text" placeholder="Usuario:" name="usuario" maxlength="30" required>
      <br>
      <br>
      <input type="password" placeholder="Contraseña:" name="contrasena" maxlength="30" required>
      <br>
      <br>
      <br>
      <input type="submit" value="Log In">
      
      <?php
	      $errorusuario = isset($_GET["errorusuario"]);	
	      if($errorusuario == "SI"){
 		    echo '<br><h3>Datos incorrectos</h3>';
	      }
        ?>

        <?php
	      $sesioncerrada = isset($_GET["sesioncerrada"]);	
	      if($sesioncerrada == "SI"){
 		    echo '<br><h3>Sesión cerrada correctamente</h3>';
	      }
        ?>
    </form>
  </div>

</body>
</html>