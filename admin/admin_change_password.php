<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/adpassword.css">
		
</head>
<body>
	<!----------------------------------creation menu-------------------------------------->
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
<!-------------------------------------Change Password Form------------------------->
<div class="container">
	<div class="row">
		<div class="col-md-6" id="form">
			<center><h2 class="Password">Change your Password</h2></center>
			<form action="" method="post">
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" class="form-control text" placeholder="Enter Email ">
			</div>
			<div class="form-group">
				<label>Enter current Password:</label>
				<input type="Password" name="current_password" class="form-control text" placeholder="" required="">
			</div>
			<div class="form-group">
				<label>Enter New Password:</label>
				<input type="Password" name="new_password" class="form-control text" placeholder="" required="">
			</div>
			
			<div class="form-group">
				<label>Confirm New Password:</label>
				<input type="Password" name="confirm_password" class="form-control text" placeholder="" required="">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">
			</div>		
			</form>
			
		</div>
	</div>
</div>
<!---------------------change Password Php code------------------>
<?php 
include_once("../config.php");
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$current_password=$_POST['current_password'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];
	$sel_pass="SELECT * FROM admin_login WHERE email='$email' AND password ='$current_password'";
	$run_pass=mysqli_query($conn,$sel_pass);
	$check_pass=mysqli_num_rows($run_pass);
	if($check_pass==0)
	{
		echo "<script> alert('Your Current Password is Wrong!')</script>";
		echo "<script>window.open('admin_change_password.php','_self')</script>";
	}	
	if($new_password!=$confirm_password){
		echo "<script>alert('New Password do not match!')</script>";
		echo "<script>window.open('admin_change_password.php','_self')</script>";
	}
	else
	{
		$update_pass="UPDATE uregistration SET password='$new_password' WHERE email='$email'";
		$run_update=mysqli_query($conn,$update_pass);
		echo "<script>alert('Your Password is Updated Successfully!')</script>";
		echo "<script>window.open('admin_login.php','_self')</script>";
	}
}
?>
<!------------------------------footer------------------------------------------->
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


