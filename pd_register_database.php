<?php
	require "db.php";
	session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$price = $_POST['price'];
			$hash = md5(rand(0,1000));
			$category = $_POST['categories'];
			$email = $_SESSION['email'];
			//$_GLOBALS['email'] = $_SESSION['email'];

			$query = "INSERT INTO products(name, price, hash, category, email) VALUES ('$name', '$price', '$hash', '$category', '$email')";
			$result = $conn->query($query);
			if($result)

			{
				$_SESSION['productmessage'] = "The product has been added to the database.";
				header("location:pd_register.php");
				
			}
			else
			{
				$_SESSION['productmessage'] = "The product registration is unsuccessful.";
								header("location:pd_register.php");

			}
		}
	

	}
?>