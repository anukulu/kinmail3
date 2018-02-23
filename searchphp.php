	


<?php 

if(!isset($_SESSION['hash']))
	$_SESSION['hash']="";

$user_hash =$_SESSION['hash']; 
$_SESSION['searchhash']=$user_hash;



?>








	<form  class="form form-inline navbar-center col-md-11 col-md-pull-1" style="text-align: center; margin-bottom: 5px;" role="search" autocomplete="on" action="s_database.php" method="get" align="right">

			<div class="form-group">
						<input type="text" name="searchtext" class="form-control search" size="90" placeholder="Search the products" style="">


							<input  type="hidden" name="hash" value="<?php echo $user_hash;?>">

				<button type="submit"  class="btn btn-default"  style="">
					<span class="fa fa-search" style="color:blue">
					</span>
				</button>
			</div>
		</form>	