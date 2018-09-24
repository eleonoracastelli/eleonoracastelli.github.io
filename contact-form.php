<? php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'ell.castelli@gmail.com';

	$email_subject = 'Contact from github website';

	$email_body = "Sender: $name\n".
					"Email $visitor_email\n".
						"Message: $message\n";

	$to = "ell.castelli@gmail.com";

	$headers = "From: $email_from \r \n";

	$headers .= "Reply-to: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: site.html");
	
?>