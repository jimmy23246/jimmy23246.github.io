<?php	
	if (empty($_POST['name_32800']) && strlen($_POST['name_32800']) == 0 || empty($_POST['email_32800']) && strlen($_POST['email_32800']) == 0 || empty($_POST['email_32800']) && strlen($_POST['email_32800']) == 0)
	{
		return false;
	}
	
	$name_32800 = $_POST['name_32800'];
	$email_32800 = $_POST['email_32800'];
	$email_32800 = $_POST['email_32800'];
	$message_32800 = $_POST['message_32800'];
	$optin_32800 = $_POST['optin_32800'];
	
	$to = 'jimmy23246@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Pending Request for an Inverview for PSCL";
	$email_body = "You have received a new message. \n\n".
				  "Name_32800: $name_32800 \nEmail_32800: $email_32800 \nEmail_32800: $email_32800 \nMessage_32800: $message_32800 \nOptin_32800: $optin_32800 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_32800";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>