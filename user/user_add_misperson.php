<!DOCTYPE html>
<html>
<head>
	<title>Add Missing Person</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/umisperson.css">
</head>
<body>
<!---------------------------create navbar------------------------->
<div class="container-fluid">
		<div class="my-menu">
			<div class="row">
		<h3 class="col-md-2  top-heading" style="text-align: center">Online FIR System</h3>
	</div>
			<nav class="navbar  navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#FIR">
					<span class="icon-bar"></span>	
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
					</button>
				</div>
				<div class="collapse navbar-collapse" id="FIR">
					<ul class="nav navbar-nav pull-left">
						<li class="active"><a href="../index.html">Home</a></li>
					   <li><a href="user_add_complain.php">Complain / FIR</a></li>
					   <li><a href="user_search_complain.php"> Search Complain Status</a></li>
					   <li><a href="user_add_misperson.php">Add Missing Person</a></li>
					   <li><a href="user_change_password.php">Change Password</a></li>
					   <li><a href="../SignOut.php">Sign Out</a></li>
					   <li><a href="../ContactPage.html">Contact Us</a></li>
						</ul>
				</div>
				</nav>
		</div>
	</div>
</div>
<!--------------------------------set Heading------------------------>
<div class="col-md-8 col-md-push-2  mid-heading" style="text-align:center">
		<h2 style="color:#fff;font-family: monospace;"> Welcome To Online First Information Reporting System</h2>
	</div>
	</div>
</div>
<!---------------------------------User Misperson Form------------------------------------------->
<div class="container">
<div class="row">
	<div class="col-md-8" id="form">
		<strong><b class="add-Missing">Add Missing </b></strong>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Police Station Name:</label>
				<select class="form-control text" name="police_station" required="">
					<option value="Thana Kamir"> Thana Kamir</option>
					<option value="Thana Dara Raheem">Thana Dara Raheem</option>
					<option value="Poline Line"> Poline Line</option>
					<option value="Thana Feteh Shar"> Thana Feteh Shar</option>
					<option value="Thana Feteh Shar"> Thana Feteh Shar</option>
				</select>
			</div>
			<div class="form-group">
				<label> Name:</label>
				<input type="text" name="name" class="form-control text" placeholder="Enter Name" required="">
			</div>
			<div class="form-group">
				<label>Age:</label>
				<input type="number" name="age" class="form-control text" placeholder="Enter Age" required="">
			</div>
			<div class="form-group">
				<label>Select Gender:</label>
				<input type="radio" name="gender" value="Male" required=""><b>Male</b>
				<input type="radio" name="gender" value="Female" required=""><b>Female</b>
			</div>		
			<div class="form-group">
				<label>Skin Tone:</label>
				<select class="form-control text" name="skin_tone" required="">
					<option value="Sahiwal"> Sahiwal</option>
				</select>
			</div>
			<div class="form-group">
				<label>Height:</label>
				<input type="number" name="height" class="form-control text" placeholder="Enter Height" required="">
			</div>
			<div class="form-group">
				<label>Hair:</label>
				<select class="form-control text" name="hair" required="">
					<option value="Bob/Finger Wave"> Bob/Finger Wave</option>
					<option value="Pompadour"> Pompadour</option>
					<option value="Ducktail"> Ducktail</option>
					<option value="Corn Rows"> Corn Rows</option>
					<option value="Jheri Curl"> Jheri Curl</option>
					<option value="Rat-tail"> Rat-tail</option>
				</select>
			</div>
			<div class="form-group">
				<label>Body Type:</label>
				<select class="form-control text" name="body_type" required="">
					<option value="Ectomorph"> Ectomorph</option>
					<option value="Mesomorph"> Mesomorph</option>
					<option value="Endomorph"> Endomorph</option>
				</select>
			</div>
			<div class="form-group">
				<label>Mental Ability:</label>
				<input type="radio" name="mental_ability" value="Normal" required=""><b>Normal</b>
				<input type="radio" name="mental_ability" value="Abnormal" required=""><b>Abnormal</b>
			</div>		
			<div class="form-group">
				<label>Wearing:</label>
				<input type="text" name="wearing" class="form-control text" placeholder="Enter Wearing" required="">
			</div>
			<div class="form-group">
				<label>Date Of Missing:</label>
				<input type="date" name="missing_date" class="form-control text" placeholder="" required="">
			</div>
			<div class="form-group">
				<lable>Select image</lable>
    			<input type="file" name="file1" id="fileToUpload" required="">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">
				<input type="reset" name="reset" class="btn btn-danger" value="Reset">
			</div>	

		</form>
	</div>
</div>
</div>
<!----------------------------------Misperson Php code---------------------->
<?php
session_start();
include_once("../config.php");
	if(isset($_POST['submit'])){
		$police_station = mysqli_real_escape_string($conn, $_POST['police_station']);
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$age = mysqli_real_escape_string($conn, $_POST['age']);
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$skin_tone = mysqli_real_escape_string($conn, $_POST['skin_tone']);
		$height = mysqli_real_escape_string($conn, $_POST['height']);
		$hair = mysqli_real_escape_string($conn, $_POST['hair']);
		$body_type = mysqli_real_escape_string($conn, $_POST['body_type']);
		$mental_ability = mysqli_real_escape_string($conn, $_POST['mental_ability']);
		$wearing = mysqli_real_escape_string($conn, $_POST['wearing']);
		$missing_date = mysqli_real_escape_string($conn, $_POST['missing_date']);
		//$image = mysqli_real_escape_string($conn, $_POST['image']);
	$user_id=$_SESSION['id'];
	
	////insert image insert into database and useruploads folder///////////////////////////////////
		$target_dir = "../useruploads/";
		$target_file = $target_dir . basename($_FILES["file1"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image

   		 $check = getimagesize($_FILES["file1"]["tmp_name"]);
    	if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    	} else {
        echo "File is not an image.";
        $uploadOk = 0;
   	 	}
    	if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    	}
    	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    	&& $imageFileType != "gif" ) {
    	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	$uploadOk = 0;
    	}
    	if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    	// if everything is ok, try to upload file
    	} 
      	else {
		  if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file))
		  {
            echo "The file ". basename( $_FILES["file1"]["name"]). " has been uploaded.";
          } 
		else 
		{
            echo "Sorry, there was an error uploading your file.";
        }
        $image=$_FILES["file1"]["name"];
}
////////////insert data to database	//////////////////////////////////////////////////////
		$sql = "INSERT INTO `user_add_misperson`( `police_station`, `name`, `age`, `gender`, `skin_tone`, `height`, `hair`, `body_type`,`mental_ability`,`wearing`,`missing_date`,`image`,`user_id`) VALUES ('$police_station','$name','$age','$gender','$skin_tone','$height','$hair','$body_type','$mental_ability','$wearing','$missing_date','$image','$user_id')";
	
		if (!mysqli_query($conn,$sql)) {
		  die('Error: ' . mysqli_error($conn));
		}else{
			echo "<script>alert('Missing Person added successfully.')</script>";
			echo "<script>window.open('user_misperson_detail.php','_self')</script>";	
		}
	}
?>
<!-------------------------------footer---------------------------->
<div class="footer">
	<div class="col-md-4 col-md-offset-4">
		<br>
		<p style="color: white; font-size:18px;">
			&#64;  Copyright 2019 !! Design By Arid University Sahiwal
		</p>
	</div>
</div>	

</body>
</html>