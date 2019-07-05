<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style/ustatus.css">
</head>
<body>
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

<!---------------------------------------set image----------------->
<div class="col-md-12">
<div class="row" style="background: url(../images/centerpic.jpg)no-repeat center;background-size: cover;border: none;height: 500px;">
	<div class="col-md-12" style="background-color: rgba(0,0,0,0.6);
	height: inherit;">

<!--------------------------------set Heading------------------------>
<div class="col-md-8 col-md-push-2  mid-heading" style="text-align:center">
		<h2 style="color:#fff;font-family: monospace;"> Welcome To Online First Information Reporting System</h2>
	</div>
	</div>
</div>
</div>

<!--------------------------------user complain status data table----------------------->
	<?php
	include_once("../config.php");
	@$mobile_no=$_POST['mobile_no'];
	$sql="SELECT * FROM subadmin_mark_complain where mobile_no='".$mobile_no."'";
    $result=mysqli_query($conn,$sql);
		      if(mysqli_num_rows($result)>0){
                     ?>
                     <div class="res-table">
                     <h1>Your Complain status</h1>
        		 	    <table border="2px">
			        <tr>
			       <th>complainer name</th>
			       <th>crime_type</th>
			       <th>mobile_no</th>
			       <th>officer_name</th>
			       <th>designation</th>
			       <th>officer_mobile_no</th>
			       <th>complain_status</th> 
			      </tr>
			        <?php 
				  while($row=mysqli_fetch_array($result))
				  {
      				echo "<tr>";
					echo "<td>".$row['username']."</td>";
					echo "<td>".$row['crime_type']."</td>";
					echo "<td>".$row['mobile_no']."</td>";
					echo "<td>".$row['officer_name']."</td>";
					echo "<td>".$row['designation']."</td>";
					echo "<td>".$row['officer_mobile_no']."</td>";
					echo "<td>".$row['complain_status']."</td>";
            		echo "</tr>";
				  }
		       }
	        else
		   {
			echo "<script>alert('Record not found.')</script>";
			echo "<script>window.open('uscomplain.html?logged_in=You have successfully Logged in!','_self')</script>";
    	   }   
?>
 </table>
</body>
</html>