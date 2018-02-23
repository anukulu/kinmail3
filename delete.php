<?php
session_start();
require "db.php";

$hash = $_GET['hash'];
$query1 = "DELETE FROM offers WHERE offers_hash = '$hash'";
$query2 = "DELETE FROM requests WHERE requests_hash ='$hash'";

$result1=$conn->query($query1);
$result2=$conn->query($query2);

header("location:profile_a.php");
?>