<?php
require 'class.phpmailer.php';

$mail = new PHPMailer(true);
//indico a la clase que use SMTP
$mail­->IsSMTP();
//permite modo debug para ver mensajes de las cosas que van ocurriendo
$mail­->SMTPDebug = 2;
//Debo de hacer autenticación SMTP
$mail­->SMTPAuth = true;
$mail­->SMTPSecure = "ssl";
//indico el servidor de Gmail para SMTP
$mail­->Host = "smtp.gmail.com";
//indico el puerto que usa Gmail
$mail­->Port = 465;
//indico un usuario / clave de un usuario de gmail
$mail­->Username = "fredojimenez1gmail@gmail.com";
$mail­->Password = "Fredymetal912";
//$mail­>SetFrom('tu_correo_electronico_gmail@gmail.com', 'Nombre completo');
//$mail­>AddReplyTo("tu_correo_electronico_gmail@gmail.com","Nombre completo");
$mail­->Subject = "Envío de email usando SMTP de Gmail";
$mail­->MsgHTML("Hola que tal, esto es el cuerpo del mensaje!");
//indico destinatario
$address = "fred_15@outlook.com";
$mail­->AddAddress($address, "Username");
if(!$mail-­>Send()) {
echo "Error al enviar: " . $mail­>ErrorInfo;
} else {
echo "Mensaje enviado!";
}

?>

