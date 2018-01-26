<<<<<<< HEAD
<?php 
	
	$name = $_REQUEST[ 'contact-name' ];
	$email = $_REQUEST[ 'contact-email' ];
	$subject = $_REQUEST[ 'contact-subject' ];
	$message = $_REQUEST[ 'contact-message' ];
	$mail_subject = $subject . "( Customer Contact )";
	$message = "Name: ".$name." || Email: ".$email." || Subject: ".$subject." || Message: ".$message;
	
	/* Replace YOUR_MAIL With Your Mail Address inside '' */
	if ( mail( 'YOUR_MAIL', $mail_subject, $message, "From:" . $email ) ) {
		echo "Thank you <strong>$name</strong> for contacting with us !!!";
	} else {
		echo "Error in sending message !!! Please try again";
	}
	
=======
<?php 
	
	$name = $_REQUEST[ 'contact-name' ];
	$email = $_REQUEST[ 'contact-email' ];
	$subject = $_REQUEST[ 'contact-subject' ];
	$message = $_REQUEST[ 'contact-message' ];
	$mail_subject = $subject . "( Customer Contact )";
	$message = "Name: ".$name." || Email: ".$email." || Subject: ".$subject." || Message: ".$message;
	
	/* Replace YOUR_MAIL With Your Mail Address inside '' */
	if ( mail( 'YOUR_MAIL', $mail_subject, $message, "From:" . $email ) ) {
		echo "Thank you <strong>$name</strong> for contacting with us !!!";
	} else {
		echo "Error in sending message !!! Please try again";
	}
	
>>>>>>> 0f1b17a81f92c4eb18d367a85abecc4f176f0b39
 ?>