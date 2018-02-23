<?php 

session_start();

$name=$_SESSION['pname'];



$conn=mysqli_connect('localhost','root','','products');

$ss=1;
	
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

					$query = "DELETE FROM `$categories` WHERE title = '$name'";

					$result2=$conn->query($query);

					if($result2)echo "DELETED";
					else 
						echo "NOT DELETED";
					
					$ss = $ss+1;
										
		 }  


$userhash=$_SESSION['user_hash'];


header("location:profile_a.php?hash=$userhash");









 ?>