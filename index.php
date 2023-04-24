<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <title>Proyecto</title>
</head>
<body>

<?php
include "cabecera.php";
?>

  <!--
  <div class="tel inline middle">
    <div class="tel2">
      <div class="tel3">
      <p>311-690-3376</p>
      </div>
    </div>
  </div>
  -->
</div>

<div class="contenedor bannerInicio">
  <div class="inline titulo top">
    <h1>Permita que un  </h1>
    <span class="medico">médico</span> 
    <span class="pediatra">pediatra</span>
    <h1 class="titulo2">supervise la salud de su hijo</h1>
  </div>
  <div class="inline banner-img top">
    <img src="imagenes/banner.jpg">
  </div>
</div>





<div class="cont font0 ctr">

<?php
    include "conexion.php";
    $todas_prom = "SELECT * FROM promociones ORDER BY id ASC";
    $resultado = mysqli_query($conectar, $todas_prom);
    while($registro = mysqli_fetch_assoc($resultado)){
  ?>

  <div class="promociones flx top">
    <div class="ctr promociones2">
      <img src="<?php echo $registro['imagen']; ?>">
      <br>
      <br>
    <h3><?php echo $registro['titulo']; ?></h3>
    <br>
    <P><?php echo $registro['texto1']; ?></P>
    
    <p><?php echo $registro['texto2']; ?></p>
    </div>
  </div>

<!--  <div class="promociones flx top">
    <div class="ctr promociones2">
      <img src="imagenes/001-enfermera.png">
      <br>
      <br>
    <h3>CONSULTA MEDICA</h3>
    <br>
    <P>Primera vez subsecuente</P>
    <br>
    <p>$600</p>
    </div>
  </div> -->

  <?php 
  }
  //mysqli_free_result($registro);
  ?>
  
</div>


<div class="contenedor">
<div class="bg-imageServicios">
  <div class="infoServicios">
    <h2>El médico pediatra Oscar García Altamirano ofrece:</h2>
    <hr>
    <br>
    <div class="inline top">
      <ul>
        <li><span>Consulta médica</span> </li>
        <li><span>Nutrición pediátrica</span> </li>
        <li><span>Vigilancia del crecimiento y desarrollo del niño</span> </li>
        <li><span>Atención al recién nacido</span> </li>
        <li><span>Orientación sobre la lactancia materna</span> </li>
        <li><span>Puericultura (adiestramiento a la madre sobre la atención del niño)</span> </li>
        <li><span>Control del niño sano</span> </li>
        <li><span>Tratamientos para enfermedades respiratorias y gastrointestinales</span> </li>
        <li><span>Urgencias las 24 horas</span> </li>
      </ul>
    </div>
    
  </div>
</div>
</div>

<div class="cont acercade">
  <div class="inline middle">
    <img src="imagenes/pediatra.jpg" class="imgPediatra">
  </div>
  <div class="inline middle infoPediatra">
    <h2>Dr. Oscar García Galván: Pediatra</h2>
    <hr>
    <br>
    <p>Es maestro de la especialidad de pediatría en el Hospital Universitario de Saltillo. También está encargado del área de urgencias y de la terapia intensiva infantil. Tiene su práctica privada en uno de los hospitales más reconocidos a nivel nacional: Hospital Christus Muguerza Saltillo. Actualmente es director de la Clínica Hospital del Magisterio de Saltillo.</p>
    <br>
    <br>
    <a href="contacto.php" class="btn">Contactanos para agendar una cita</a>
  </div>
  <div>
    
  </div>
</div>

<?php
include "footer.php";
?>

</body>
</html>