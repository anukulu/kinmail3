<?php
require "db1.php";
session_start();

$hash = $_GET['hash'];
$categories = $_GET['categories'];

$query = "SELECT * FROM `$categories` WHERE hash='$hash'";
$result = $conn->query($query);

if($result->num_rows > 0)
{
	$product = $result->fetch_assoc();
	echo "The product is: ".$product['title']." with a price of: ".$product['price']."<br /><b>Uploaded by:</b> ".$product['email'];
}
else
{
	$_SESSION['message'] = "The product you are searching is not available";
	header("location:error.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo 'transaction.php?hash='.$_GET['hash'].'&categories='.$categories;?>" method="post">
	<input type="hidden" name="buyer_email" value="<?php echo $_SESSION['email'];?>">
	<input type="hidden" name="adder_email" value="<?php echo $product['email'];?>">
	<button type="submit" name="deal">Make a deal</button>
</form>
</body>
</html>