<?php

require 'class.phpmailer.php';
require 'class.smtp.php';

$link ="https://www.youtube.com";

$html =  '
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body style="margin: 0; padding: 0; font-family: sans-serif; font-size: 0.9em; overflow-x: hidden;">
	<style type="text/css">
		/*body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			font-size: 0.7em;
			overflow-x: hidden;
		}*/

		/* img{
			padding: 20px;
		}*/

		/*.text-main{
			border-top: 1px solid #FF5733;
			border-bottom:1px solid #FF5733;
			margin: 5px;
			padding: 22px 5px;
			font-size: 1.3em;
		}
		.text-main a{
			text-decoration: none;
			color: #FF5733;
		}

		.enlace{
			font-size: 1.6rem;
			margin-top: 50px;
		}

		.colortext{
			color:#FF5733;
		}

		.colorblue{
			color: #318EF9;
		}

		.colorfa{
			color:#FF5733;
			margin-right: 2px;
			font-size: 1.5em;
		}

		.footer p,h2 {
			padding: 0px 12px;
		}

		.about{
			color: #67CA4A;
		}

		.margin-top{
			margin-top: 20px;
		}

		.textwite{
			color: white;
		}

		.social{
			background-color: #FF5733;
			width: 100%;
			
		}

		.social ul{
			padding: 30px 20px 10px 10px;
			position: relative;
			left: 100px;
			/*transform: translateX(-15%);*/
			margin: 0px;

		}

		.social li a{
			text-decoration: none;
		}

		.social li{
			list-style: none;
			display: inline;
			margin : 0px 5px;
		}

		.social li a .social_img {
			border: 3px solid #fff;
			border-radius: 50%;
			padding: 0px;
		}

		.textcenter{
			text-align: center;
		}

		.youtube{
			width: 25px;
			padding: 13px;
			border:3px solid #fff;
			border-radius:50%;
		}*/
	</style>
	<div class="main">
		<div class="cabecera">
			<!--<img src="logo_cmas.png" alt="logo_cmas">-->
			<img src="cid:logo_cmas" style="padding: 20px;">
		</div>
		<div class="text-main" style="border-top: 1px solid #FF5733;
			border-bottom:1px solid #FF5733;
			margin: 5px;
			padding: 22px 5px;
			font-size: 1.3em;">
			<h1>Hola Usuario!</h1>
			<p>¡Gracias por ser parte del Equipo C+ Club! 
				<br><br>
				Para completar tu registro pulsa el siguiente enlace:
			</p>
			<BR>
			<a href="#" class="enlace" style="text-decoration: none;
			color: #FF5733;  font-size: 1.6rem;
			margin-top: 50px;">Confirma tu Registro Aqui</a>
			
			<p class="margin-top" style="margin-top:10px;">Si no has solicitado un envio de correo de C+ Club hagas caso omiso de este correo <br>
				Un Saludo. <br><br>
				El equipo C+ Club.
			</p>
		</div>
		<div class="footer">
			<h2 class="colorfa" style="color:#FF5733;
			margin-right: 2px;
			font-size: 1.5em; padding: 0px 12px;">Contacto</h2>
			
			<p class="colorfa" style="color:#FF5733;
			margin-right: 2px;
			font-size: 1.5em; padding: 0px 12px;">Av. Río Churubusco 583 esq. La viga <br>
				Col. Sector Popular, 06090<br>
				T. Churubusco 5670 8281<br>
				T. Narvarte 2881 5995<br>
				Email. <a href="mailto:email@email.com" class="colorblue" style="color: #318EF9;">email@email.com</a> <br>
				<a href="http://www.cmasclub.com/" class="colortext" style="color:#FF5733;">www.cmasclub.com</a></p>
			
		
			<P class="about" style="color: #67CA4A;">La información contenida en este correo electrónico es Información Confidencial. Está prohibida la divulgación, difusión y/o distribución,  reproducción y duplicación parcial o total sin la previa autorización por escrito de Club C+ Uno S.A.P.I. de C.V. 
			La información Confidencial deberá ser utilizada únicamente para el fin con la que fue proporcionada. Por lo tanto, el receptor de la Información Confidencial se hace responsable de los daños y perjuicios que pudiera ocasionar el incumplimiento a las obligaciones antes establecidas.
			Club C+ Uno S.A.P.I. de C.V., es responsable del tratamiento de sus datos personales, con domicilio en Av. Río Churubusco 583, Local AN4, Colonia Sector Popular, C.P. 09060, Delegación Iztapalapa, México Distrito Federal.
			Los datos personales aquí recabados serán utilizados para proveer los servicios que ha solicitado y para dar cumplimiento a las obligaciones que hemos contraído con usted. Para mayor información acerca del tratamiento y de los derechos que puede hacer valer, solicitar el aviso de privacidad integral al  correo del cual se emitió la información, accediendo a nuestra página <a href="http://www.cmasclub.com/" class="colorblue">www.cmasclub.com</a>, solicitándola al correo datospersonales@cmasclub.com o en nuestro domicilio antes referido.
			Si usted no es el destinatario, le pedimos destruya esta comunicación y agradeceremos nos lo haga saber al  correo del cual se emitió la información.</P>
		</div>
		<div class="social" style="margin-top:10px; background-color: #FF5733;
			width: 100%; min-height:100px;">
			
			<ul style="padding: 27px 20px 10px 10px;
			position: relative;
			left: 100px;
			/*transform: translateX(-15%);*/
			margin: 0px;">
				<li style="list-style: none;
			display: inline;
			margin : 0px 5px;">
					<a href="https://www.facebook.com/clubcmas" style="text-decoration: none;">
						<!--<img src="social/boton_facebook.png" class="social_img">-->
						<img src="cid:facebook" class="social_img" style="padding: 20px; border: 3px solid #fff;
			border-radius: 50%;
			padding: 0px;">
					</a>
				</li>

				<li style="list-style: none;
			display: inline;
			margin : 0px 5px;">
					<a href="https://www.instagram.com/ClubCmas/" style="text-decoration: none;">
						<!--<img src="social/boton_instagram.png" class="social_img">-->
						<img src="cid:instagram" class="social_img" style="padding: 20px; border: 3px solid #fff;
			border-radius: 50%;
			padding: 0px;">
					</a>
				</li>

				<li style="list-style: none;
			display: inline;
			margin : 0px 5px;">
					<a href="https://twitter.com/ClubCmas" style="text-decoration: none;">
						<!--<img src="social/boton_twitter.png" class="social_img">-->
						<img src="cid:twitter" class="social_img" style="padding: 20px; border: 3px solid #fff;
			border-radius: 50%;
			padding: 0px;">
					</a>
				</li>

				<li style="list-style: none;
			display: inline;
			margin : 0px 5px;">
					<a href="https://www.linkedin.com/company/c--?trk=company_logo" style="text-decoration: none;">
						<!--<img src="social/boton_in.png" class="social_img">-->
						<img src="cid:in" class="social_img" style="padding: 20px; border: 3px solid #fff;
			border-radius: 50%;
			padding: 0px;">
					</a>
				</li>
				<li style="list-style: none;
			display: inline;
			margin : 0px 5px;">
					<a href="https://www.youtube.com/channel/UCB4hFtLE5In88cimtse19gA">
						<!--<img src="social/you.png" class="youtube">-->
						<img src="cid:youtube" class="youtube" style="width: 25px;
			padding: 13px;
			border:3px solid #fff;
			border-radius:50%;">
					</a>
				</li>
			</ul>
		</div>
	</div>	
</body>
</html>
';

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
$phpmailer->addAddress('fredojimenez1@gmail.com','Alfredo');
$phpmailer->Subject ="Seguimiento de Registro C+ Club";
$phpmailer->AddEmbeddedImage(dirname(__FILE__).'/logo_cmas.png','logo_cmas');
$phpmailer->AddEmbeddedImage(dirname(__FILE__).'/social/boton_facebook.png', 'facebook');
$phpmailer->AddEmbeddedImage(dirname(__FILE__).'/social/boton_in.png','in');
$phpmailer->AddEmbeddedImage(dirname(__FILE__).'/social/boton_instagram.png','instagram');
$phpmailer->AddEmbeddedImage(dirname(__FILE__).'/social/boton_twitter.png','twitter');
$phpmailer->AddEmbeddedImage(dirname(__FILE__).'/social/you.png','youtube');
$phpmailer->Body = $html;
$phpmailer->CharSet = 'UTF-8';

$phpmailer->IsHTML(true);

if($phpmailer->Send()){
	echo "Bien se a enviado el correo";
}else{
	echo "Error: " . $phpmailer->ErrorInfo;
}

