<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style/sbsms.css">
</head>
<body>
<!---------------------------------create navbar------------------------------->	
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
						</ul>
				</div>
				</nav>
		</div>
	</div>
</div>
<!--------------------- Send message form-------------------->
<div class="containetr">
	<div class="row">
	    <div class="col-md-6">
	    	<form action="" method="post">
	    		<div class="form-group">
	    			<label>Mobile No:</label>
	    			<input type="number" name="mno" class="form-control" placeholder="Mobile No">
			    </div>
			    <div class="form-group">
			    	<label>Message:</label>
			    	<textarea class="form-control" name="msg" placeholder="Enter message"></textarea>
			    </div>
			    	<div class="form-group">
			    	<input type="submit" class="btn btn-primary" name="submit" value="Send">
			    </div>	
	    	</form>
	</div>
</div>
</div>
<!-----------------------------send message php code--------------------------->
<?php
	include_once("../config.php");
	if(isset($_POST['submit']))
	{
		$mobile_no=$_POST['mno'];
		$msg=$_POST['msg'];
		////sending sms
		$apiKey = urlencode('LSFq1GgaGEM-w99l4LdcFP27CUJxqicUfckCWjGI9D');
		// Message details
		$numbers = urlencode($_POST['mno']);
		$sender = urlencode('Amir');
		$message = rawurlencode('This is your message');
		// Prepare data for POST request
		echo $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
		

		// Send the GET request with cURL
		$ch = curl_init('https://api.txtlocal.com/send/?' . $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		// Process your response here
		echo $response;
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