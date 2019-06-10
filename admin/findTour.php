<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<section style="border: 2px solid gainsboro;">
				<article>
					<h2 class="text-center">National/International tour</h2>
					<form class="navbar-form navbar-left" role="search" method="post" enctype="multipart/form-data">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Find Place" name="search" style="margin-top:-108px;">
				        </div>
				        <button type="submit" class="btn btn-default" id="searchform" style="margin-top:-107px;width:75px;height:34px;">Find</button>
				    </form>
				</article>
			</section>
		</div> <!-- mainContent -->
	</div>
		<div class="container-fluid">
			<?php if (isset($_POST["search"])) { 
				$key = $_POST["search"];
				
			?>
			<div class="gallery">
			<?php 
 					include('config.php');
					// $sql="SELECT pic, title, description FROM images ORDER BY pic_id DESC WHERE title like '%$key%'";
					$sql = "SELECT * FROM images WHERE title like '%$key%' OR category like '%$key%' OR pic_id like '%$key%' ";
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
										<li><img src="photo/<?php echo $row['pic'];?>"></li>
										<li><h3><?php echo $row['title'];?></h3></li>
										<li><p>Package Code: <?php echo $row['pic_id'];?></p></li>
										<li> <p style="text-align:left;"><?php echo $row['description'];?></p></li>
										<li><p>Total Amount: <?php echo $row['price'];?> Taka Only</p></li>
										<h3><a href="updatePackage.php?pic_id=<?php echo $row['pic_id'];?>" style="color:red;">Update Package</a></h3>
						  			</ul>
						   		</article>
							</section>
						</div>
				 		<?php } ?> 
				 	<?php } ?> 
			</div>
			<?php } ?> 
		</div><!-- container-fluid -->

	

	
		<!-- main content end -->
	<?php include_once('footer.php'); ?>







				