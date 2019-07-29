
<?php 

$message = "<h2>Contacto Web Automotriz Larrain</h2>";


$Nombre =  $_POST['fname'];
$Email =  $_POST['email'];
$Mensaje =  $_POST['message'];
$Tipo    = $_POST['tipo'];
$Asunto = $_POST['subject'];

$subject = "Contacto Web Automotriz Larrain";
$message  .= "<br> Nombre : " . $Nombre . "<br>Email : "  . $Email  . "<br> Tipo de Mensaje : "  .$Tipo."<br>Mensaje : "  . $Mensaje; 

$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: Portal Automotriz Larrain <contacto@automotrizlarrain.cl>' . "\r\n";
$Header .= "Cc: teresita.madriaza@hackmonkeys.cl; \r\n"; 

if(mail('teresita.madriaza@hackmonkeys.cl', $subject, $message, $Header))

header('Location: gracias.html');

?>