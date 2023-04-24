<?php
require "conexion.php";
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$comparar = "SELECT * FROM administradores WHERE usuario='$usuario' AND contrasena='$contrasena'";

$resultado = mysqli_query($conectar,$comparar);

if(mysqli_num_rows($resultado) > 0 ){
	session_start();
	$_SESSION['username'] = $usuario;
	$_SESSION['autentificado'] = "SI";



	header("Location: panel.php");
}

else{

	echo '
		<script>
			alert("Datos de inicio incorrectos");
			location.href="admin.php?errorusuario=SI";
		</script>
	
	';
}

mysqli_free_result($resultado);
mysqli_close($conectar);
?>