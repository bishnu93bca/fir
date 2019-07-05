<!DOCTYPE html>
<html>
<head>
	<title> Add Investigation Report</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/adreport.css">
</head>
<body>
	<!--------------------------create navbar------------------------->
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
<!--------------------------------set Heading------------------------>
<div class="col-md-8 col-md-push-2  mid-heading" style="text-align:center">
		<h2 style="color:#fff;font-family: monospace;"> Welcome To Online First Information Reporting System</h2>
	</div>
<!-----------------------Investigation report form---------------------->
<div class="container">
<div class="row">
	<div class="col-md-8" id="form">
		<strong><b class="report">Investigation Report </b></strong>
		<form action="" method="post">
			<div class="form-group">
				<label>SHO Remarks:</label>
				<select class="form-control text" name="remarks" >
					<option value="">---Select---</option>
					<option value="Done">Done</option>
					<option value="Reject">Reject</option>
					<option value="Again Investagate">Again Investagate</option>
					<option value="Satisfied">Satisfied</option>
					<option value="Unsatisfied">Unsatisfied</option>
				</select>
			</div>
			<div class="form-group">
				<label>Remarks Description:</label>
				<textarea name="remarks_description" class="form-control" rows="6" placeholder="Remarks Description" required=""></textarea>
			</div>
			<div class="form-group">
				<label>SHO Sign:</label>
				<input type="Number" name="sign" class="form-control text" placeholder="SHO Sign">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">
			</div>	
			</div>
		</form>
	</div>
</div> 
 </div>
 <!-------------------------------reply investigation report php code---------------->
<?php
include("../config.php");
if(isset($_POST['submit']))
 {	
 	$id = $_GET['id'];
	$remarks = mysqli_real_escape_string($conn, $_POST['remarks']);
	$remarks_description = mysqli_real_escape_string($conn, $_POST['remarks_description']);
	$sign = mysqli_real_escape_string($conn, $_POST['sign']);	
		//insert data to database	
		$sql1 = "INSERT INTO `admin_reply_investigation`(`remarks`,`remarks_description`,`sign`,`user_report_id`) VALUES ('$remarks','$remarks_description','$sign','$id')";
		$sql2 = "INSERT INTO `subadmin_receive_notification`(`remarks`,`remarks_description`,`sign`,`read_n`) VALUES ('$remarks','$remarks_description','$sign','1')";
	
		if (!mysqli_query($conn,$sql1)) 
		{
		  die('Error: ' . mysqli_error($conn));
		}
		else
		{
			//echo "<script>alert('Investigation Report update and  send successfully.')</script>";
			//echo "<script>window.open('admin_panel.php?logged_in=You have successfully Logged in!','_self')</script>";
		}	
		if (!mysqli_query($conn,$sql2)) 
		{
		  die('Error: ' . mysqli_error($conn));
		}
		else
		{
			echo "<script>alert('Investigation Report update and  send successfully.')</script>";
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