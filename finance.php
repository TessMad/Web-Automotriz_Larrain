<?php 
$message = "<h2>Evaluación de Crédito Automotriz Larrain</h2>";

$Nombre =  $_POST['fname'];
$Rut = $_POST['rut'];
$Telefono = $_POST['telefono'];
$Email =  $_POST['email'];
$Tipo = $_POST['tipo'];
$Renta = $_POST['renta'];
$Mensaje =  $_POST['message'];



$subject = "Solicitud de Evaluación de crédito Automotriz Larrain";
$message  .= "<br> Nombre Completo : " . $Nombre ."<br> Rut : "  . $Rut . "<br>Email : "  . $Email . "<br>Telefono : "  . $Telefono ."<br> Tipo Trabajador : " .$Tipo . "<br> Renta : " .$Renta;
/*echo "Nombre : " . $Nombre . "<br>Email : "  . $Email . "<br>Mensaje : "  . $Mensaje; */
$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: Portal Automotriz Larrain <cotizaciones@automotrizlarrain.cl>' . "\r\n";
$Header .= "Cc: teresita.madriaza@hackmonkeys.cl; \r\n"; 

mail('cotizaciones@automotrizlarrain.cl', $subject, $message, $Header); 

if (mail('teresita.madriaza@hackmonkeys.cl', $subject, $message, $Header))


header('Location: gracias.html');

?>