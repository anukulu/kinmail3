<?php
require "db.php";

$email = $_SESSION['email'];
$query = "SELECT * FROM offers WHERE offered_to='$email'";
$result = $conn->query($query);

echo "<h3>The offers that you have received are:</h3>";
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$hash = $row['offers_hash'];
		$id = $row['id'];
		$buyer = $row['offered_by'];
		$ss=1;
		$product = array();
		while ($ss<13)
		 {
		 	
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
							$_hash = $product['hash'];
							$_title = $product['title'];
							

							echo "<a href='user_product.php?categories=".$category."&hash=".$_hash."' style='text-decoration:none; color:red;'>Name:".$_title."</a>";
							echo "<a href='delete_offers.php?hash=".$_title."&id=".$id."'><button>Decline</button></a>";
							// for the time being, accept_offers.php does the same thing that the delete_offers.php does
							echo "<a href='accept_offers.php?hash=".$_title."&id=".$id."'><button>Accept</button></a>";
							echo "Offered by:".$buyer."<br />";
							$no_offer = false;

						}
						else{
							$no_offer = true;
						}
						
					}
					
					$ss = $ss+1;
										
		 } 
	}
	if($no_offer == true){
		echo "No offers";
	}
}
else
{
	echo "You have not received any offers until now.";
}
?>