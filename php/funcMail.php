<?php
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
 	//require_once ('class.phpmailer.php');
 	require_once "PHPMailer/src/Exception.php";
    require_once "PHPMailer/src/PHPMailer.php";
    require_once "PHPMailer/src/SMTP.php";
    
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->PluginDir = __dir__.'/';
	$mail->Mailer = "smtp";
	$mail->Host = "mail.vmasideas.agency";
	$mail->Port=465;  
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl"; 
	$mail->Username = "pruebaphp@vmasideas.agency"; 
	$mail->Password = "Pruebaphp";
	//$mail->AddReplyTo('bryan.pichon.tr@vmasideas.com', 'Contacto');
	//$mail->AddReplyTo($_POST['email'], 'Contacto');
	$mail->SetFrom('info@bruck.com.mx', 'BRÜCK GERMANY');
	//$mail->Timeout=30;
	//$mail->addAddress('bryan.pichon.tr@vmasideas.com');
	//$mail->addCC('pruebaphp@vmasideas.agency');
	$mail->AddAddress('salvador.sanchez@vmasideas.com');//direccion destino
	//$mail->AddAddress('info@bruck.com.mx');//direccion destino
	/**if(isset($emailAdmin))
		$mail->AddCC($emailAdmin);//direccion admin
	if(isset($emailAdmin2))
		$mail->AddCC($emailAdmin2);//direccion admin
	if(isset($emailAdmin3))
		$mail->AddCC($emailAdmin3);//direccion admin**/
	$mail->Subject = $subject;//asunto
	$mail->IsHTML(true);
	$mail->Body = $message;
	// $log->trace("[".$IP."] "."Email no enviado a 11111111111111111111111 : ".$email." - ".json_encode($message)); 
	$exito = $mail->Send();
	try
	{
			$intentos=1; 
			while ((!$exito) && ($intentos < 5)) 
			{
				sleep(5);
				// echo $mail->ErrorInfo;
				$exito = $mail->Send();
				$intentos=$intentos+1;	
							
			}				
		   if(!$exito)
		   {
		       $d = array('response' => 'error', 'errorMessage' => 'failed');
		       echo json_encode($d);
			    // $log->trace("[".$IP."] "."Email no enviado a : ".$email." - ".json_encode($mail->ErrorInfo));  
		   }
		   else{
		       $d = array('response' => 'success');
		       echo json_encode($d);
		   }
	}
	catch(Exception $ex) 
	{
		$log->error("[".$IP."] "."ERROR.funcMail: ".$ex); 
		$d = array('response' => 'error', 'errorMessage' => $ex);
		echo json_encode($d);
	}

				
?>
