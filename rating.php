<?php 


session_start();
$selected_product=$_GET['ID'];
//echo $selected_product;
$user=$_GET['hash'];
//echo $user;


$rating=$_POST['rating'];
//echo $rating;
$comments=$_POST['comment'];





$conn=mysqli_connect('localhost','root','','accounts');
$query="INSERT INTO rating(user,rating,comments) VALUES('$user','$rating','$comments')";
if(mysqli_query($conn,$query))
	echo "RATING RECORDED SUCCESSFULLY";





 ?>
<br><br><br>
 <a href="index.php?hash=<?php echo $user;?>">HOMEPAGE</a>