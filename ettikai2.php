<?php
session_start();

$email = $_GET['email'];
$hash = $_GET['hash'];
echo "<a href='reset.php?email=$email&hash=$hash'>Click on me!!</a>";

?>