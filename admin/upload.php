				<?php  
						 if(isset($_POST['submit'])){
							$target_dir = "../photo";
							$target_file = $target_dir . basename($_FILES["pic"]["name"]);
							$uploadOk = 1;
							$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
							// Check if image file is a actual image or fake image

						    $check = getimagesize($_FILES["pic"]["tmp_name"]);
						    if($check !== false) {
						        // echo "File is an image - " . $check["mime"] . ".";
						        $uploadOk = 1;
						    } else {
						        echo "File is not an image.";
						        $uploadOk = 0;
						    }

							// Check if file already exists
							if (file_exists($target_file)) {
							    echo "<script>alert('Sorry, file already exists.');</script>";
							    $uploadOk = 0;
							}
							//aloow certain file formats
							if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
								echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
								$uploadok=0;
							}	
						else{
							if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
									include('config.php');
									$sql1 = "SELECT * FROM images WHERE uploaded_on='".$_POST["uploaded_on"]."' ";
	              					$result = $conn->query($sql1);
	              					if($result->num_rows > 0){
	              						 echo "<script>alert('Sorry, Image already exist!');</script>";
	              					}
	              					else{
									$sql = "INSERT INTO tour (pic,title,uploaded_on,description,category)
										VALUES ('" . basename($_FILES["pic"]["name"]) ."','" . $_POST["title"] . "','" . $_POST["uploaded_on"] . "','" . $_POST["description"] ."','". $_POST["category"]."', )";

										if ($conn->query($sql) === TRUE) {
										    echo "<script>alert('New Content Has been Added Successfully!');</script>";
										} else {
										    echo "<script>alert('There was an Error')<script>";
										}
									}

									$conn->close();
							} else {
								echo "<script>alert('sorry there was an error!');</script>";
							}
							
							
						}
				}
				?>
					<!-- inserting data -->