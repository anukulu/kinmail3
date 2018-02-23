<?php
session_start();
require "db.php";

$hash = $_GET['hash'];
$_SESSION['pname']=$hash;

$email =$_SESSION['email'];
$query1 = "DELETE FROM offers WHERE offers_hash = '$hash' AND offered_to='$email'";
$query2 = "DELETE FROM requests WHERE requests_hash = '$hash' AND requested_to='$email'";

$result2=$conn->query($query1);
$result1=$conn->query($query2);



		
header("location:product_delete.php");
?>