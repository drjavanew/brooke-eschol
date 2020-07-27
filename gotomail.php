<?php
		//ini_set("include_path", '.:/opt/cpanel/ea-php70/root/usr/share/pear' . ini_get("include_path") );
		
		set_include_path(".:/opt/cpanel/ea-php70/root/usr/share/pear");
		use 'PHPMailer\PHPMailer\PHPMailer'; // Phpmail package already on server
		use PHPMailer\PHPMailer\Exception; // Phpmail package already on server

		require 'PHPMailer/src/PHPMailer.php'; // Phpmail package already on server
		require 'PHPMailer/src/SMTP.php'; // Phpmail package already on server

		$mail = new PHPMailer(true);

		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->SMTPAuth = true; // enable SMTP authentication
		$mail->Host = "localhost"; // sets the SMTP server
		$mail->Port = 25; // set the SMTP port for the GMAIL server
		$mail->Username = "noreply@brooke-eshcol.com.ng"; // SMTP account username
		$mail->Password = ""; // SMTP account password

		$mail->SetFrom('noreply@brooke-eshcol.com.ng', 'Brooke Eshcol System');
		$mail->AddReplyTo("ilozuechukwuemeka@yahoo.com.com","Emeka ilozue");
		$mail->Subject = "Testing";
		$mail->MsgHTML("<html><body>This is a sample message! <br></body></html>");
		$mail->AddAddress("noreply@brooke-eshcol.com.ng");
		//$mail->AddAttachment(""); // attachment

		if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		echo "Message sent!";
		// header("Location: http://www.example.com/");
		}
?>
