<?php
require "db.php";

$hash = $_GET['hash'];
$query = "SELECT * FROM chat WHERE hash='$hash'";
$result = $conn->query($query);
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo $row['username']."<br />".$row['message']."<br /><br />";
	}
}
else
{
	echo "No messages for this product until now.";
}
?>