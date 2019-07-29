<?php 

$message = "<h2>Cotizaciones Web Automotriz Larrain</h2>";


$Nombre =  $_POST['fname'];
$Email =  $_POST['email'];
$Mensaje =  $_POST['message'];
$Asunto = $_POST['subject'];
$Rut = $_POST['rut'];
$Telefono = $_POST['telefono'];

$subject = "Quiero cotizar Web Automotriz Larrain";

$message  .= "Asunto : " . $Asunto . "<br> Nombre : " . $Nombre . "<br>Email : "  . $Email . "<br>Mensaje : "  . $Mensaje."<br>Rut : " .$Rut."Telefono : " . $Telefono;
//echo "Nombre : " . $Nombre . "<br>Email : "  . $Email . "<br>Mensaje : "  . $Mensaje;
$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: Desde cotizaciones Automotriz Larrain <cotizaciones@automotrizlarrain.cl>' . "\r\n";
$Header .= "Cc: teresita.madriaza@hackmonkeys.cl; \r\n"; 

if(mail('teresita.madriaza@hackmonkeys.cl', $subject, $message, $Header))

echo "<br> Tu Mensaje ha sido Enviado Correctamente <br> ";

else 

echo "<br>Email Falla <br>";

$newURL = "index.html";
header('Location: '.$newURL);

?>