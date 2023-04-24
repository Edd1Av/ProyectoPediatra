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

<script type="text/javascript">
  function valida_envia(){
    if(document.formC.nombre.value.length==0){
      alert("Ingresa tu Nombre")
      document.formC.nombre.focus()
      return 0;
    }

    if(document.formC.email.value.length==0){
      alert("Ingresa tu E-mail")
      document.formC.correo.focus()
      return 0;
    }

    document.formC.submit();

  }
</script>

<div class="contenedor ctr tituloSeccion">
  <h1>Reserva una cita con el Dr. Oscar García Galván</h1>
</div>

<div class="cont ctr contactoC">
  <div class="inline middle fondo">
  </div>

  <div class="inline middle formulario-contacto">
    <form action="enviarCorreo.php" method="post" name="formC">
      <h2>Contáctanos</h2>
      <br>
      <input type="text" placeholder="* Tu Nombre:" name="nombre" maxlength="30">
      <br>
      <br>
      <input type="email" placeholder="* Tu E-mail:" name="email" maxlength="30">
      <br>
      <br>
      <input type="tel" placeholder="Tu número teléfonico:" name="tel" maxlength="15">
      <br>
      <br>
      <textarea name="comentario" placeholder="comentario" name="comentario"></textarea>
      <br>
      <br>
      <input type="button" value="Enviar" onclick="valida_envia()">
    </form>
  </div>

  <div class="inline middle datosContacto">
    <h3>Dirección</h3>
    <p>AV. MIGUEL ANGEL DE QUEVEDO, 320, VILLA COYOACAN, COYOACAN, DF, C.P. 04000</p>
    <br>
    <h3>Teléfono</h3>
    <p>55-5554-0902</p>
    <p>55-8562-4624</p>
    <p>55-5658-4796</p>
    <br>
    <h3>Email</h3>
    <p>amazona196@hotmail.com</p>
  </div>
</div>

<div class="cont ctr">
<div class="inline top">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.9077443680862!2d-89.62979578575593!3d20.956219695628203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5673d681df8aa9%3A0x9404e9ff12ff959d!2sPediatra%20Dr.%20Henry%20Rodr%C3%ADguez!5e0!3m2!1ses!2smx!4v1639462928250!5m2!1ses!2smx" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="horario inline top">
  <h3>Horarios de atención:</h3>
  <hr>
  <br>
  <table>
    <tr>
      <td>Día</td>
      <td>Hora</td>
    </tr>

    <tr>
      <td>Lunes - Viernes</td>
      <td>08:00 - 13:00 y 14:00 - 19:00</td>
    </tr>

    <tr>
      <td>Sabados</td>
      <td>08:00 - 13:00 y 14:00 - 17:00</td>
    </tr>

    <tr>
      <td>Domingos</td>
      <td>Cerrado</td>
    </tr>
  </table>
</div>

</div>





<?php
include "footer.php";
?>

  
</body>
</html>