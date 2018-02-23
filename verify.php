<?php

require "db.php";
session_start();

if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['hash']) && !empty($_GET['hash']))
{
	$email = $conn->escape_string($_GET['email']);
	$hash = $conn->escape_string($_GET['hash']);

	$query = "SELECT * FROM `users` WHERE email = '$email' AND hash = '$hash' AND active ='0'";
	$result = $conn->query($query);

	if($result->num_rows == 0)
	{
		$_SESSION['message'] = "Account has already been activated or Invalid URL";
		header("location:error.php");
	}
	else
	{
		$query = "UPDATE users SET active = '1' WHERE email = '$email'";
		$result = $conn->query($query);
		$_SESSION['active'] = 1;
		$_SESSION['message'] = "Successfully activated the account";
		header("location:login.php");
	}
}
else
{
	$_SESSION['message'] = "Unable to verify the link";
	header("location:error.php");
}

?>