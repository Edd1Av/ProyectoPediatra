<?php

session_start();
if ($_SESSION["autentificado"] != "SI") 
{
	header("Location: admin.php");
	exit();
}

?>