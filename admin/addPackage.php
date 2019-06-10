<?php include_once('header.php'); ?>

<div class="container">
	<div class="col-md-12">
		<!-- <div class="col-md-3"></div> -->
		
		<!-- <div class="col-md-6" style="min-height:580px;padding-top: 60px;"> -->
		
			<form class="well form-horizontal" action="" method="post" id="contact_form" enctype="multipart/form-data">
					<div class="col-md-6" >
					

						 	 <div class="form-group">
						        <label class="col-md-4 control-label">Choose Image:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="pic" class="form-control" type="file" required="required" id="pic" style="padding: 0px;-webkit-padding:0px;">
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Package ID:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="pic_id" class="form-control" type="number" >
						           </div>
						        </div>
     						 </div>
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Package Name:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="title" placeholder="Name" class="form-control" type="text" >
						           </div>
						        </div>
     						 </div>
     						  <div class="form-group">
						        <label class="col-md-4 control-label">Package Price:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="price" placeholder="Price" class="form-control" type="number" >
						           </div>
						        </div>
     						 </div>
     					</div> <!-- col-md-6 -->
     					<div class="col-md-6">	 
     						 <div class="form-group">
						        <label class="col-md-4 control-label">Description:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<textarea name="description" id="" cols="40" rows="5" ></textarea>
						            </div>
						        </div>
     						 </div>
     						  <div class="form-group">
						        <label class="col-md-4 control-label">Category:</label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<select name="category" id="">
						           		<option value="National">National</option>
						           		<option value="International">International</option>
						           	</select>
						           </div>
						        </div>
     						 </div>
     						  <div class="form-group">
						        <label class="col-md-4 control-label"></label>
						        <div class="col-md-4 inputGroupContainer">
						          <div class="input-group">
						           	<input name="submit" class="form-control" type="submit" value="Add Package" style="background-color:#babbc380;color:#000;">
						           </div>
						        </div>
     						 </div>
						</div> <!-- col-md-6 -->

				<!-- inserting data -->
     				 <?php  
						 if(isset($_POST['submit'])){
							$target_dir = "photo/";
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

							//Check if file already exists
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
							$sql1 = "SELECT * FROM images WHERE pic='". basename($_FILES["pic"]["name"])."' ";
	              					$result = $conn->query($sql1);
	              					if($result->num_rows > 0){
	              						 echo "<script>alert('Sorry, Image already exist!');</script>";
	              					}
	              					else{
									$sql = "INSERT INTO images (pic,pic_id,title,price,description,category)
										VALUES ('" .basename($_FILES["pic"]["name"]) ."', '" . $_POST["pic_id"] . "', '" . $_POST["title"] . "','". $_POST["price"] . "', '" . $_POST["description"] . "', '" . $_POST["category"] . "')";

										if ($conn->query($sql) === TRUE) {
										    echo "<script>alert('New Image Has been Added Successfully!');</script>";
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
     						
			</form>
		</div>
		
		<!-- <div class="col-md-3"></div> -->
	</div>
</div>
	
<?php include_once('footer.php'); ?>
	