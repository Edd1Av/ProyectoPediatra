<?php
include "seguridad.php";
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
<?php
include "cabeceraPanel.php";
?>

<div class="cont cntr formulario-contacto">
    <form action="registrarAdmin.php" method="post">
      <br>
      <h2>Agregar Administrador</h2>
      <br>
      <img src="imagenes/logo.png">
      <br><br><br><br>
      <input type="text" placeholder="Usuario:" name="usuario" maxlength="30" required>
      <br>
      <br>
      <input type="password" placeholder="Contraseña:" name="contrasena" maxlength="30" required>
      <br>
      <br>
      <br>
      <br>
      <input type="submit" value="Registrar">
    </form>
  </div>

</body>
</html>