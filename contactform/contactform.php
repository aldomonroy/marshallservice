<?php 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$telefono = $_POST['subject'];
$empresa = $_POST['mensaje'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$mensaje = "este mensaje fue enviado por: ".$name."\r\n";
$mensaje .= "Su e-mail es: ".$mail."\r\n";
$mensaje .= "Telefono: ".$subject."\r\n";
$mensaje .= "mensaje: ".$_POST['mensaje']."\r\n";
$mensaje .= "enviado el: ".date('d/m/Y',time());


$para = 'serviciomarshall@gmail.com';
$asunto = 'mensaje de mi web';

if(mail($para,$asunto,utf8_decode($mensaje),$header))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='https://linktr.ee/marshallservice';</script>"; ?>