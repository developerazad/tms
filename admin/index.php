<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tour and Travel</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<div class="container-fluid">
		
		<div class="col-md-4"></div>
		<div class="col-md-4 form-style">
			<form method="post">
						
					  <div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text" class="form-control" id="exampleInputEmail" placeholder="username" name="username" required="required">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword" placeholder="password" name="password" required="required">
					  </div>

					  <button type="submit" class="btn btn-default" name="submit" style="float: right;width:80px;height:35px;">Login</button> <br> <br>

					  

					  			<!-- login validation -->
					<?php 
							$_SESSION['admin']="";
							include("config.php"); 		
							if (isset($_POST["submit"])) {

								$sql= "SELECT * FROM users WHERE username= '" . $_POST["username"]."' AND password = '" . $_POST["password"]."' ";
								
								$result = $conn->query($sql);
											if ($result->num_rows > 0) {
													$_SESSION["username"]= $_POST["username"];
													$_SESSION['admin']= "yes";
												    echo "<script>location.replace('viewBooking.php');</script>";
														
												} else {
												    echo "<span style='color:red;'>Check username or password</span>";
												}
								$conn->close();		
							}
							
		 			?>
		<!-- login validation End-->
					  
				</form><br>
		</div>
		<div class="col-md-4"></div>
   


		<script src="css/bootstrap.min.js"></script>
		<script src="js/jquery-1.9.0.min.js"></script>

	</div><!--  containerFluid Ends -->
</body>
</html>

