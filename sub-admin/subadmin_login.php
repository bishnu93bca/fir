<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/sblogin.css">
</head>
<body>
	<!--------------------------creation navbar---------------------->
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
<!------------------------------- Sub Admin Login Form--------------------------------------->
		<div class="jumbotron">
			<div class="mid-heading">
				<center> Sub Admin Login</center>
			</div>
		</div>		
	<div class="container">
		<div class="row">
			<div class="col-md-6" id="form">
				<center><b class="AdminLogin"></b></center>
				<form action="" method="post">
			<div class="form-group">
				<label>User Email:</label>
				<input type="text" name="email" class="form-control text" placeholder="User Email ">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="Password" name="password" class="form-control text" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="Login">
			</div>
				</form>
			</div>
		</div>
	</div>
	<!--------------------------------sbadmin login php code----------------------->
	<?php

include_once("../config.php");
if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="SELECT * FROM admin_add_manger WHERE email='$email' AND password='$password'";
		$result= mysqli_query($conn,$sql);
		$num=mysqli_fetch_array($result);
		if(!isset($num['manager_id']))
		     {
			 echo "<script>alert('user name and password wrong.')</script>";
			 echo "<script>window.open('subadmin_login.php','_self')</script>";
			 }
			else
		    {
		    	$_SESSION['manager_id'] = $num['manager_id'];
		    	$_SESSION['email'] = $num['email']; 
			     echo "<script>alert('You are Login successfully.')</script>";
			     echo "<script>window.open('subadmin_panel.php?logged_in=You have successfully Logged in!','_self')</script>";
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

