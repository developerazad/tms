<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<section style="border: 2px solid gainsboro;">
				<article>
					<h2 class="text-center">Booking List</h2>
					<form class="navbar-form navbar-left" role="search" method="post" enctype="multipart/form-data" action="findTour.php">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Find Place" name="search" style="margin-top:-108px;">
				        </div>
				        <button type="submit" class="btn btn-default" id="searchform" style="margin-top:-107px;width:75px;height:34px;">Find</button>
				    </form>
				</article>
			</section>
		</div> <!-- mainContent -->
	</div>
		<div class="container">
			
			<div class="gallery">
			<form action="" method="post" enctype="multipart/form-data">

					<!-- Selecting from database -->
						<?php include("config.php"); ?>
						<?php 
								$sql = "SELECT * FROM booking";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									echo "<table border='2' align='center' class='table table-hover'>
												<tr>
													<th>SL</th>
													<th>Name</th>
													<th>Package Code</th>
													<th>Contact</th>
													<th>E-mail</th>
													<th>Address</th>
													<th>Member</th>
													<th>Date</th>
												</tr>";
										while($row = $result->fetch_assoc()){
													echo "<tr>";
													echo "<td>".$row['book_id']."</td>";
													echo "<td>".$row['name']."</td>";
													echo "<td>".$row['code']."</td>";
													echo "<td>".$row['contact']."</td>";
													echo "<td>".$row['email']."</td>";
													echo "<td>".$row['address']."</td>";
													echo "<td>".$row['member']."</td>";
													echo "<td>".$row['dates']."</td>";
													echo "</tr>";
										}
									echo "</table>";
								} else {
									echo("No Data were Found!");
								}
								
								$conn->close();

							
							
						 ?>

					<!-- Selecting from database  End-->

					
					</form>

			</div>
		</div><!-- container-fluid -->
		
	

	

	
		<!-- main content end -->
	<?php include_once('footer.php'); ?>







				