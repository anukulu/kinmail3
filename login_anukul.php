<?php
require "db.php";
session_start();
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']))
{
	$email = $conn->escape_string($_POST['email']);

	$query = "SELECT * FROM `users` WHERE email = '$email'";
	$result = $conn->query($query);

	if($result->num_rows == 0)
	{
		$_SESSION['message'] = "No such account exists";
		header("location:error.php");
	}
	else
	{
		$user = $result->fetch_assoc();
		
		if(password_verify($user['password']))
		{
			$_SESSION['first_name'] = $user['first_name'];
			$_SESSION['last_name'] = $user['last_name'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['active'] = $user['active'];
			$_SESSION['user_id'] = $user['id'];
			//logged in
			$_SESSION['logged_in'] = true;
			header("location:profile_a.php");
		}
		else
		{
			$_SESSION['message'] = "The password you entered is incorrect.";
			header("location:error.php");
		}
	}

}
else
{
	$_SESSION['message'] = "Do not leave the fields empty";
	header("location:error.php");
}


?>