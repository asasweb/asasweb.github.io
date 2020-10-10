<?php 

	$costumer_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from= 'ahmed.akghrable@gmail.com';

	$email_subject = "New form" ;

	$email_body= "User email: $costumer_email.\n".
	"User Message: $message. \n";
	$to = "ahmed.alghrable@gmail.com";
	$headers = "FromL: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);
	header("Location: index.html")
 ?>

 <form id="contact-form" method="post" action="contact-form-handler.php">
				<input type="text" name="email" checked="form-control" placeholder="Enter your email" required="yes"> <br>
				<textarea name="message" class="form-control" placeholder="Your message" rows="5"
				required="yes"></textarea> <br>
				<input type="submit" class="form-control submit" value="SEND MESSAGE">
			</form>