<div class="row context">
	<div class="container-fluid">
		<div class="col-sm-12 text-center"><h3>Product Available </h3></div>
  		<div class="panel panel-default">
				<div class="panel panel-body " style="background-color: #d2d2d2;">
					<div class="col-sm-12 ">
						<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">


						<div class="carousel-inner" >
				  
						    <div class="item active" >
						        <div class="col-sm-3" >
						      		<div class="gallery">
						      		<a href="display.php?ID=<?php echo$b[$p]?>">
				    					<img src='<?= $a[$p] ?>'>
				  					</a>
				 					 <div class="desc"><?php echo $b[$p];?></div>
				 				</div>
						    </div>

						    <div class="item" >
						        <div class="col-sm-3" >
						      		<div class="gallery">
							      		<a href="display.php?ID=<?php echo$b[$q]?>">
					    					<img src='<?= $a[$q] ?>'>
					  					</a>
					 					 <div class="desc"><?php echo $b[$q];?></div>
				 					 </div>
						    </div>
                		</div>

							  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
							  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
				        </div>
	    			</div>
    			</div>
 		</div>
	</div>
</div>

<?php session_start();
    $categories="phones and tablets";

	$con=mysqli_connect('localhost','root','','products');
	$query="SELECT * FROM `$categories` WHERE 1";
	$result=mysqli_query($con,$query);

	$i=0;
	 while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
	   {
	   		$a[$i]=$row['imagepath1'];
	   		$b[$i]=$row['title'];
	   		$i=$i+1;

	   }
	   

	   //random value generator for switching between the apps
	   $p=rand(1,$i-1);
	   $q=rand(1,$i-1);
	   while($p==$q){$q=rand(1,$i-1);}
	   $r=rand(1,$i-1);
	   while($p==$r || $q==$r){$r=rand(1,$i-1);}
	   $s=rand(1,$i-1);
	   while ($p==$s || $q==$s||$r==$s){$s=rand(1,$i-1);}
 ?>




<div class="container">
	<div class="row">
		<div class="span12">
    	    <div class="well"> 
                <div id="myCarousel3" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel3" data-slide-to="1"></li>
                    <li data-target="#myCarousel3" data-slide-to="2"></li>
                </ol>
                 
                
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row-fluid">
                	  <div class="span3"><a href="#x"><img src="1.jpg"  /></a></div>
                	  <div class="span3"><a href="#x"><img src="2.jpg" /></a></div>
                	  <div class="span3"><a href="#x"><img src="3.jpg"  /></a></div>
                	  <div class="span3"><a href="#x"><img src="dwas1.jpg" /></a></div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                <div class="item">
                	<div class="row-fluid">
                		<div class="span3"><a href="#x"><img src="dwas1.jpg" /></a></div>
                		<div class="span3"><a href="#x"><img src="dwas1.jpg" /></a></div>
                		<div class="span3"><a href="#x"><img src="dwas1.jpg"  /></a></div>
                		<div class="span3"><a href="#x"><img src="dwas1.jpg"  /></a></div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                <div class="item">
                	<div class="row-fluid">
                		<div class="span3"><a href="#x"><img src="dwas1.jpg"  /></a></div>
                		<div class="span3"><a href="#x"><img src="dwas1.jpg"  /></a></div>
                		<div class="span3"><a href="#x"><img src="dwas1.jpg"  /></a></div>
                		<div class="span3"><a href="#x"><img src="dwas1.jpg"  /></a></div>
                	</div><!--/row-fluid-->
                </div><!--/item-->
                 
                </div><!--/carousel-inner-->
                 
                <a class="left carousel-control" href="#myCarousel3" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel3" data-slide="next">›</a>
                </div><!--/myCarousel-->
                 
            </div><!--/well-->   
		</div>
	</div>
</div>