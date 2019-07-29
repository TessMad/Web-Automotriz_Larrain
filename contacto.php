<?php 
$message = "<h2>Compramos tu Vehiculo Automotriz Larrain</h2>";

$Nombre =  $_POST['fname'];
$Email =  $_POST['email'];
$Tipo    = $_POST['tipo'];
$Mensaje =  $_POST['message'];



$subject = "Contacto Web Automotriz Larrain";
$message  .=  "<br> Nombre : " . $Nombre . "<br>Email : "  . $Email  . "<br> Tipo de Mensaje : "  .$Tipo."<br>Mensaje : "  . $Mensaje; 
/*echo "Nombre : " . $Nombre . "<br>Email : "  . $Email . "<br>Mensaje : "  . $Mensaje; */
$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: Portal Automotriz Larrain <contacto@automotrizlarrain.cl>' . "\r\n";
$Header .= "Cc: teresita.madriaza@hackmonkeys.cl; \r\n"; 

mail('contacto@automotrizlarrain.cl', $subject, $message, $Header); 

if (mail('teresita.madriaza@hackmonkeys.cl', $subject, $message, $Header))


header('Location: gracias.html');

?>