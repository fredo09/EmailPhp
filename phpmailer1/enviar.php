<?php

require 'class.phpmailer.php';
require 'class.smtp.php';

$link ="https://www.youtube.com";
$phpmailer = new PHPMailer();

$phpmailer->IsSMTP(true); // use SMTP
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 587;
$phpmailer->SMTPSecure = 'tls';

//$phpmailer->SMTPDebug = 2;
$phpmailer->Host = "smtp.gmail.com";

$phpmailer->Username = "fredojimenez1@gmail.com";
$phpmailer->Password = "Fredymetal912"; 


$phpmailer->From = "Alfredo@outlook.com";
$phpmailer->FromName = "Alfredo Vazquez";
$phpmailer->addAddress('fred_15@outlook.com','Alfredo');
$phpmailer->Subject ="Te a llegado este Mensaje";
//$phpmailer->AddEmbeddedImage('logo_cmas.png');
$phpmailer->Body = file_get_contents('template.html');


$phpmailer->IsHTML(true);



if(!$phpmailer->Send()){
	echo "bien";
}else{
	echo "Error: " . $phpmailer->ErrorInfo;
}