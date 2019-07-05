<!DOCTYPE html>
<html>
<head>
	<title>Add Missing Person</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/admisperson.css">
</head>
<body>
<!--------------------------- create navbar------------------------->
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
					<li class="active"><a href="../index.html">Home</a></li>
					    <li><a href="../user/user_signin.php">Sign In</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Login<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../admin/admin_login.php">Admin</a></li>
						<li><a href="subadmin_login.php">Sub Admin</a></li>
						<!--<li><a href="#">Page 1-3</a></li>-->
					</ul>
				</li> 
						<li><a href="../ContactPage.html">Contect Us</a></li>
						</ul>
				</div>
				</nav>
		</div>
	</div>
</div>
<!---------------------------------------set image----------------->
<div class="row" style="background: url(../images/centerpic.jpg)no-repeat center;background-size: cover;border: none;height: 300px;">
	<div class="col-md-12" style="background-color: rgba(0,0,0,0.6);
	height: inherit;">

<!--------------------------------set Heading------------------------>
<div class="col-md-8 col-md-push-2  mid-heading" style="text-align:center">
		<h2 style="color:#fff;font-family: monospace;"> Welcome To Online First Information Reporting System</h2>
	</div>
	</div>
</div>
<br>
<!---------------------------------Most Wanted Form------------------------------------------->
<div class="container">
<div class="row">
	<div class="col-md-8" id="form">
		<strong><b class="add-Missing">Add Missing </b></strong>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Police Station Name:</label>
				<select class="form-control text" name="police_station">
					<option value="Thana Kamir"> Thana Kamir</option>
					<option value="Thana Dara Raheem">Thana Dara Raheem</option>
					<option value="Poline Line"> Poline Line</option>
					<option value="Thana Feteh Shar"> Thana Feteh Shar</option>
					<option value="Thana Feteh Shar"> Thana Feteh Shar</option>
				</select>
			</div>
			<div class="form-group">
				<label> Name:</label>
				<input type="text" name="name" class="form-control text" placeholder="Enter Name ">
			</div>
			<div class="form-group">
				<label>Age:</label>
				<input type="Age" name="age" class="form-control text" placeholder="Enter Age">
			</div>
			<div class="form-group">
				<label><b>Select Gender:<b></label>
				<input type="radio" name="gender" value="M" required=""><b>Male</b>
				<input type="radio" name="gender" value="F" required=""><b>Female</b>
			</div>		
			<div class="form-group">
				<label>Skin Tone:</label>
				<select class="form-control text" name="skin_tone">
					<option value="Sahiwal"> Sahiwal</option>
				</select>
			</div>
			<div class="form-group">
				<label>Height:</label>
				<input type="text" name="height" class="form-control text" placeholder="Enter Height ">
			</div>
			<div class="form-group">
				<label>Hair:</label>
				<select class="form-control text" name="hair">
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
				<select class="form-control text" name="body_type">
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
				<input type="text" name="wearing" class="form-control text" placeholder="Enter Wearing ">
			</div>
			<div class="form-group">
				<label>Date Of Missing:</label>
				<input type="date" name="missing_date" class="form-control text" placeholder="">
			</div>
			<div class="form-group">
				<lable>Select image:</lable>
    			<input type="file" name="file1" id="fileToUpload">
		   </div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="submit">
				<input type="reset"  name="reset"  class="btn btn-danger" value="reset">
			</div>	
		</form>
	</div>
</div>
</div>
<!-------------------------------------------MissPerson Php code---------------------->
<?php
include_once("../config.php");
if(isset($_POST['submit']))
{

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
		$target_dir = "../adminuploads/";
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
		//insert data to database	
		$sql = "INSERT INTO `admin_add_missperson`(`police_station`,`name`,`age`,`gender`,`skin_tone`,`height`,`hair`,`body_type`,`mental_ability`,`wearing`,`missing_date`,`image`) VALUES ('$police_station','$name','$age','$gender','$skin_tone','$height','$hair','$body_type','$mental_ability','$wearing','$missing_date','$image')";
		if (!mysqli_query($conn,$sql))
		 {
		  die('Error: ' . mysqli_error($conn));
		 }
		else
		{
			echo "<script>alert('Missing Person added successfully.')</script>";
			echo "<script>window.open('admin_panel.php?logged_in=You have successfully Logged in!','_self')</script>";
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