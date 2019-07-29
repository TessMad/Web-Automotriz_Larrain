<?php 

$message = "<h2>Contacto Web Automotriz Larrain</h2>";


$Nombre =  $_POST['fname'];
$Email =  $_POST['email'];
$Modelo = $_POST['modelo'];
$Marca = $_POST['marca'];
$Version = $_POST['version'];
$Anio = $_POST['anio'];
$Mensaje =  $_POST['message'];
$Telefono = $_POST['telefono'];


$subject = "Contacto Web Automotriz Larrain";
$message  .= "Asunto : " . $Asunto . "<br> Nombre Completo : " . $Nombre . "<br>Email : "  . $Email . "<br>Telefono : "  . $Telefono . "<br>Marca : "  . $Marca . "<br>Modelo : "  . $Modelo . "<br>Version : "  . $Version. "<br>Año : "  . $Anio ."<br>Mensaje : "  . $Mensaje;
/*echo "Nombre : " . $Nombre . "<br>Email : "  . $Email . "<br>Mensaje : "  . $Mensaje; */
$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: Portal Automotriz Larrain <cotizaciones@automotrizlarrain.cl>' . "\r\n";
$Header .= "Cc: teresita.madriaza@hackmonkeys.cl; \r\n"; 

mail('cotizaciones@automotrizlarrain.cl', $subject, $message, $Header);

if (mail('teresita.madriaza@hackmonkeys.cl', $subject, $message, $Header))


header('Location: gracias.html');


?>