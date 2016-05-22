<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "desarrollo@devs.com.pe";
$email_subject = "Brief del Sitio Web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['empresa']) ||
!isset($_POST['email']) ||
!isset($_POST['dominio'])) {

echo "
	<html>
		<head>
			<title>Devs, Tu Imagen Digital</title>
			
		</head>
		<body>
			<div style='margin:40vh;text-align:center'>
				<p>Ocurrió un error, por favor revisa los campos</p><br>
				<a href='index.html'>
					<button type='submit' class='btn btn-default center-block'>Regresar</button>
				</a>
			</div>
		</body>
	</html>";
	die();
}
if($_POST['nombre'] == null || $_POST['empresa'] == null
	|| $_POST['email'] == null || $_POST['p1'] == null
	|| $_POST['p2'] == null || $_POST['p3'] == null
	|| $_POST['p4'] == null || $_POST['p5'] == null
	|| $_POST['p6'] == null || $_POST['p7'] == null
	|| $_POST['p8'] == null || $_POST['p9'] == null
	|| $_POST['p10'] == null || $_POST['dominio'] == null){
	echo "
	<html>
		<head>
			<title>DEVS, Tu Imagen Digital</title>
			
		</head>
		<body>
			<div style='margin:40vh;text-align:center'>
				<p>Por favor rellena los campos obligatorios y Preguntas.</br>Las necesitamos para hacer una web correcta para ti. </p><br>
				<a href='index.html'>
					<button type='submit' class='btn btn-default center-block'>Regresar</button>
				</a>
			</div>
		</body>
	</html>";
	die();
}

$email_message = "Detalles del brief:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Empresa: " . $_POST['empresa'] . "\n";
$email_message .= "Correo: " . $_POST['email'] . "\n";
$email_message .= "================================" . "\n";
$email_message .= "1.Objetivo: " . $_POST['p1'] . "\n";
$email_message .= "2.Percepcion: " . $_POST['p2'] . "\n";
$email_message .= "3.Valores: " . $_POST['p3'] . "\n";
$email_message .= "4.Cliente: " . $_POST['p4'] . "\n";
$email_message .= "5.Vision a 3 años: " . $_POST['p5'] . "\n";
$email_message .= "6.Fortalezas: " . $_POST['p6'] . "\n";
$email_message .= "7.Desventajas: " . $_POST['p7'] . "\n";
$email_message .= "8.Riesgo: " . $_POST['p8'] . "\n";
$email_message .= "9.Diferencia: " . $_POST['p9'] . "\n";
$email_message .= "10.En una frase: " . $_POST['p10'] . "\n";
$email_message .= "Dominios: " . $_POST['dominio'] . "\n";
$email_message .= "Código: " . $_POST['codigo'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "
<html>
<head>
	<title>DEVS, Tu Imagen Digital.</title>
	
</head>
<body>
	<div style='margin:40vh;text-align:center'>
		<p>¡Estás un paso mas cerca de tu nueva imagen digital!</p><br>
		<p>Dentro de 24 horas te enviaremos un correo con 3 propuestas de diseño web para que elijas.</br>
		 Luego de tu elección, construiremos una web previa y te enviaremos el formato de llenado de contenido.</br>
		 Lo añadiremos a la web y te enviaremos para que realices la revisión y cambios.</br>
		 Recuerda que mientras mas pronto nos respondas cada paso, mas pronto tu marca estará en internet.</p><br>
		<a href='../index.html'>
			<button type='submit' class='btn btn-default center-block'>ACEPTAR</button>
		</a>
	</div>
</body>
</html>";
}
?>