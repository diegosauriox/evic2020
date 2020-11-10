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

$mensaje = "Nombre:" . $nombre . ",\r\n";
$mensaje .="País: " . $pais . " \r\n";
$mensaje .="Ciudad: " . $ciudad . " \r\n";
$mensaje .="Email: " . $email . " \r\n";
$mensaje .="¿Es profesional?: " . $profesional . " \r\n";
$mensaje .="¿Es estudiante?: " . $estudiante . " \r\n";
$mensaje .="Carrera: " . $carrera . " \r\n";
$mensaje .="universidad donde estudia/estudio : " . $universidad . " \r\n";
$mensaje .="Programa de Pregrado o PostGrado : " . $programa . " \r\n";
$mensaje .="Pertenece a un Pueblo Originario?:" . $pueblo_originario . "\r\n";
$mensaje .="Número de Miembro de la IEEE (si corresponde) " . $ieee . " \r\n";


$para= 'evic@ufrontera.cl';
$asunto= 'Inscripccion EVIC';


$header2 = 'From: ' . $para . " \r\n";
$header2 .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header2 .= "Mime-Version: 1.0 \r\n";
$header2 .= "Content-Type: text/plain";
$mensaje2 = "su links es: "; 
mail($para, $asunto, utf8_decode($mensaje), $header);
mail($email, $asunto, utf8_decode($mensaje2), $header2);

header("Location:/index.html#inicio");

?>
