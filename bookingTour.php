<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<section style="border: 2px solid gainsboro;">
				<article>
					<h2 class="text-center">National tour</h2>
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

<?php $pic_id = isset($_GET['pic_id'])?$_GET['pic_id']:""; ?>
			<div class="gallery">
			<?php 
 					include('config.php');
					$sql="SELECT * FROM images WHERE pic_id = $pic_id ";
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
										<li><img src="admin/photo/<?php echo $row['pic'];?>" alt="national-tour-image"></li>
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

			<!-- booking form -->
				<div class="gallery">
					<div class="img-width" >	
						 	<section style="float:left;padding-right: 0px;">
								<article>
								<ul style="width:415px">
									<form enctype="multipart/form-data" method="post" class="text-center" action="confirmBooking.php">
									<!--  <div class="col-md-12"> -->
										 <fieldset><legend>Booking Form</legend></fieldset>
									 		<label>
												Your Name: <input type="text" name="name" value="" placeholder="Full name" required>
											</label><br><br>

											<label>
												Package Code: <input type="text" name="code" placeholder="code" required/>
											</label><br><br>
											<label>
												Contact: <input type="text" name="contact" placeholder="Contact" required/>
											</label><br><br>
						 					<label>
												Email: <input type="email" name="email"  value="" placeholder="email" required>
											</label><br><br>
						 					<label>
												Address: <input type="text" name="address" value="" placeholder="address">
											</label><br><br>
											<label>
												Total Member: <input type="number" name="member" required/>
											</label><br><br>
											<label>
												Journey Date: <input type="date" name="dates" required/>
											</label><br><br>
											
											<button name="submit" type="submit" style="margin-left:255px;width: 85px;border-radius: 3px;">Confirm</button> <br>
										
									<!-- </div> -->	<!-- col-md-12 -->


									</form>
								</ul>
						   		</article>
							</section>
					</div>
				</div>
			<!-- booking form -->

			
		</div><!-- container-fluid -->

	

	
		<!-- main content end -->
	<?php include_once('footer.php'); ?>







				