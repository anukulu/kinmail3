<?php
require "db.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if($_POST['new_password'] == $_POST['confirm_password'])
	{
		$new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

		$email = $conn->escape_string($_POST['email']);
		$hash = $conn->escape_string($_POST['hash']);


		$query = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
		$result = $conn->query($query);
		if($result)
		{
			$_SESSION['message'] = "Password successfully reset.";
			header("location:success.php");
		}
	}
	else
	{
		$_SESSION['message'] = "The two passwords do not match.";
		header("location:error.php");
	}	
}

?>