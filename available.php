<?php
require "db.php";

$email = $_SESSION['email'];

$query = "SELECT * FROM products WHERE email != '$email'";
$result = $conn->query($query);

$products = array();
if($result->num_rows > 0)
{
	echo "<h3>These are some available products:</h3>";
	while($products = $result->fetch_assoc())
	{
		echo "<a href='buyer_products.php?hash=".$products['hash']."' style='text-decoration:none; color:red;'>Name: ".$products['name']."</a> <br />";
	}
}
else
{
	echo "There are no products to show at the moment.";
}

?>