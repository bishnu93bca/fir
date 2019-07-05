<!DOCTYPE html>
<html>
<head>
	<title>Receive Investigation Report</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/sbrinvestigation.css">
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
<!------------------------------------------receive investigation report data------------------->
<?php
include_once("../config.php");
$sql="SELECT * FROM subadmin_add_investigation JOIN admin_reply_investigation";
$result=mysqli_query($conn,$sql);
?>
<div class="">
    <div class="table-responsive-vertical">
    <table class="table table-bordered table-striped table-hover table-mc-light-blue">
    	<h1>Investigation Report</h1>
    <thead>
    	<tr>
			<th>Complainer Name</th>
            <th>Father Name</th>
            <th>CNIC No</th>
            <th>Crime Type</th>
            <th>Crime Description</th>
            <th>officer Name</th>
            <th>designation</th>
            <th>Investigation Report</th>
            <th>SHO Remarks</th>
            <th>Remarks Description</th>
            <th>SHO Sign</th>
		</tr>
	</thead>
	<tbody>
		<?php 
				  while($row=mysqli_fetch_array($result))
				  {
				  	$ids = $row['report_id'];
      				?>
      				<tr>
            		<td><?php echo $row['c_name'];?></td>
						<td><?php echo $row['f_name'];?></td>
						<td><?php echo $row['cnic'];?></td>
						<td><?php echo $row['crime_type'];?></td>
						<td><?php echo $row['crime_description'];?></td>
						<td><?php echo $row['officer_name'];?></td>
						<td><?php echo $row['designation'];?></td>
						<td><?php echo $row['report'];?></td>
						<td><?php echo $row['remarks'];?></td>
						<td><?php echo $row['remarks_description'];?></td>
						<td><?php echo $row['sign'];?></td>
            			<td>
            				<a href="subadmin_panel.php" class="btn btn-success btn-sm view-btn" data-id="<?php echo $ids;?>">View</a>
            				</td>
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
</html>