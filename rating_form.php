<!DOCTYPE html>
<html>
<head>
	<title>Rating</title>
</head>
<body>

<?php 
$selected_product=$_GET['ID'];
$user=$_GET['hash'];
 ?>
<form action="rating.php?ID=<?php echo $selected_product;?>&hash=<?php echo $user?>" method="post">
	

YOUR RATING(Out of 10)<br><input list="ratings" name="rating"><br><br><br>
	 <textarea rows="4" cols="50" name="comment" id="comment" value="comment">
Enter comments here...</textarea>

<br>


<input type="submit" name="Submit">

</form>
</body>
</html>