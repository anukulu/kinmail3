<html>
<button type="button" name="submit"  class="btn btn-default" data-toggle="modal" data-target="#myModal">Submit</button>

		                   				<div class="modal fade" id="myModal" role="dialog">
		                   					<div class="modal-dialog">
		                   						<div class="modal-content">
		                   							<div class="modal-header">
		                   								 <button type="button" class="close" data-dismiss="modal">&times;</button>
		                   								 <h4 class="modal-title">Allert</h4>
		                   							</div>
		                   						<div class="modal-body">
		                   							<?php
														require "db.php";

														$email = $_GET['email'];
														$hash = $_GET['hash'];

														$query = "SELECT * FROM products WHERE email='$email' AND hash ='$hash'";
														$result = $conn->query($query);

														$product = $result->fetch_assoc();
														echo "This page for ".$product['name']." with a price of: ".$product['price']." is successfully added by ".$product['email'];
													?>
		                   						</div>	
		                   						<div class="modal-footer">
		                   							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                   						</div>
		                   						</div>
		                   					</div>	
	                   				</div>
	                   			</div>

</html>