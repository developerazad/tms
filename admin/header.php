<?php 
	session_start();  
?>
<?php 
if($_SESSION['admin'] == "" || $_SESSION['username'] == ""){
	header("location:index.php");
}
?>
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
		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<div class="container-fluid">
		<header style="border: 2px solid gainsboro;">
			<div class="header_area full_width">
				<nav class="menu">
					<ul>
						<li><a href="addPackage.php">Add Package</a></li>
						<li><a href="viewPackage.php">viewPackage</a></li>
						<li><a href="viewBooking.php">View Booking</a></li>
						<li><a href="logout.php">logout</a></li>
						<li><a href="../index.php" target="_blank">Visit site</a></li>
					</ul>
					<h2 class="text-center" style="color: #2dabfb;">Tour &amp; Travel Management</h2>
				</nav>
			</div>
		</header>
		
	</div> <!-- container fluid end -->

	<br>