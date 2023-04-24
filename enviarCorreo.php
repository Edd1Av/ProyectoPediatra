<?php

include "phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();       
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'tls';  
$mail->Username = 'plenumsoftsap2@gmail.com';   
$mail->Password = 'wfpbyyyqolfuwnec';  

$mail->setFrom('plenumsoftsap2@gmail.com', 'CONTACTO');
$mail->addAddress('le18081054@itmerida.edu.mx', 'CORRESPONDA');     // Add a recipient
//$mail->addReplyTo('plenumsoftsap2@gmail.com', 'CONTACTO');

$mail->isHTML(true);   

$mail->Subject = 'Enviado por '.$_POST['nombre'];
$mail->Body    = '<b>Nombre: </b>'.$_POST['nombre'].'<br><b>Email: </b>'.$_POST['email'].'<br><b>Telefono: </b>'.$_POST['tel'].'<br><b>Comentarios: </b>'.$_POST['comentario'];


if(!$mail->send()) {
    echo 'Algo salio mal intentalo de nuevo';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    echo '
    <script>
      alert("Gracias por contactarnos, nosotros nos comunicamos contigo a la brevedad.");
      location.href="index.php";
    </script>
  ';
    
}

?>