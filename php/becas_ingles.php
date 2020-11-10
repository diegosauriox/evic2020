<?php
$nombre=$_POST['nombre'];
$pais=$_POST['pais'];
$ciudad=$_POST['ciudad'];
$email=$_POST['email'];
$profesional=$_POST['profesional'];
$estudiante=$_POST['estudiante'];
$carrera=$_POST['carrera'];
$universidad=$_POST['universidad'];
$programa=$_POST['programa'];
$pueblo_originario=$_POST['pueblo_originario'];
$ieee=$_POST['ieee'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Name:" . $nombre . ",\r\n";
$mensaje .="Country: " . $pais . " \r\n";
$mensaje .="City: " . $ciudad . " \r\n";
$mensaje .="Email: " . $email . " \r\n";
$mensaje .="Profesional: " . $profesional . " \r\n";
$mensaje .="Student: " . $estudiante . " \r\n";
$mensaje .="Carrer: " . $carrera . " \r\n";
$mensaje .="University where study/studied: " . $universidad . " \r\n";
$mensaje .="Undergraduate or Graduate Program : " . $programa . " \r\n";
$mensaje .="Native People:" . $pueblo_originario . "\r\n";
$mensaje .="IEEE Membership Number" . $ieee . " \r\n";
$para= 'evic@ufrontera.cl';
$asunto= 'Inscripcion EVIC';

$header2 = 'From: ' . $para . " \r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-Type: text/plain";
$mensaje2 = "Your link is: "; 


mail($para, $asunto, utf8_decode($mensaje), $header);
mail($email, $asunto, utf8_decode($mensaje2), $header2);

header("Location:/index.html#inicio");
?>
