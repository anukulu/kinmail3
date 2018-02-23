<?php
require "db.php";
session_start();

		$username = $_GET['username'];
		$message = $_GET['message'];
		$hash = $_GET['hash'];
		$product=$_SESSION['s_product'];
		$last_id = 0;

		$t = time();
		$t2 = time() + 17100;
		$time1 = date("Y-m-d", $t);
		$time2 = date("h:i:sa", $t2);
		$time_total = $time2.' &nbsp&nbsp'.$time1;
		
		if($message != "")
		{
			$query = "INSERT INTO chat(username, message, hash, timea) VALUES ('$username', '$message', '$product','$time_total')";
			$result = $conn->query($query);
		}
		$query = "SELECT * FROM chat WHERE hash='$product'";  
		$result = $conn->query($query);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$time = $row['timea'];
				echo "<span style='color:blue;'><b>".$row['username']."</b></span><br />".$row['message']." &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $time<br /><br />";
			}
		}
		else
		{
			echo "No messages for this product until now.";
		}





?>