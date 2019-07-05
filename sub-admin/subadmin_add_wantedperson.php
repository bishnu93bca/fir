<!DOCTYPE html>
<html>
<head>
	<title>Most Wanted Person</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/sbwperson.css">
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
					    <li><a href="../user/user_signin.php">Sign In</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Login<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../admin/admin_login.php">Admin</a></li>
						<li><a href="subadmin_login.php">Sub Admin</a></li>
						<!--<li><a href="#">Page 1-3</a></li>-->
					</ul>
				</li> 
						<li><a href="../ContactPage.html">Contect Us</a></li>
				</div>
				</nav>
		</div>
	</div>
</div>


<!---------------------------------Most Wanted Form------------------------------------------->
<div class="container">
<div class="row">
	<div class="col-md-8" id="form">
		<strong><b class="add-Most-Wanted">Add Most Wanted </b></strong>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Criminal Name:</label>
				<input type="text" name="name" class="form-control text" placeholder="Enter Criminal Name ">
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
				<label>Address:</label>
				<textarea class="form-control" name="address" rows="6" placeholder="Enter Address"></textarea>
			</div>
			<div class="form-group">
				<label>Skin Tone:</label>
				<select class="form-control text" name="skin_tone">
					<option value="">---Select Skin Tone---</option>
					<option value="Sahiwal"> Sahiwal</option>
				</select>
			</div>
			<div class="form-group">
				<label>Hair Style:</label>
				<select class="form-control text" name="hair">
					<option value="">---Select Hair Style---</option>
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
					<option value="">---Select Body Type---</option>
					<option value="Ectomorph"> Ectomorph</option>
					<option value="Mesomorph"> Mesomorph</option>
					<option value="Endomorph"> Endomorph</option>
				</select>
			</div>
			<div class="form-group">
				<label>Height:</label>
				<input type="text" name="height" class="form-control text" placeholder="Enter Height ">
			</div>
			<div class="form-group">
				<label>Crime Description:</label>
				<textarea class="form-control" name="crime_description" rows="6" placeholder="Enter Crime Description"></textarea>
			</div>
			<div class="form-group">
				<lable><strong>Select Image:</strong></lable>
    			<input type="file" name="file1" id="fileToUpload">
		   </div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="submit">
				<input type="reset" name="reset" class="btn btn-danger" value="reset">
			</div>	
		</form>
	</div>
</div>
</div>
<!--------------------------most wanted person php code------------------>
<?php
include_once("../config.php");
if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$address=mysqli_real_escape_string($conn, $_POST['address']);
	$skin_tone = mysqli_real_escape_string($conn, $_POST['skin_tone']);
	$hair = mysqli_real_escape_string($conn, $_POST['hair']);
	$body_type = mysqli_real_escape_string($conn, $_POST['body_type']);
	$height = mysqli_real_escape_string($conn, $_POST['height']);
	$crime_description = mysqli_real_escape_string($conn, $_POST['crime_description']);
	//$image = mysqli_real_escape_string($conn, $_POST['image']);
///////////////image insert in database/////////
		$target_dir = "../sbadminuploads/";
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
		$sql = "INSERT INTO `subadmin_add_wantedperson`( `name`, `age`, `gender`, `address`,`skin_tone`,`hair`, `body_type`, `height`,`crime_description`,`image`) VALUES ('$name','$age','$gender','$address','$skin_tone','$hair','$body_type','$height','$crime_description','$image')";
	
		if (!mysqli_query($conn,$sql))
		 {
		  die('Error: ' . mysqli_error($conn));
		 }
		else
		{
			echo "<script>alert('Most Wanted Person added successfully.')</script>";
			echo "<script>window.open('subadmin_panel.php?logged_in=You have successfully Logged in!','_self')</script>";
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