<!DOCTYPE html>
<html>
<head>
	<title>Complain Status</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style/sbstatus.css">
</head>
<body>
	<!------------------------------create navbar------------------------------->
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
<!-------------------------------mark complain form----------------->
<div class="container">
<div class="row">
	<div class="col-md-8" id="form">
		<h3 class="status">Mark Complain</h3>
		<form action="" method="post">
			<div class="form-group">
				<label>Complainer Name:</label>
				<input type="text" name="username" class="form-control text" placeholder="Username" required="">
			</div>
			<div class="form-group">
				<label>Crime Type:</label>
				<select class="form-control text" name="crime_type">
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
				<label> Complainer Mobile No:</label>
				<input type="text" name="mobile_no" class="form-control text" placeholder="Enter Mobile Number" required="">
			</div>
			<div class="form-group">
			<label>Investigation Officer Name:</label>
		<input type="text" name="officer_name" class="form-control text" placeholder="Investigation Officer Name">
			<span class="error_form" id="conpass_error_message"></span>
			</div>
			<div class="form-group">
				<label>Designation:</label>
				<select class="form-control text" name="designation" >
					<option value="">---Select---</option>
					<option value="ASI">ASI</option>
					<option value="Sub Inspector">Sub Inspector</option>
				</select>
			</div>
			<div class="form-group">
				<label> Officer Mobile No:</label>
				<input type="Number" name="officer_mobile_no" class="form-control text" placeholder="Enter Mobile Number" required="">
			</div>
			<div class="form-group">
				<label>Complain Status:</label>
				<select class="form-control text" name="complain_status" >
					<option value="">---Select---</option>
					<option value="Accept">Accept</option>
					<option value="Reject">Reject</option>
					<option value="Incomplete">Incomplete</option>
					<option value="Process">Process</option>
					<option value="Progress">Progress</option>
				</select>
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
 <!--------------------------------mark complain php code------------------------------------>
 <?php
	include_once("../config.php");
	if(isset($_POST['submit'])) 
	{	 
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$crime_type = mysqli_real_escape_string($conn, $_POST['crime_type']);
		$mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
		$officer_name= mysqli_real_escape_string($conn, $_POST['officer_name']);
		$designation = mysqli_real_escape_string($conn, $_POST['designation']);
		$officer_mobile_no = mysqli_real_escape_string($conn, $_POST['officer_mobile_no']);
		$complain_status = mysqli_real_escape_string($conn, $_POST['complain_status']);		
		//insert data to database	
		$sql = "INSERT INTO `subadmin_mark_complain`(`username`,`crime_type`,`mobile_no`,`officer_name`,`designation`,`officer_mobile_no`,`complain_status`) VALUES ('$username','$crime_type','$mobile_no','$officer_name','$designation','$officer_mobile_no','$complain_status')";
		if (!mysqli_query($conn,$sql)) 
		{
		  die('Error: ' . mysqli_error($conn));
		}
		else
		{
		echo "<script>alert('complain marked successfully.')</script>";
		echo "<script>window.open('subadmin_panel.php?logged_in=You have successfully Logged in!','_self')</script>";
		}
	}
	
?>
			
<!--------------------------footer------------------------------>
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