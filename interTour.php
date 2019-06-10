<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<section style="border: 2px solid gainsboro;">
				<article>
					<h2 class="text-center">International tour</h2>
					<form class="navbar-form navbar-left" role="search" method="post" enctype="multipart/form-data" action="searchTour.php">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Find Place" name="search" style="margin-top:-108px;">
				        </div>
				        <button type="submit" class="btn btn-default" id="searchform" style="margin-top:-121px;width:75px;height:34px;">Find</button>
				    </form>
				</article>
			</section>
		</div> <!-- mainContent -->
	</div>
		<div class="container-fluid">
			
			<div class="gallery">
			<?php 
 					include('config.php');
					$sql="SELECT * FROM images WHERE category='international' ORDER BY title ASC";
					$result = mysqli_query($conn, $sql);
					$count=mysqli_num_rows($result);
					if($count == 0){
					 echo "No Image Found";
					}else{
						 while($row=mysqli_fetch_array($result)){	
			?>
						<div class="img-width" >	
						 	<section style="float:left;padding-right: 0px;">
								<article>
									<ul style="width:415px">
										<li><a href="bookingTour.php?pic_id=<?php echo $row['pic_id'];?>"><img src="admin/photo/<?php echo $row['pic'];?>" alt="national-tour-image"></a></li>
										<li><h3><?php echo $row['title'];?></h3></li>
										<li><p>Package Code: <?php echo $row['pic_id'];?></p></li>
										<li><p style="text-align:left;"><?php echo $row['description'];?></p></li>
										<li><p>Total Amount: <?php echo $row['price'];?> Taka Only</p></li>
										<h3><a href="bookingTour.php?pic_id=<?php echo $row['pic_id'];?>" style="color:red;">Book</a></h3>
						  			</ul>
						   		</article>
							</section>
						</div>
				 		<?php } ?> 
				 	<?php } ?> 
			</div>
		</div><!-- container-fluid -->

	

	
		<!-- main content end -->
	<?php include_once('footer.php'); ?>







				