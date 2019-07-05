
<!DOCTYPE html>
<html>
<head>

    <title>Online FIR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/sbfir.css">
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
<!------------------------------FIR  Form------------------------->
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8" id="form">
            <strong><b class="fir">Online FIR</b></strong>
            <form action="" method="post">
                <div class="form-group">
                    <label>Serial No.</label>
                    <input type="text" name="serial_no" class="form-control text" placeholder="">
                </div>
                <div class="form-group">
                    <label>Form No.</label>
                    <input type="text" name="form_no" class="form-control text" placeholder="">
                </div>
                <div class="form-group">
                    <label>Police Station Name:</label>
                    <input type="text" name="police_station" class="form-control text" placeholder=""required="">
                </div>
                <div class="form-group">
                    <label>E-tag No.</label>
                    <input type="text" name="e_tag_no" class="form-control text" placeholder="" required="">
                </div>
                <div class="form-group">
                    <label>Complain Date&Time(Reference):</label>
                    <input type="Date" name="complain_date" class="form-control text" placeholder="" required="">
                </div>
                <div class="form-group">
                    <label>Police Reached Time&date(after Fir):</label>
                    <input type="Date" name="police_date" class="form-control text" placeholder="" required="">
                </div>
                <div class="form-group">
                    <label>Complainer Detail:</label><br>
                    <textarea name="complainer_detail" class="form-control" rows="6" placeholder="Enter Detail" required=""></textarea>
                </div>
                <div class="form-group">
                    <label>Crime Condition & affance:</label>
                    <textarea name="crime_condition" class="form-control" rows="6" placeholder="" required=""></textarea>
                </div>
                <div class="form-group">
                    <label>Police Station distance From Incident Place:</label>
                    <textarea name="police_station_distance" class="form-control" rows="6" placeholder="Enter distance" required=""></textarea>
                </div>
                <div class="form-group">
                    <label>Reason if Delay Investigation:</label>
                    <textarea name="delay_reason" class="form-control" rows="6" placeholder="Enter Reason" required=""></textarea>
                </div>
                <div class="form-group">
                    <label>Duty Officer.</label>
                    <input type="text" name="officer_name" class="form-control text" placeholder="Username">
                </div>
                <div class="form-group">
                    <label>Belt No.</label>
                    <input type="number" name="belt_no" class="form-control text" placeholder="">
                </div>
                <div class="form-group">
                    <label>Designation</label>
                    <select class="form-control text" name="designation" required="">
                        <option value="ASI">ASI</option>
                        <option value="Sub_Inspactor">Sub_Inspactor</option>
                        <option value="HC">HC</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>FIR Detail.</label>
                    <textarea name="fir_detail" class="form-control" rows="6" placeholder="FIR Detail" required=""></textarea>
                </div>
                <div class="form-group">
                    <label>Sign.</label>
                    <input type="Number" name="sign" class="form-control text" placeholder="">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="register">
                    <input type="reset" name="reset" class="btn btn-danger" value="reset">
                </div>
        </div>
        </form>
    </div>
</div>
</div>
<!---------------------------------------FIR php code----------------------------->

<?php
include_once("../config.php");
if(isset($_POST['submit']))
 {   
    $serial_no = mysqli_real_escape_string($conn, $_POST['serial_no']);
    $form_no = mysqli_real_escape_string($conn, $_POST['form_no']);
    $police_station = mysqli_real_escape_string($conn, $_POST['police_station']);
    $e_tag_no = mysqli_real_escape_string($conn, $_POST['e_tag_no']);
    $complain_date = mysqli_real_escape_string($conn, $_POST['complain_date']);
    $police_date = mysqli_real_escape_string($conn, $_POST['police_date']);
    $complainer_detail = mysqli_real_escape_string($conn, $_POST['complainer_detail']);
    $crime_condition = mysqli_real_escape_string($conn, $_POST['crime_condition']);
    $police_station_distance = mysqli_real_escape_string($conn, $_POST['police_station_distance']);
    $delay_reason = mysqli_real_escape_string($conn, $_POST['delay_reason']);
    $officer_name = mysqli_real_escape_string($conn, $_POST['officer_name']);
    $belt_no = mysqli_real_escape_string($conn, $_POST['belt_no']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $fir_detail = mysqli_real_escape_string($conn, $_POST['fir_detail']);
    $sign = mysqli_real_escape_string($conn, $_POST['sign']);     
        //insert data to database   
        $sql = "INSERT INTO `sbadmin_add_fir`(`serial_no`,`form_no`,`police_station`,`e_tag_no`,`complain_date`,`police_date`,`complainer_detail`,`crime_condition`,`police_station_distance`,`delay_reason`,`officer_name`,`belt_no`,`designation`,`fir_detail`,`sign`) VALUES ('$serial_no','$form_no','$police_station','$e_tag_no','$complain_date','$police_date','$complainer_detail','$crime_condition','$police_station_distance','$delay_reason','$officer_name','$belt_no','$designation','$fir_detail','$sign')";
        if (!mysqli_query($conn,$sql)) 
        {
          die('Error: ' . mysqli_error($conn));
        }
        else
        {
            echo "<script>alert('FIR Registered successfully.')</script>";
            echo "<script>window.open('admin_panel.html?logged_in=You have successfully Logged in!','_self')</script>";
            //echo "<font color='green'> You are Register successfully.";
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