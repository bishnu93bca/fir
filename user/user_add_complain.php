<!DOCTYPE html>
<html>
<head>
	<title>User Complaint</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style/ucomplaint.css">
  <script>
    function show1(){
        document.getElementById('div1').style.display ='none';
    }
    function show2(){
        document.getElementById('div1').style.display = 'block';
    }
</script>
</head>
<body>
	<!----------------------create navbar--------------------------->
<div class="container-fluid">
		<div class="my-menu">
			<div class="row">
		<h2 class="col-md-2  top-heading" style="text-align: center">Online FIR System</h2>
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
<!-------------------------User Complain Form------------------------------------------------>
<div class="container">
<div class="row">
	<div class="col-md-8" id="form">
		<h4 class="Complaint">Having Any Complaint? Write to Us </h4>
		<form action="" method="post">
			<div class="form-group">
				<label>Date of Incident(e.g mm/dd/yyyy)</label>
				<input type="date" name="incident_date" class="form-control text" placeholder="" required="">
			</div>
			<div class="form-group">
				<label>Incident Time(e.g 10:00AM)</label>
				<input type="time" name="incident_time" class="form-control text" placeholder="incident time" required="">
			</div>
			
			<div class="form-group">
				<label>Place of Incident</label>
				<input type="Place" name="incident_place" class="form-control text" placeholder="Place of Incident" required="">
			</div>
			<div class="form-group">
				<label>Incident Type</label>
				<select class="form-control text" name="incident_type" required="">
					<option value="Cyber Crime">Cyber Crime</option>
					<option value="Murder">Murder</option>
					<option value="Rape">Rape</option>
					<option value="Robbery">Robbery</option>
					<option value="Extortion">Extortion</option>
					<option value="Corruption">Corruption</option>
					<option value="Human Trafficking">Human Trafficking</option>
				</select>
			</div>
			<div class="form-group">
				<label>Detail Of Incident:</label>
				<textarea class="form-control" rows="6" name="incident_detail" placeholder="incident detail" required=""></textarea>
			</div>
			<div class="form-group">
				<label>Incident District</label>
				<select class="form-control text" name="incident_district" required="">
					<option value="lahore">Lahor</option>
					<option value="Islamabad">Islamabad</option>
					<option value="Karachi">Karachi</option>
					<option value="Sahiwal">Sahiwal</option>
					<option value="Multan">Multan</option>
				</select>
			</div>
			<div class="form-group">
				<label>Police Station</label>
				<select class="form-control text" name="police_station" required="">
					<option value="thana kamir">thana Kamir</option>
					<option value="thana dara raheem">thana dara raheem</option>
					<option value="thana ghla mndi">thana ghla mndi </option>
				</select>
			</div>
			<div class="form-group">
				<label>Already Visited Police Station</label><br>
				<input type="radio" name="visit" onclick="show2()" value="Yes" required=""><b>Yes</b>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="visit" onclick="show1()" value="No" required=""><b>No</b>
			</div>
			<div class="form-group" id="div1">
				<label>Visited Detail(Name/Rank of Police Officer Visited)</label>
				<textarea class="form-control" rows="6" name="visit_detail" placeholder="visist detail"></textarea>
			<!--</div>-->
			<!--<div class="form-group">-->
				<label>Visit Time(e.g 10:00AM)</label>
				<input type="time" name="visit_time" class="form-control text" placeholder="">
			<!--</div>-->
			<!--<div class="form-group">-->
				<label>Visit Date</label>
				<input type="date" name="visit_date" class="form-control text" placeholder="">
			<!--</div>-->
			<!--<div class="form-group">-->
			</div>
			<input type="submit" name="submit" class="btn btn-primary" value="Submit">
			<input type="reset" name="reset" class="btn btn-danger" value="Reset">
		</form>
	</div>
</div> 
 </div>
 <!--------------------------------user complain php code----------------------------->
 <?php 

 
 
	include_once("../config.php");
	if(isset($_POST['submit']))
	{
     	$incident_date = mysqli_real_escape_string($conn, $_POST['incident_date']);
     	$incident_time = mysqli_real_escape_string($conn, $_POST['incident_time']);
		$incident_place = mysqli_real_escape_string($conn, $_POST['incident_place']);
		$incident_type = mysqli_real_escape_string($conn, $_POST['incident_type']);
		$incident_detail = mysqli_real_escape_string($conn, $_POST['incident_detail']);
		$incident_district = mysqli_real_escape_string($conn, $_POST['incident_district']);
		$police_station = mysqli_real_escape_string($conn, $_POST['police_station']);
		$visit = mysqli_real_escape_string($conn, $_POST['visit']);
		$visit_detail = mysqli_real_escape_string($conn, $_POST['visit_detail']);
		$visit_time = mysqli_real_escape_string($conn, $_POST['visit_time']);
		$visit_date = mysqli_real_escape_string($conn, $_POST['visit_date']);
		$user_id=$_SESSION['id'];	
		
		//insert data to database	
		$sql1 = "INSERT INTO `user_add_complain`(`incident_date`,`incident_time`,`incident_place`,`incident_type`,`incident_detail`,`incident_district`,`police_station`,`visit`,`visit_detail`,`visit_time`,`visit_date`,`user_id`) VALUES ('$incident_date','$incident_time','$incident_place','$incident_type','$incident_detail','$incident_district','$police_station','$visit','$visit_detail','$visit_time','$visit_date','$user_id')";
		$sql2 = "INSERT INTO `user_complain_notification`(`incident_date`,`incident_time`,`incident_place`,`incident_type`,`incident_detail`,`incident_district`,`police_station`,`visit`,`visit_detail`,`visit_time`,`visit_date`,`user_id`,`read_n`) VALUES ('$incident_date','$incident_time','$incident_place','$incident_type','$incident_detail','$incident_district','$police_station','$visit','$visit_detail','$visit_time','$visit_date','$user_id','1')";

		if (!mysqli_query($conn,$sql1)) {
		  die('Error: ' . mysqli_error($conn));
		}
		else
		{
			//echo "<script>alert('Your Complain is  Registered successfully.')</script>";
			
		}
		if (!mysqli_query($conn,$sql2)) {
		  die('Error: ' . mysqli_error($conn));
		}else{
			echo "<script>alert('You complain is registered successfully.')</script>";
			echo "<script>window.open('user_complain_detail.php','_self')</script>";
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