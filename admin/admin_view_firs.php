<!DOCTYPE html>
<html>
<head>
	<title>View FIRs</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/adviewfir.css">
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

<!-------------------------All FIRs Data-------->
<?php
include_once("../config.php");
$q="select * from subadmin_add_fir";
$result=mysqli_query($conn,$q);

?>
             <div class="table-responsive-vertical">
             <table class="table table-bordered table-striped table-hover table-mc-light-blue">
                <h1>FIR</h1>
                <thead>
                <tr>
                    <th>FIR ID</th>
                    <th>Serial No</th>
                    <th>Form No</th>
                    <th>Police Station</th>
                    <th>E-Tag No</th>
                    <th>Complain Date</th>
                    <th>Police Date</th>
                    <th>Complainer Detail</th>
                    <th>Crime Condition</th>
                    <th>Police_station Distance</th>
                    <th>Delay Reason</th>
                    <th>Officer Name</th>
                    <th>Belt No</th>
                    <th>Designation</th>
                    <th>FIR Detail</th>
                    <th>Sign</th>
<!--                    <th>Visit Ti</th>-->
                </tr>
                </thead>
                <tbody>
                <?php
                while ($row=mysqli_fetch_array($result)){
                ?>
                
                <tr>
                    <td data-title="FIR ID"><?php echo $row['fir_id'] ?></td>
                    <td data-title="Serial No"><?php echo $row['serial_no'] ?></td>
                    <td data-title="Form No"><?php echo $row['form_no'] ?></td>
                    <td data-title="Police Station"><?php echo $row['police_station'] ?></td>
                    <td data-title="E-Tag No"><?php echo $row['e_tag_no'] ?></td>
                    <td data-title="Complain Date"><?php echo $row['complain_date'] ?></td>
                    <td data-title="Police_Date"><?php echo $row['police_date'] ?></td>
                    <td data-title="Complainer Detail"><?php echo $row['complainer_detail'] ?></td>
                    <td data-title="Crime Condition"><?php echo $row['crime_condition'] ?></td>
                    <td data-title="Police_station Distance"><?php echo $row['police_station_distance'] ?></td>
                    <td data-title="Delay Reason"><?php echo $row['delay_reason'] ?></td>
                    <td data-title="Officer Name"><?php echo $row['officer_name'] ?></td>
                    <td data-title="Belt No"><?php echo $row['belt_no'] ?></td>
                    <td data-title="Designation"><?php echo $row['designation'] ?></td>
                    <td data-title="FIR Detail"><?php echo $row['fir_detail'] ?></td>
                    <td data-title="Sign"><?php echo $row['sign'] ?></td>
<!--                    <td>--><?php //echo $row['status'] ?><!--</td>-->

                </tr>
                
                <?php } ?>
                </tbody>
            </table>
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