<?php
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit']) && $_POST['submit'] == 'submit')
{
	$start_date = $_POST['start_date'];
	$hear = $_POST['Hear-2'];
	$budget = $_POST['Budget'];
	$features = $_POST['Feature'];
	$ffl_feature = $_POST['ffl_feature'];
	$name = $_POST['Name'];
	$address = $_POST['Address'];
	$city = $_POST['City'];
	$email = $_POST['email'];
	$phone_number = $_POST['Phone'];
	$consultation_date = $_POST['consultation_date'];
	$consultation_time = $_POST['consultation_time'];
	$payment_method = isset($_POST['payment'])? $_POST['payment'] : false; 
	// die();
	
	//Load Composer's autoloader
	require '../vendor/autoload.php';
	
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	
	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		// $mail->isSMTP(); 
		$mail->IsSMTP();                                           //Send using SMTP
		$mail->Host       = 'smtp.gmail.com.';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'support@ninanigroup.com';                     //SMTP username
		$mail->Password   = 'papu khko alfe rpba';                               //SMTP password
		$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
		$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		// $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
	
		//Recipients
		$mail->addReplyTo($email, $name);
		$mail->setFrom('support@ninanigroup.com', 'FFL Inquiries From Website', false);
		$mail->addAddress('askme@fflwaterfeatures.com', 'FFL Support');     //Add a recipient
		// $mail->addAddress('blaise.mennia@interactivedigital.com.gh', 'FFL Support');     //Add a recipient
		// $mail->addAddress('ellen@example.com');               //Name is optional
		$mail->addBCC('toolssupport@interactivedigital.com.gh');
	
		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
	
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'FFL Webiste Inquiry';
		$mail->Body    = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html lang="en">
		<head>
		  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		  <title>Grids Master Template</title>
		
		  <style type="text/css">
			
			/* Outlines the grids, remove when sending */
			/* table td { border: 1px solid cyan; } */
		
			/* CLIENT-SPECIFIC STYLES */
			body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
			table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
			img { -ms-interpolation-mode: bicubic; }
		
			/* RESET STYLES */
			img { border: 0; outline: none; text-decoration: none; }
			table { border-collapse: collapse !important; }
			body { margin: 0 !important; padding: 0 !important; width: 100% !important; }
		
			/* iOS BLUE LINKS */
			a[x-apple-data-detectors] {
			  color: inherit !important;
			  text-decoration: none !important;
			  font-size: inherit !important;
			  font-family: inherit !important;
			  font-weight: inherit !important;
			  line-height: inherit !important;
			}
		
			/* ANDROID CENTER FIX */
			div[style*="margin: 16px 0;"] { margin: 0 !important; }
		
			/* MEDIA QUERIES */
			@media all and (max-width:639px){ 
			  .wrapper{ width:320px!important; padding: 0 !important; }
			  .container{ width:300px!important;  padding: 0 !important; }
			  .mobile{ width:300px!important; display:block!important; padding: 0 !important; }
			  .img{ width:100% !important; height:auto !important; }
			  *[class="mobileOff"] { width: 0px !important; display: none !important; }
			  *[class*="mobileOn"] { display: block !important; max-height:none !important; }
			}
		
		  </style>    
		</head>
		<body style="margin:0; padding:0; background-color:#F2F2F2;">
		  
		  <span style="display: block; width: 640px !important; max-width: 640px; height: 1px" class="mobileOff"></span>
		  
		  <center>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F2F2">
			  <tr>
				<td align="center" valign="top">
					
				  <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
					<tr>
					  <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
					</tr>
					<tr>
					  <td align="center" valign="top">
		
						<table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
						  <tr>
							<td align="center" valign="top">
								<img src="https://fflwaterfeatures.com/images/email_logo.png" width="180" height="80" style="margin:0; padding:0; border:none; display:block;" border="0" class="img" alt="">
								<h1 style="margin:0; padding:0; margin-bottom:15px;">Enquiry From Website</h1>
							</td>
						  </tr>
						</table>
		
					  </td>
					</tr>
					<tr>
					  <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
					</tr>
				  </table>
		
				  <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#FFFFFF">
					<tr>
					  <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
					</tr>
					<tr>
					  <td align="center" valign="top">
		
						<table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
						  <tr>
							<td width="300" class="mobile" align="center" valign="top">
							  <b>Start Date:</b>
							</td>
							<td width="300" class="mobile" align="center" valign="top">
							'.$start_date.'
							</td>
						  </tr>
						</table>
		
						<table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>How did you hear about us:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$hear.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>Do you have a budget:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$budget.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>Type of water feature:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$features.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>Type of FFL water feature:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$ffl_feature.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>Name:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$name.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>Address:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$address.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>City:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$city.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>Phone Number:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$phone_number.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>Email:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$email.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>City:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$city.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td align="center" valign="top">
								  <h3 style="margin:0; padding:0; margin-bottom:15px;">Consultation Information</h3>
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>Consultation Date:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$consultation_date.'
							  </td>
							</tr>
						  </table>
		
						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
							<tr>
							  <td width="300" class="mobile" align="center" valign="top">
								<b>Time:</b>
							  </td>
							  <td width="300" class="mobile" align="center" valign="top">
							  '.$consultation_time.'
							  </td>
							</tr>
						  </table>

						  <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
						  <tr>
							<td width="300" class="mobile" align="center" valign="top">
							  <b>Paymet Method:</b>
							</td>
							<td width="300" class="mobile" align="center" valign="top">
							'.$payment_method.'
							</td>
						  </tr>
						</table>
		
						  
		
					  </td>
					</tr>
					<tr>
					  <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
					</tr>
				  </table>
		
					  </td>
					</tr>
					<tr>
					  <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
					</tr>
				  </table>
					
				</td>
			  </tr>
			</table>
		  </center>
		</body>
		</html>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		$mail->send();
		// echo 'Message has been sent';
		?>
		<script>
    		window.location = 'https://fflwaterfeatures.com/contact/?status=sent';
			// http://localhost/FFL/contact/?status=sent
		</script>
		<?php
	} catch (Exception $e) {
		?>
		<script>
    		window.location = 'https://fflwaterfeatures.com/contact/?status=failed';
		</script>
		<?php
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

}else{
    echo 'not submitted';
}

?>