<?php
session_start();
require "db.php";

$hash = $_GET['hash'];
$id = $_GET['id'];
$email =$_SESSION['email'];

$query="SELECT * FROM offers WHERE id='$id'";
$result = $conn->query($query);
$product = $result->fetch_assoc();
$buyer = $product['offered_by'];

$query1 = "DELETE FROM offers WHERE offers_hash = '$hash' AND id='$id'";
$result1=$conn->query($query1);

$query2 = "DELETE FROM requests WHERE requests_hash = '$hash' AND requested_by='$buyer'";
$result2=$conn->query($query2);

header("location:profile_a.php");
?>