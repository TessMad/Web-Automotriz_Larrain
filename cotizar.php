<?php 
$message = "<h2>Cotizaciones Web Automotriz Larrain</h2>";

$Nombre =  $_POST['fname'];
$Rut = $_POST['rut'];
$Telefono = $_POST['telefono'];
$Email =  $_POST['email'];
$Asunto = $_POST['asunto'];
$Mensaje =  $_POST['message'];



$subject = "Cotización Web Automotriz Larrain";
$message  .= "Asunto : " . $Asunto . "<br> Nombre Completo : " . $Nombre . "<br>Rut : "  . $Rut . "<br>Telefono : "  . $Telefono . "<br>Correo : "  . $Email . "<br>Asunto : "  . $Asunto . "<br>Mensaje : "  . $Mensaje;
/*echo "Nombre : " . $Nombre . "<br>Email : "  . $Email . "<br>Mensaje : "  . $Mensaje; */
$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: Cotizaciones Automotriz Larrain <cotizaciones@automotrizlarrain.cl>' . "\r\n";
$Header .= "Cc: teresita.madriaza@hackmonkeys.cl; \r\n"; 

mail('cotizaciones@automotrizlarrain.cl', $subject, $message, $Header); 

if (mail('teresita.madriaza@hackmonkeys.cl', $subject, $message, $Header))


header('Location: gracias.html');

?>