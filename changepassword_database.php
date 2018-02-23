<?php 
require "db.php";
session_start();
$user_change= $_SESSION['change_user'];

$u_email=$_SESSION['email'];
$query = "SELECT * FROM users WHERE email='$u_email'";
$result = $conn->query($query);
$user = mysqli_fetch_assoc($result);
$o_password = $user['password'];
$password = $conn->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
if(password_verify($_POST['oldpassword'], $o_password))
	{
	$query1 = "UPDATE users SET password='$password' WHERE email = '$u_email'";
	$result2 = $conn->query($query1);
	if($result2)
	{
		$_SESSION['message1'] = "You have successfully changed your password";
		header('location:success.php?hash='.$user_change);
	}
}
else
{
	echo "The current password you entered is wrong";
}
?>