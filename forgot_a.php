<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head> -->
<?php
require "db.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['email']) && !empty($_POST['email']))
	{
		$email = $conn->escape_string($_POST['email']);
		$query = "SELECT * FROM `users` WHERE email = '$email'";
		$result = $conn->query($query);
		if($result->num_rows == 0)
		{
			$_SESSION['message'] = "Such account does not exist.";
			header("location:error.php");
		}
		else
		{
			$user = $result->fetch_assoc();

			$email = $user['email'];
			$firstname = $user['first_name'];
			$hash = $user['hash'];

			$_SESSION['message'] = "Please check your email for a conformation link to complete changing your account password.";

			$to = $email;
			$subject = "Reset password conformation link";
			$message_body = 
			'Please click the link below to confirm the password change:

			        http://localhost/kinmail3/reset.php?email='.$email.'&hash='.$hash;
		
			mail($to, $subject, $message_body);
			header("location:success.php");
			// $target = "location:ettikai2.php?email=".$email."&hash=".$hash;
			// header($target);
		}	
	}
	else
	{
		$_SESSION['message'] = "Please do not leave any field empty.";
		header("location:error.php");
	}

}
?>
<!-- <body>
<div id="reset_password">
	<form action="forgot.php" method="post">
		<h1>Reset Password:</h1>
		<label>Email address:</label>
		<input type="text" name="email"><br /><br />
		<input type="submit" name="reset" value="Reset">

	</form>
</div>
</body>
</html> -->