<?php
session_start();
require "db.php";

if($_SESSION['active'] == 0)
{
	$_SESSION['message'] = "This account has not been verified yet.
								Please verify your account to continue.";
	header("location:error.php");
}
else
{
	echo "<h1>Hello ".$_SESSION['first_name']."</h1>";
	if(isset($_POST['upload']))
	{

		$target = "images/".$_FILES['image']['name'];
		$image = $_FILES['image']['name'];

		$email = $_SESSION['email'];
		$first_name = $_SESSION['first_name'];

		$query = "UPDATE users SET avatar='$image' WHERE email='$email' AND first_name='$first_name'";
		$result = $conn->query($query);

		if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
		{
			$_SESSION['message'] = "Your file was uploaded successfully.";
		}
		else
		{
			$_SESSION['message'] = "The upload was unsuccessful.";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<label>Upload your image here:</label>
<?php

$email = $_SESSION['email'];
$first_name = $_SESSION['first_name'];

$query = "SELECT * FROM users WHERE email ='$email' AND first_name ='$first_name'";
$result = $conn->query($query);
$user =$result->fetch_assoc();

echo "<div id='img_div'>";
if (!empty($user['avatar']))
{
	echo "<img src='images/".$user['avatar']."' height='100' width='100' />";
}
else
{
	echo "<img src='images/default.jpg' height='100' width='100'/>";
}
echo "</div>"
?>
<form action="profile.php" method="post" enctype="multipart/form-data">
	<input type="file" id ="file" name="image" />
	<input type="submit" name="upload" value="Upload" /><br /> <br />
</form>
<div id="my products">
<?php
//in this section we show the links of the products that the user has added.
$email = $_SESSION['email'];

$query = "SELECT * FROM products WHERE email='$email'";
$result = $conn->query($query);

echo "<h3>My Products</h3>";

$number = $result->num_rows;
if($number == 1)
{
	echo "You have ".$number." product registered. <br /><br />";
}
else
{
	echo "You have ".$number." products registered. <br />";	
}

while($products = $result->fetch_assoc())
{
	echo "<a href='chatbox.php?hash=".$products['hash']."' style='text-decoration:none; color:red;'>Name: ".$products['name']."</a><br />";
}
echo "<br />";
?>
</div>
<a href="pd_register.php"><button>Register a product</button></a>
<div id="products_available">
	<?php require "available.php";?>
</div>
<div id="requests_made">
	<?php require "requests.php"; echo "<br />";?>	
</div>
<div id="offers_received">
	<?php require "offers.php"; ?>
</div><br />
<h3>Do you want to logout?</h3>
<a href="logout.php"><button id="logout">Logout</button></a>
</body>
</html>
