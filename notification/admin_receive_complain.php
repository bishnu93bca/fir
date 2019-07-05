<!DOCTYPE html>
<html>
<head>
	<title>Received Complaint</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  
	<link rel="stylesheet" type="text/css" href="style/adrcomplain.css">
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
						</ul>
				</div>
				</nav>
		</div>
	</div>
</div>
<!---------------------------------------set image----------------->
<div class="col-md-12">
<div class="row" style="background: url(../images/centerpic.jpg)no-repeat center;background-size: cover;border: none;height: 300px;">
	<div class="col-md-12" style="background-color: rgba(0,0,0,0.6);
	height: inherit;">

<!--------------------------------set Heading------------------------>
<div class="col-md-8 col-md-push-2  mid-heading" style="text-align:center">
		<h2 style="color:#fff;font-family: monospace;"> Welcome To Online First Information Reporting System</h2>
	</div>
	</div>
</div>
</div>
<!----------------------------------Receive Complaint Data------------------>
	<br>
<?php
include_once("config.php");
$sql="SELECT * FROM user_note where read_n = 1";
$result=mysqli_query($conn,$sql);
?>
<div class="">
    <div class="table-responsive-vertical">
    <table class="table table-bordered table-striped table-hover table-mc-light-blue">
    	<h1>User Complain</h1>
    <thead>
    	<tr>
				<th>user Name</th>
				<th>Father Name</th>
				<th>CNIC</th>
				<th>password</th>
			    <th>email</th>
			    <th>mobile_no</th>
			    <th>date_of_birth</th>
			    <th>gender</th>
			    <th>city</th>
			    <th>address</th>
			    <th>action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
				  while($row=mysqli_fetch_array($result))
				  {
				  	$ids = $row['id'];
				  	
		?>
      				<tr>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['fname'];?></td>
						<td><?php echo $row['cnic'];?></td>
						<td><?php echo $row['password'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['mobile_no'];?></td>
						<td><?php echo $row['date_of_birth'];?></td>
						<td><?php echo $row['gender'];?></td>
						<td><?php echo $row['city'];?></td>
						<td><?php echo $row['address'];?></td>
            			<td>
            				<a class="btn btn-success btn-sm view-btn" data-id="<?php echo $ids;?>">View</a></td>
            		</tr>
            		<?php
				  }
?>
	</tbody>
</table>
</div>
</div>                    
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
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</html>