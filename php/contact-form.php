<?php
session_start();
header('Content-type: application/json');
//require_once (__dir__."/../SAW/config.php");

//global $db;

    
if(isset($_POST['name']))
//if(isset($_POST['name'], $_POST['recaptcha'], $_SESSION['captcha_id']) && strtoupper($_POST['recaptcha']) === $_SESSION['captcha_id'])
{
	$subject = 'Mensaje de Contacto - Brück Germany'; // Replace with your $subject
	$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];
	
	$message = "
			<html>
			<head>
			<title>Información del Formulario de Contacto</title>
			</head>
			<body>
					
					<h2>Información de contacto.</h2>
					<b>Nombre completo:</b><br>  ".$_POST['name']."<br><br>
					<b>Correo electrónico:</b><br> ".$_POST['email']."<br><br>
					<b>Teléfono:</b><br> ".$_POST['phone']."<br><br><br>
					<b>Servicio de interés:</b><br> ".$_POST['serviceop']."<br><br><br>
					<b>Mensaje:</b><br> ".$_POST['message']."<br><br>
					
			</body>
			</html>
			";


 require_once("funcMail.php");
 
// echo ' <!DOCTYPE html>
//<html>
//<head>
//    <meta charset="UTF-8">
//    <meta http-equiv="refresh" content="5;url=https://usempuebla.org/v1/Contacto.html">
//    <title>Éxito</title>
//    <style>
//        html, body {
//            height: 100%;
//            margin: 0;
//        }
//        body {
//            display: flex;
//            justify-content: center;
//            align-items: center;
//            font-family: Arial, sans-serif;
//            text-align: center;
//            background-color: #f0f0f0;
//        }
//        .message {
//            padding: 20px;
//            border-radius: 8px;
//            background-color: #fff;
//            box-shadow: 0 0 10px rgba(0,0,0,0.1);
//            max-width: 500px;
//            width: 100%;
//            box-sizing: border-box;
//        }
//        h1 {
//            color: #4CAF50;
//            margin: 0;
//        }
//        p {
//            margin: 10px 0 0;
//        }
//    </style>
//</head>
//<body>
//    <div class="message">
//        <h1>¡Mensaje enviado con éxito!</h1>
//        <p>Serás redirigido a la página de contacto en breve...</p>
//    </div>
//</body>
//</html> ';
 //header('Location: ../../contact.php?sent=1');
 
    //$data = array(
    //    "name" => $_POST['name'],
    //    "asunto" => $_POST['phone'],
    //    "mensaje" => $_POST['message'],
    //    "email" => $_POST['email']
    //);
    
    // Inserta los datos en la base de datos y verifica que se haya insertado correctamente.
    //$id = $db->insert('TBL_EMAIL', $data);
    
    //if ($id) {
    //    $id_email = $id;
    //    return true;
    //} else {
    //    return false;
    //}
}
?>