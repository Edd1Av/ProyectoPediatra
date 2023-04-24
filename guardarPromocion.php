<?php
include 'conexion.php';

$rutaTemporal = $_FILES['imagen']['tmp_name'];
$rutaEnServidor = 'iconos';
$nombreimagen = $_FILES['imagen']['name'];

$titulo = $_POST['titulo'];
$texto1 = $_POST['texto1'];
$texto2 = $_POST['texto2'];

$pesoFoto = $_FILES['imagen']['size'];
$tipoFoto = $_FILES['imagen']['type'];

date_default_timezone_set('UTC');
$nombreimagenUnico = date('Y-m-d-h-i-s')."-".$nombreimagen;

$rutaDestino=$rutaEnServidor."/".$nombreimagenUnico;
//$ruta = $rutaEnServidor."/".$nombreimagen;
if($pesoFoto > 9000000){
  echo '
  <script>
  alert("La imagen que quieres subir es demasiado pesada")
  window.history.go(-1);
  </script>
  ';
  exit;
}

move_uploaded_file($rutaTemporal, $rutaDestino);

//if($tipoFoto == "image/jpeg" || $tipoFoto == "image/png"){
  
//}
/*
else{
  echo '
  <script>
  alert("No es una imagen")
  window.history.go(-1);
  </script>
  ';
  exit;
} */


$consulta = "INSERT INTO promociones(titulo, texto1, texto2, imagen) VALUES ('$titulo', '$texto1', '$texto2', '$rutaDestino')";

$resultado = mysqli_query($conectar,$consulta);

if($resultado)
{
  echo '
  <script>
    alert("Se guardo correctamente");
    location.href = "panel.php";
  </script>
  ';
}
else{
  echo '
  <script>
    alert("No se guardo correctamente");
    window.history.go(-1);
  </script>
  ';
}


?>