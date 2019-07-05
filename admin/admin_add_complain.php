<!DOCTYPE html>
<html>
<head>
	<title>Add Complaint</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style/adcomplain.css">
</head>
<body>
	<!-------------------------------create navbar--------------------->
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
						</ul>
				</div>
				</nav>
		</div>
	</div>
</div>
<!---------------------------------------set image----------------->
<div class="row" style="background: url(../images/centerpic.jpg)no-repeat center;background-size: cover;border: none;height: 500px;">
	<div class="col-md-12" style="background-color: rgba(0,0,0,0.6);
	height: inherit;">

<!--------------------------------set Heading------------------------>
<div class="col-md-8 col-md-push-2  mid-heading" style="text-align:center">
		<h2 style="color:#fff;font-family: monospace;"> Welcome To Online First Information Reporting System</h2>
	</div>
	</div>
</div>
<!------------------------- Add Complaint Form------------------------------------------------>
<br>
<div class="container">
<div class="row">
	<div class="col-md-8" id="form">
		<h3 class="Complaint">Add Complaint</h3>
		<form action="" method="post">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="username" class="form-control text" placeholder="Username" required="">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control text" placeholder="Enter Password" required="">
			</div>
			<div class="form-group">
				<label>Confirm Password:</label>
				<input type="password" name="confirm_password" class="form-control text" placeholder="Confirm Password" required="">
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email" class="form-control text" placeholder="Me@example.com " required="">
			</div>
			<div class="form-group">
				<label>Mobile No:</label>
				<input type="text" name="mobile_no" class="form-control text" placeholder="Enter Mobile Number" required="">
			</div>
			<div class="form-group">
				<label>Date Of Birth:</label>
				<input type="date" name="date_of_birth" class="form-control text" placeholder="" required="">
			</div>
			<div class="form-group">
				<label>Select Gender:</label><br>
				<input type="radio" name="gender" value="Male" required=""><b>Male</b>
				<input type="radio" name="gender" value="Female" required=""><b>Female</b>
			</div>
			<div class="form-group">
				<label>City:</label>
				<select class="form-control text" name="city" required="">
					<option value="Sahiwal"> Sahiwal</option>
					<option value="Lahore">Lahore</option>
					<option value="Karachi">Karachi</option>
					<option value="Multan">Multan</option>
					<option value="Burewala">Burewala</option>
					<option value="Okara">Okara</option>
				</select>
			</div>
			<div class="form-group">
				<label>Address:</label>
				<textarea name="address" class="form-control" rows="6" placeholder="Enter Address" required=""></textarea>
			</div>
			<div class="form-group">
				<label>Date of Incident(e.g mm/dd/yyyy)</label>
				<input type="date" name="incident_date" class="form-control text" placeholder="">
			</div>
			<div class="form-group">
				<label>Incident Time(e.g 10:00AM):</label>
				<input type="time" name="incident_time" class="form-control text" placeholder="incident time">
			</div>
			
			<div class="form-group">
				<label>Place of Incident:</label>
				<input type="Place" name="incident_place" class="form-control text" placeholder="Place of Incident">
			</div>
			<div class="form-group">
				<label>Incident Type:</label>
				<select class="form-control text" name="incident_type">
					<option value="Cyber Crime">Cyber Crime</option>
					<option value="Murder">Murder</option>
					<option value="Rape">Rape</option>
					<option value="Robbery">Robbery</option>
					<option value="Extortion">Extortion</option>
					<option value="Corruption">Corruption</option>
					<option value="Human Trafficking">Human Trafficking</option>
					<option value="Attempt to commit Suicide">Attempt to commit Suicide:</option>
				</select>
			</div>
			<div class="form-group">
				<label>Detail Of Incident:</label>
				<textarea class="form-control" rows="6" name="incident_detail" placeholder="incident detail"></textarea>
			</div>
			<div class="form-group">
				<label>Incident District:</label>
				<select class="form-control text" name="incident_district">
					<option value="Lahor">Lahor</option>
					<option value="Islamabad">Islamabad</option>
					<option value="Karachi">Karachi</option>
					<option value="Sahiwal">Sahiwal</option>
				</select>
			</div>
			<div class="form-group">
				<label>Police Station:</label>
				<select class="form-control text" name="police_station">
					<option value="thana Kamir">thana Kamir</option>
					<option value="thana dara raheem">thana dara raheem</option>
					<option value="thana ghla mndi">thana ghla mndi </option>
				</select>
			</div>
			<div class="form-group">
				<label>Already Visited Police Station:</label>
				<input type="radio" name="visit" value="Y" required=""><b>Yes</b>
				<input type="radio" name="visit" value="N" required=""><b>No</b>
			</div>
			<div class="form-group">
				<label>Visited Detail(Name/Rank of Police Officer Visited):</label>
				<textarea class="form-control" rows="6" name="visit_detail" placeholder="visist detail"></textarea>
			</div>
			<div class="form-group">
				<label>Visit Time(e.g 10:00AM):</label>
				<input type="time" name="visit_time" class="form-control text" placeholder="">
			</div>
			<div class="form-group">
				<label>Visit Date:</label>
				<input type="date" name="visit_date" class="form-control text" placeholder="">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="submit">
				<input type="reset" name="reset" class="btn btn-danger" value="reset">
			</div>	
			</div>
		</form>
	</div>
</div> 
 </div>
 <!------------------------------- Admin Add complain php code------------------>
 <?php
	include_once("../config.php");
	if(isset($_POST['submit'])) {	 

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
	$date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$incident_date = mysqli_real_escape_string($conn, $_POST['incident_date']);
    $incident_time = mysqli_real_escape_string($conn, $_POST['incident_time']);
	$incident_place = mysqli_real_escape_string($conn, $_POST['incident_place']);
	$incident_type = mysqli_real_escape_string($conn, $_POST['incident_detail']);
	$incident_detail = mysqli_real_escape_string($conn, $_POST['incident_type']);
	$incident_district = mysqli_real_escape_string($conn, $_POST['incident_district']);
	$police_station = mysqli_real_escape_string($conn, $_POST['police_station']);
	$visit = mysqli_real_escape_string($conn, $_POST['visit']);
	$visit_detail = mysqli_real_escape_string($conn, $_POST['visit_detail']);
	$visit_time = mysqli_real_escape_string($conn, $_POST['visit_time']);
	$visit_date = mysqli_real_escape_string($conn, $_POST['visit_date']);	
		//insert data to database	
		$sql = "INSERT INTO `admin_add_complain`( `username`, `password`, `confirm_password`,`email`,`mobile_no`,`date_of_birth`,`gender`,`city`,`address`,`incident_date`,`incident_time`,`incident_place`,`incident_type`,`incident_detail`,`incident_district`,`police_station`,`visit`,`visit_detail`,`visit_time`,`visit_date`) VALUES ('$username','$password','$confirm_password','$email','$mobile_no','$date_of_birth','$gender','$city','$address','$incident_date','$incident_time','$incident_place','$incident_type','$incident_detail','$incident_district','$police_station','$visit','$visit_detail','$visit_time','$visit_date')";
		if (!mysqli_query($conn,$sql)) {
		  die('Error: ' . mysqli_error($conn));
		}else{
			echo "<script>alert('Complain Registered successfully.')</script>";
			 echo "<script>window.open('admin_panel.html?logged_in=You have successfully Logged in!','_self')</script>";
		}
	
}
	?>

 <!-----------------------------footer------------------>
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