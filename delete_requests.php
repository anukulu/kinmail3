<?php
session_start();
require "db.php";

$hash = $_GET['hash'];
$email =$_SESSION['email'];
$query1 = "DELETE FROM requests WHERE requests_hash = '$hash' AND requested_by='$email'";
$query2 = "DELETE FROM offers WHERE offers_hash = '$hash' AND offered_by='$email'";

$result2=$conn->query($query1);
$result1=$conn->query($query2);
header("location:profile_a.php");
?>