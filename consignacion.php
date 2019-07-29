<?php 
$message = "<h2>Compramos tu Vehiculo Automotriz Larrain</h2>";

$Nombre =  $_POST['fname'];
$Email =  $_POST['email'];
$Modelo = $_POST['modelo'];
$Marca = $_POST['marca'];
$Version = $_POST['version'];
$Anio = $_POST['anio'];
$Mensaje =  $_POST['message'];
$Telefono = $_POST['telefono'];
$Kms = $_POST['kms'];

$subject = "Compramos tu vehiculo Automotriz Larrain";
$message  .= "<br> Nombre Completo : " . $Nombre . "<br>Email : "  . $Email . "<br>Telefono : "  . $Telefono . "<br>Marca : "  . $Marca . "<br>Modelo : "  . $Modelo . "<br>Version : "  . $Version. "<br>Año : "  . $Anio ."<br>Mensaje : "  . $Mensaje. "<br>Kilometraje : " .$Kms;
/*echo "Nombre : " . $Nombre . "<br>Email : "  . $Email . "<br>Mensaje : "  . $Mensaje; */
$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: Portal Automotriz Larrain <consignaciones@automotrizlarrain.cl>' . "\r\n";
$Header .= "Cc: teresita.madriaza@hackmonkeys.cl; \r\n"; 

mail('consignaciones@automotrizlarrain.cl', $subject, $message, $Header); 

if (mail('teresita.madriaza@hackmonkeys.cl', $subject, $message, $Header))


header('Location: gracias.html');

?>