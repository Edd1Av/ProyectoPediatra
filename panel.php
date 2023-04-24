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

<div class="cont">
  <h2>Administradores</h2>
  <hr>
</div>

<div class="cont">
  <table class="tablaPanel">
    <tr>
      <td class="bg-m">Usuario</td>
      <td class="bg-m">Contraseña</td>
      <td class="bg-m"></td>
    </tr>
  <?php
    include "conexion.php";
    $todos_admins = "SELECT * FROM administradores ORDER BY id ASC";
    $resultado = mysqli_query($conectar, $todos_admins);
    while($registro = mysqli_fetch_assoc($resultado)){
  ?>
    <tr>
          <td class=""><?php echo $registro["usuario"]; ?></td>
          <td><?php echo $registro["contrasena"]; ?></td>
 
          <td><a href="#" onClick="validar('eliminarAdmin.php?id=<?php echo $registro["id"]; ?>')" ><img src="imagenes/cerrar.png" class="imgCerrar"></a> </td>
    </tr>
        <?php 
          }
          mysqli_free_result($resultado);
        ?>
   </table>
</div>
<div class="cont">
  <a class="btn" href="agregarAdministrador.php">Agregar Administrador</a>
  
</div>

<div class="cont">
  <br>
  <br>
  <h2>Subscripciones</h2>
  <hr>
</div>


<div class="cont">
  <table class="tablaPanel">
    <tr>
      <td class="bg-m">Nombre</td>
      <td class="bg-m">E-mail</td>
      <td class="bg-m"></td>
    </tr>
  <?php
    include "conexion.php";
    $todos_subs = "SELECT * FROM subscripciones ORDER BY id ASC";
    $resultado = mysqli_query($conectar, $todos_subs);
    while($registro = mysqli_fetch_assoc($resultado)){
  ?>
    <tr>
          <td class=""><?php echo $registro["nombre"]; ?></td>
          <td><?php echo $registro["email"]; ?></td>
          <td><a href="#" onClick="validar('eliminarSub.php?id=<?php echo $registro["id"]; ?>')" ><img src="imagenes/cerrar.png" class="imgCerrar"></a> </td>
    </tr>
        <?php 
          }
          mysqli_free_result($resultado);
        ?>
   </table>
</div>
<script>
      function validar(url)
      {
        var eliminar = confirm("Realmente deseas eliminar este registro");
        if(eliminar == true){
          window.location=url;
        }
      }
</script>

<div class="cont">
  <h2>Consultas y promociones</h2>
  <hr>
</div>

<div class="cont">
  <table class="tablaPanel">
  <tr>
    <td class="bg-m">Titulo</td>
    <td class="bg-m">Subtitulo</td>
    <td class="bg-m">Texto</td>
    <td class="bg-m">Imagen</td>
    <td class="bg-m"></td>
  </tr>
  <?php
    include "conexion.php";
    $todas_prom = "SELECT * FROM promociones ORDER BY id ASC";
    $resultado = mysqli_query($conectar, $todas_prom);
    while($registro = mysqli_fetch_assoc($resultado)){
  ?>

  <tr>
    <td><?php echo $registro["titulo"]; ?></td>
    <td><?php echo $registro["texto1"]; ?></td>
    <td><?php echo $registro["texto2"]; ?></td>
    <td><img src="<?php echo $registro['imagen']; ?>" class="imgCerrar"></td>
    <td><a href="#" onClick="validar('eliminarProm.php?id=<?php echo $registro["id"]; ?>')" ><img src="imagenes/cerrar.png" class="imgCerrar"></a> </td>
  </tr>
  <?php 
          }
          mysqli_free_result($resultado);
        ?>
  </table>

</div>

<div class="cont">
  <a class="btn" href="agregarPromocion.php">Agregar Promoción</a>
</div>

</body>
</html>