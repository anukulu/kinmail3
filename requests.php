<?php
require "db.php";
$r_hash=$_SESSION['hash'];
$email = $_SESSION['email'];
$query = "SELECT * FROM requests WHERE requested_by='$email'";
$result = $conn->query($query);
echo "<h3>These are the requests you made for the products.</h3>";
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$hash = $row['requests_hash'];
		$ss=1;
		$product = array();
		while ($ss<13)
		 {
		 	// echo $hash;
		 	// echo "<br>";
		 	if($ss==1) $categories="appliances";
		 	if($ss==2) $categories="baby, toys and kids";
		 	if($ss==3) $categories="beauty and health";
		 	if($ss==4) $categories="books and stationery";
		 	if($ss==5) $categories="computer and gaming";
		 	if($ss==6) $categories="home and living";
		 	if($ss==7) $categories="mens fashion";
		 	if($ss==8) $categories="other categories";
		 	if($ss==9) $categories="phones and tablets";
		 	if($ss==10) $categories="sports and travels";
		 	if($ss==11) $categories="tv, audio and cameras";
		 	if($ss==12) $categories="womens fashion";

					$con = mysqli_connect("localhost", "root", "", "products");
					$query1="SELECT * FROM `$categories` WHERE title='$hash'";
					$result1=mysqli_query($con,$query1);
					if($result1)
					{
						$product = $result1->fetch_assoc();
						// echo $product['hash'];
						if($product['hash'] != "" && $product['title'] != "")
						{
							$category = $categories;
							$_hash = $product['title'];
							$_title = $product['title'];	
						}
						
					}
					
					$ss = $ss+1;
										
		 }   
		 
		echo "Name:<a href='display.php?ID=".$_title."&hash=".$r_hash."' style ='text-decoration:none; color:red;'> ".$_title."</a>";
		echo "<a href='delete_requests.php?hash=".$_hash."'><button>Delete</button></a><br />";
	}
}
else
{
	echo "No requests made up till now.";
}

?>