<?php

require "db_anukul.php";

/*  registers the user into the database and 
	send email verification link for verification
*/

$_SESSION['first_name'] = $_POST['fname'];
$_SESSION['last_name'] = $_POST['lname'];
$_SESSION['email'] = $_POST['email'];

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash = $conn->escape_string(md5(rand(0,1000)));


	$query = "INSERT INTO `users`(first_name, last_name, email, password, hash) VALUES ('$firstname', '$lastname', '$email', '$password', '$hash')";
	$result = $conn->query($query);

	if($result)
	{
		$_SESSION['active'] = 0; // 0 until the user verifies the account
		$_SESSION['logged_in'] = true;
		$_SESSION['message'] = 'Conformation link has been sent to '.$email. ' Please verify your account before logging in.';

		//send registration conformation link
		$to = $email;
		$subject = "Conformation email";
		$message_body = 
					'Hello '.$firstname.' !!
					Please verify your account by clicking on the link below:

					http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;
		mail($to, $subject, $message_body);
		echo "Registered";
	}
	


?>

