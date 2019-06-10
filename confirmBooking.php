<!-- booking confirmation -->
				<?php
						include('config.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO booking (name,code,contact,email,address,member,dates)
							VALUES ('" . $_POST["name"] . "','" . $_POST["code"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "', '" . $_POST["address"] . "','" . $_POST["member"] . "','" . $_POST["dates"] . "')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your Booking has heen Accepted!');</script>";
							} else {
							    echo "<script>alert('Sorry, Try again later')<script>";
							}

							$conn->close();
						}
				?> 
			<!-- booking confirmation -->