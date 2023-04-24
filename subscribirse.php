<?php

include "conexion.php";
$nombre=$_POST["nombre"];
$email=$_POST["email"];

$insertar = "INSERT INTO subscripciones (nombre, email) VALUES ('$nombre', '$email')";

//validar usuario
$verficar_usuario = mysqli_query($conectar , "SELECT * FROM subscripciones WHERE email = '$email' ");
 if( mysqli_num_rows($verficar_usuario) > 0 ){
  echo '
  <script>
    alert("Este E-mail ya esta registrado");
    location.href="index.php";
  </script>

';
exit;
 }


  $query = mysqli_query($conectar, $insertar);

  if($query){


    include "phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();       
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'tls';  
$mail->Username = 'plenumsoftsap2@gmail.com';   
$mail->Password = 'wfpbyyyqolfuwnec';  

$mail->setFrom('plenumsoftsap2@gmail.com', 'Bienvenido');
$mail->addAddress($email, 'CORRESPONDA');     // Add a recipient
//$mail->addReplyTo('plenumsoftsap2@gmail.com', 'Bienvenido');

$mail->isHTML(true);   

$mail->Subject = 'Pediatria ';
$mail->Body    = '<b>Gracias por subscribirte </b>'.$_POST['nombre'];


if(!$mail->send()) {
    echo 'Algo salio mal intentalo de nuevo';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    
  echo '
  <script>
    alert("Se subscribio correctamente, muchas gracias");
    location.href="index.php";
  </script>

';
    
}  


/*
    echo '
      <script>
        alert("Se subscribio correctamente, muchas gracias");
        location.href="index.php";
      </script>
    
    ';  */


  }
  else{
    echo '
      <script>
        alert("Intentelo de nuevo");
        location.href="index.php";
      </script>
    
    ';
  }

?>