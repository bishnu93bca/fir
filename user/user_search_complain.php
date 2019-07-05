<!DOCTYPE html>
<html>
<head>
	<title>Search Complaint</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style/uscomplain.css">
</head>
<body>
	<!---------------------------create navbar------------------------->
<div class="container-fluid">
		<div class="my-menu">
			<div class="row">
		<h1 class="col-md-2  top-heading" style="text-align: center">Online FIR System</h1>
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
		<h2 style="color:#fff;font-size: 30px;"> Welcome To Online First Information Reporting System</h2>
	</div>
<!----------------------------------search Complaint------------------>
	<br>
<div class="container">
<div class="row">
	<div class="col-md-6" id="form">
		<center class="search">Complain Status </center>
		<br>
		<form action="search.php" method="post">
			 <div class="form-group">
				<label>Enter Mobile No:</label>
				<input type="number" name="mobile_no" class="form-control text" placeholder="Enter Your Mobile No.">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="Search">
			</div>
			</form>	
</div>
</div>
</div>
<!----------------------------------search complain php code--------------------------->
<?php
	include("../config.php");
	if(isset($_POST['submit']))
	 {	 
		$mobile_no=$_POST['mobile_no'];
		$sql="SELECT * FROM sbadmin_add_cstatus WHERE mobile_no='$mobile_no'";
		$result= mysqli_query($conn,$sql);
		$num=mysqli_fetch_array($result);
		

		if(!isset($num['mobile_no'])){
			$_SESSION['mobile_no']=$num['mobile_no'];
		
			 echo "<script>alert('mobile Number is wrong wrong.')</script>";
			 }
			else
		    {
		     echo "<script>alert('your complain status is below.')</script>";
			echo "<script>window.open('user_complain_status.php?logged_in=You have successfully Logged in!','_self')</script>";
			 
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