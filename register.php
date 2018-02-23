<?php
/*  registers the user into the database and 
	send email verification link for verification
*/

require "db.php";
session_start();

$_SESSION['first_name'] = $_POST['fname'];
$_SESSION['last_name'] = $_POST['lname'];
$_SESSION['email'] = $_POST['email'];

$firstname = $conn->escape_string($_POST['fname']);
$lastname = $conn->escape_string($_POST['lname']);
$email = $conn->escape_string($_POST['email']);
$password = $conn->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $conn->escape_string(md5(rand(0,1000)));

$_SESSION['hash'] = $hash;

$gender = $conn->escape_string($_POST['gender']);
$contact = $conn->escape_string($_POST['contact']);
$dob = $conn->escape_string($_POST['dob']);
$username = $conn->escape_string($_POST['username']);
$active=$loggedin=0;
$avatar = $_FILES['file']['name'];
$path_to_upload = "profile_images/".$_FILES["file"]["name"];


	move_uploaded_file($_FILES["file"]["tmp_name"], $path_to_upload);


$query = "SELECT * FROM `users` WHERE email ='$email' ";
$result = $conn->query($query);
if($result->num_rows > 0)
{
	$_SESSION['message1'] =  "The user has already been registered";
	header("location:error.php");
}
else
{
	$query = "INSERT INTO `users`(first_name, last_name, email, password, hash,active,loggedin,gender, contact, username, dob, avatar) VALUES ('$firstname', '$lastname', '$email', '$password', '$hash','$active','$loggedin', '$gender', '$contact', '$username', '$dob', '$avatar')";
	
	$result = $conn->query($query);

	if($result)
	{
		$_SESSION['active'] = 0; // 0 until the user verifies the account
		$_SESSION['logged_in'] = true;
		$_SESSION['message1'] = 'Conformation link has been sent to '.$email. ' Please verify your account before logging in.';

		//send registration conformation link
		$to = $email;
		$subject = "Conformation email";
		$message_body = 
					'Hello '.$firstname.' !!
					Please verify your account by clicking on the link below:

					http://localhost/kinmail3/verify.php?email='.$email.'&hash='.$hash;
		mail($to, $subject, $message_body);
		header("location:success.php");
	}
	else
	{
		$_SESSION['message1'] = "Registration failed";
		header("location:error.php");
	}
}

?>

