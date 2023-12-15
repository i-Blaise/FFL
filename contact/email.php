<?php
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit']) && $_POST['submit'] == 'submit')
{
	// echo $_POST['Hear-2'];
	// die();
	
	//Load Composer's autoloader
	require '../vendor/autoload.php';
	
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	
	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'mail.fflwaterfeatures.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'askme@fflwaterfeatures.com';                     //SMTP username
		$mail->Password   = 'FFLWater123';                               //SMTP password
		$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
		$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		// $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
	
		//Recipients
		$mail->setFrom('askme@fflwaterfeatures.com', 'FFL Inquiries');
		$mail->addAddress('menniablaise@gmail.com', 'Megaaaa');     //Add a recipient
		// $mail->addAddress('ellen@example.com');               //Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addBCC('bcc@example.com');
	
		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
	
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'CV webiste Inquiry';
		$mail->Body    = '<b>How did you hear about us:</b> '.$_POST['Hear-2'].'';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		$mail->send();
		// echo 'Message has been sent';
		?>
		<script>
    		window.location = 'http://localhost/FFL/contact/';
		</script>
		<?php
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

}else{
    echo 'not submitted';
}

?>