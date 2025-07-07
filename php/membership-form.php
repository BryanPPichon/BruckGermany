<?php
session_start();
require_once (__dir__."/../SAW/config.php");

global $db;


    if( isset($_POST['nombre']))
    //if( isset($_POST['nombre']) && strtoupper($_POST['captcha']) == $_SESSION['captcha_id'] )
    { 
    $subject = 'Mensaje de Afiliación - Sitio Web USEM';// Replace with your $subject
	//$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];
	$headers = 'From: ' . $_POST['correo'] . "\r\n" . 'Reply-To: ' . $_POST['correo'];
	
	// Validar el tipo de membresía seleccionada
    $tipo_membresia = '';
    if ($_POST['membresia'] == 1) {
        $tipo_membresia = 'Membresía física';
    } elseif ($_POST['membresia'] == 2) {
        $tipo_membresia = 'Membresía Moral';
    } else {
        $tipo_membresia = 'Membresía desconocida'; // Para manejar casos inesperados
    }
	
	$message = "
			<html>
			<head>
			<title> Información del Formulario de Afiliación - USEM</title>
			</head>
			<body>
					
				<h2>Información de contacto.</h2>
				<b>Nombre completo:</b><br> " . $_POST['nombre'] . "<br><br>
				<b>Empresa:</b><br> " . $_POST['empresa'] . "<br><br>
				<b>Teléfono:</b><br> " . $_POST['telefono'] . "<br><br>
				<b>Correo:</b><br> " . $_POST['correo'] . "<br><br>
				<b>Giro del negocio:</b><br> " . $_POST['giro'] . "<br><br>
				<b>Acerca de su empresa:</b><br> " . $_POST['acerca'] . "<br><br>
				<b>Membresía seleccionada:</b><br> " . $tipo_membresia . "<br><br>
					
			</body>
			</html>
			";

	//$email = 'bryan.pichon.tr@vmasideas.com';

 require_once("funcMail.php");
 
 //Html mensaje de enviado con exito
 
 echo ' <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;url=https://usempuebla.org/v1/Afiliacion.html">
    <title>Éxito</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
        }
        .message {
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
            box-sizing: border-box;
        }
        h1 {
            color: #4CAF50;
            margin: 0;
        }
        p {
            margin: 10px 0 0;
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>¡Mensaje enviado con éxito!</h1>
        <p>Serás redirigido a la página de afiliación en breve...</p>
    </div>
</body>
</html> ';

$data = array(
        "name" => $_POST['nombre'],
        "company" => $_POST['empresa'],
        "phone" => $_POST['telefono'],
        "email" => $_POST['correo'],
        "business" => $_POST['giro'],
        "about" => $_POST['acerca'],
        "membership" => $_POST['membresia']
    );
    
    // Inserta los datos en la base de datos y verifica que se haya insertado correctamente.
    $id = $db->insert('TBL_AFILIACION', $data);
    
    if ($id) {
        $id_afiliacion = $id;
        return true;
    } else {
        return false;
    }
    
}
?>







