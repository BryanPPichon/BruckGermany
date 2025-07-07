<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha_secret = '6LfBrBcqAAAAAAxP5gk-_qombtP6d__cJaSXmnLe';
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Realiza la solicitud a la API de Google
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    $response_keys = json_decode($response, true);

    if (intval($response_keys["success"]) !== 1) {
        echo 'Por favor completa el reCAPTCHA correctamente.';
    } else {
        // Aquí puedes manejar la lógica de tu formulario, por ejemplo, enviar un correo electrónico.
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Ejemplo de envío de correo electrónico
        $to = 'tucorreo@ejemplo.com';
        $subject = 'Nuevo mensaje de contacto';
        $headers = "From: $email";

        if (mail($to, $subject, $message, $headers)) {
            echo 'Mensaje enviado correctamente.';
        } else {
            echo 'Error al enviar el mensaje.';
        }
    }
} else {
    echo 'Método de solicitud no permitido.';
}
?>
