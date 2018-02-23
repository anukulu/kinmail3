<?php
require "db.php";
session_start();

		
		$adder_email = $_POST['adder_email'];
		$buyer_email = $_POST['buyer_email'];
		$hash = $_GET['hash'];
		$product_id=$_GET['ID'];
		$categories = $_GET['categories'];
		if(!($buyer_email == $adder_email) && $buyer_email != "")
		{ 
			$query = "SELECT * FROM requests WHERE requested_by = '$buyer_email' AND requests_hash ='$product_id'";
			$result = $conn->query($query);
		
			if($result->num_rows > 0)
			{
				$_SESSION['message'] = "The deal has already been done by you.";
				header("location:chatbox.php?hash=".$hash."&categories=".$categories."&ID=".$product_id);
			}
			else
			{
				$query1 = "INSERT INTO offers(offered_to, offered_by, offers_hash) VALUES ('$adder_email','$buyer_email', '$product_id')";
				$result1= $conn->query($query1);

				$query2 = "INSERT INTO requests(requested_by, requested_to, requests_hash) VALUES ('$buyer_email', '$adder_email', '$product_id')";
				$result2= $conn->query($query2);
				header("location:chatbox.php?hash=".$hash."&categories=".$categories."&ID=".$product_id);
			}
		}
		else
		{
			$_SESSION['message'] = "This product was registered by you so the deal cannot be made.";
			header("location:chatbox.php?hash=".$hash."&categories=".$categories."&ID=".$product_id);
		}
	

?>