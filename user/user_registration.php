
<!DOCTYPE html>
<html>
<head>
	<title>Resgistration</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style/ureg.css">
	
		
</head>
<body>
	<!----------------------------------creation navbar-------------------------------------->
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
					    <li><a href="user_signin.php">Sign In</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;">Login<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../admin/admin_login.php">Admin</a></li>
						<li><a href="../sub-admin/subadmin_login.php">Sub Admin</a></li>
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
<!------------------------------creation Form------------------------->
<br>
<div class="container">
<div class="row">
	<div class="col-md-8" id="form">
		<strong><b class="registration">User Registration </b></strong>
		<form id="reg_form" action="" method="post">
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="username" class="form-control text" placeholder="Username" id="form_uname" required="">
				<span class="error_form" id="uname_error_message" style="color: red; font-weight: bold; font-size: 20px;"></span>
			</div>
			<div class="form-group">
			    <label>Father Name:</label>
				<input type="text" name="fname" class="form-control text" placeholder="Father Name" id="form_fname" required="">
				<span class="error_form" id="fname_error_message" style="color: red; font-weight: bold; font-size: 20px;"></span>
			</div>
			<div class="form-group">
				<label>CNIC Number:</label>
				<input type="Number" name="cnic" class="form-control text" placeholder="Enter CNIC" id="form_CNIC" required="">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control text" placeholder="Enter Password"  id="form_password" required="">
				<span class="error_form" id="pass_error_message" style="color: red; font-weight: bold; font-size: 20px;"></span>
			</div>
			<div class="form-group">
			<label>Confirm Password:</label>
		<input type="password" name="confirm_password" class="form-control text" placeholder="Confirm Password" id="form_conpassword">
			<span class="error_form" id="conpass_error_message" style="color: red; font-weight: bold; font-size: 20px;"></span>
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="email"  name="email" class="form-control text" placeholder="Me@example.com" id="form_email" required="">
				<span class="error_form" id="email_error_message" style="color: red; font-weight: bold; font-size: 20px;"></span>
			</div>
			<div class="form-group">
				<label>Mobile No:</label>
				<input type="Number" name="mobile_no" class="form-control text" placeholder="Enter Mobile Number" id="form_mobile" required="">
				<span class="error_form" id="mobile_error_message"></span>
			</div>
			<div class="form-group">
				<label>Date Of Birth(mm/dd/yyyy):</label>
				<input type="date" name="date_of_birth" class="form-control text" placeholder="" required="">
			</div>
			<div class="form-group">
				<label>Select Gender:</label><br>
				<input type="radio" name="gender" value="Male" required=""><b>Male</b>
				<input type="radio" name="gender" value="Female" required=""><b>Female</b>
			</div>
			<div class="form-group">
				<label>City:</label>
				<select class="form-control text" name="city" required="" >
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
				<input type="submit" name="submit" class="btn btn-primary" value="Register">
				<input type="reset" name="reset" class="btn btn-danger" value="Reset">
			</div>	
			</div>
		</form>
	</div>
</div> 
 </div>
 <!------------------------------validation----------------------------------------->
<script type="text/javascript">
	$(function()
	{
		$("#uname_error_message").hide();
		$("#fname_error_message").hide();
		$("#pass_error_message").hide();
		$("#conpass_error_message").hide();
		$("#email_error_message").hide();
		$("#mobile_error_message").hide();
		var error_uname=false;
		var error_fname=false;
		var error_password=false;
		var error_conpass=false;
		var error_email=false;
		var error_mobile=false;
		/////////////////username condition//////////////////
		$("#form_uname").focusout(function()
		{
			check_uname();
		});
		$("#form_fname").focusout(function()
		{
			check_fname();
		});
		$("#form_password").focusout(function()
		{
			check_pasword();
		});
		$("#form_conpassword").focusout(function()
		{
			check_conpass();
		});
		$("#form_email").focusout(function()
		{
			check_email();
		});
		$("#form_mobile").focusout(function()
		{
			check_umobile();
		});
		function check_uname()
		{
			var pattern= /^[a-zA-Z]*$/;
			var uname=$("#form_uname").val();
			 if (pattern.test(uname) && uname !== '')
			 {
			 	$("#uname_error_message").hide();
			 	$("#form_uname").css("border-bottom","2px solid #34F458");	
			 }
			 else
			 {
			 	$("#uname_error_message").html("**only characters are allowed");
			 	$("#uname_error_message").show();
			 	$("#form_uname").css("border-bottom","2px solid #F90A0A");
			 	error_uname=true;	
			 }
		}
		function check_fname()
		{
			var pattern= /^[a-zA-Z]*$/;
			var fname=$("#form_fname").val();
			 if (pattern.test(fname) && fname !== '')
			 {
			 	$("#fname_error_message").hide();
			 	$("#form_fname").css("border-bottom","2px solid #34F458");	
			 }
			 else
			 {
			 	$("#fname_error_message").html("**only characters are allowed");
			 	$("#fname_error_message").show();
			 	$("#form_fname").css("border-bottom","2px solid #F90A0A");
			 	error_fname=true;	
			 }
		}
		function check_password()
		{
			var password_length=$("#form_password").val().length;
			if(password_length < 5)
			{
				$("#pass_error_message").html("atleast 5 characters");
				$("#pass_error_message").show();
				$("#form_password").css("border-bottom","2px solid #34F458");
				error_password=true;
			}
			else
			{
				$("#pass_error_message").hide();
				$("#form_password").css("border-bottom","2px solid #F90A0A");
			}
		}
		function check_conpass()
		{
			var password=$("#form_password").val();
			var conpass=$("#form_conpassword").val();
			if (password!==conpass)
			{
				$("#conpass_error_message").html("password did not match");
				$("#conpass_error_message").show();
				$("#form_conpassword").css("border-bottom","2px solid #F90A0A");
				error_conpass=true;
			}
			else
			{
				$("#conpass_error_message").hide();
				$("#form_conpassword").css("border-bottom","2px solid #34F458");
			}
		}
		function check_email()
		{
			var pattern= /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var email =$("#form_email").val();
			if(pattern.test(email) && email !=='')
			{
				$("#email_error_message").hide();
				$("#form_email").css("border-bottom","2px solid #34F458");
			}
			else
			{
				$("#email_error_message").html("invalid Email");
				$("#email_error_message").show();
				$("#form_email").css("border-bottom","2px solid #F90A0A");
				error_email=true;
			}
		}
		 function check_umobile()
		 {

		 	var pattern= pattern.replace(/[^0-9]/g,'');
		 	 var mobile=$("#form_mobile").val();
		 	 if (phone =='' || !phone.match(/^0[0-9]{9}$/))
		 	 {
		 	 	$("#mobile_error_message").hide();
		 	 	$("#form_mobile").css("border-bottom","2px solid #34F458");	
		 	 }
		 	 else
		 	 {
		 	 	$("#mobile_error_message").html("**only numbers are allowed");
		 	 	$("#mobile_error_message").show();
		 	 	$("#form_mobile").css("border-bottom","2px solid #F90A0A");
		 	 	error_mobile=true;	
		 	 }
		 }
		$("#reg_form").submit(function()
		{
			error_uname=false;
			error_password=false;
			error_conpass=false;
			error_email=false;
			error_mobile=false;

			check_uname();
			check_password();
			check_conpass();
			check_email();
			//check_umobile();
			if (error_uname===false && error_fname===false && error_password===false && error_conpass===false && error_email=== false && error_mobile===false)
			{
				//alert("registration successfull");
				return true;
			}
			else
			{
				alert("please fill  the form correctly");
				return false;
			}
		});

	});	
</script>
<!--------------------------------------registration Php code------------------->
<?php
include_once('../config.php');
if(isset($_POST['submit'])) {	 
//stor the values in variables
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$cnic = mysqli_real_escape_string($conn, $_POST['cnic']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
	$date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);	
	///check if already registered
	$q="SELECT * FROM user_registration WHERE username='$username' or email ='$email'";
	$result=mysqli_query($conn,$q);
	$userExist=mysqli_num_rows($result);
	if($userExist>0){
            echo "<script>alert('You are already Registered.')</script>";
            echo "<script>window.open('user_registration.php','_self')</script>";
        }		
		//insert data to database	
		$sql = "INSERT INTO `user_registration`(`username`,`fname`,`cnic`,`password`,`email`,`mobile_no`,`date_of_birth`,`gender`,`city`,`address`) VALUES ('$username','$fname','$cnic','$password','$email','$mobile_no','$date_of_birth','$gender','$city','$address')";
		
		if (!mysqli_query($conn,$sql)) {
		  die('Error: ' . mysqli_error($conn));
		}else{
			echo "<script>alert('You are Register successfully.')</script>";
			echo "<script>window.open('user_signin.php','_self')</script>";
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