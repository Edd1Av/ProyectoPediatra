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
    <form action="guardarPromocion.php" method="post" enctype="multipart/form-data">
      <br>
      <h2>Agregar Promocion</h2>
      <br>
      <img src="imagenes/logo.png">
      <br><br><br>
      <input type="text" placeholder="Titulo" name="titulo" maxlength="50" required>
      <br>
      <br>
      <input type="text" placeholder="Subtitulo" name="texto1" maxlength="100">
      <br>
      <br>
      <input type="text" placeholder="Texto" name="texto2" maxlength="100">
      <br>
      <br>
      <input type="file" name="imagen" accept=".png">
      <br>
      <br>
      <br>
      <input type="submit" value="Guardar">
    </form>
  </div>

</body>
</html>