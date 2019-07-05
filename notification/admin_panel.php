<!------------------------------------php code---------------------->
<?php
	include_once('config.php');
    if (isset($_GET['notf']))
    {
      $n_id=$_GET['notf'];
      $conn->query("UPDATE user_note set read_n='0' WHERE id='$n_id'");
      header("location:admin_receive_complain.php");
    }
		$data=$conn->query("SELECT * FROM user_note");
    $new_data=$conn->query("SELECT * FROM user_note WHERE read_n='1'");
    $count=mysqli_num_rows($new_data);
		//$count=mysqli_num_rows($data);	
	 ?>
<!--------------------------------------------------html code------------------>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <link rel="stylesheet" type="text/css" href="style/adpenel.css"/>
</head>
<body>
	<!-------------------------create navbar-------------------------------->
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
<!--------------------admin Panel---------------------------------------->
<a class="mobile" href="">Admin Menu</a>
<div id="container">
	<div class="sidebar">
		<ul id="nav">
		 <div class="dropdown">
		 	<a href="admin_receive_complain.php" class="btn btn-primary dropdown-toggle">
			  Received Complain <?php if ($count >0) {
			    echo "(".$count.")";
			  } ?>
			 <span class=""></span> 
			</a>
  <ul class="dropdown-menu">
  	<?php
  	var_dump($data);
  	foreach ($data as $value) {
  	?>
    <?php
    if ($value['read_n']==1) {

      ?>
      <li class="alert-danger"><a href="?notf=<?php echo $value['id']; ?>"><?php echo $value['username']; ?></a></li>
      <?php
    }else{
    ?>
   
    <li><?php echo $value['fname']; ?></li>
    
    <?php
  }
}
  	?>
  </ul>
</div>
		<li><a href="">Receive Investigation Report</a></li>
		<li><a href="">Add Manager</a></li>
		<li><a href="">Add Investigation Report</a></li>
		<li><a href="">Add FIR </a></li>
		<li><a href="">View FIR</a></li>
		<li><a href="">View Complains</a></li>
		<li><a href="">Add Complains</a></li>
		<li><a href="">Add Missing Person</a></li>
		<li><a href="">Add Most Wanted Criminal </a></li>
		<li><a href="">Change Password</a></li>
		<li><a href="">View Pae chart</a></li>
		<li><a href="">Sign Out</a></li>	
		</ul>
	</div>
	<div class="content">
		<h1>Welcome To Online First Information Reporting System</h1>
		<p>A First Information Report is a  document prepared by Police organization.
 Online FIR is to develop an online crime Reporting and management system which is easily accessible to the public,the  police Department and the administrative department.</p>
		<div id="box">
			<div class="box-top">News</div>
			<div class="box-panel">
			this is a pen this is a chair
			</div>			
		</div>
		<div id="box">
			<div class="box-top">News</div>
			<div class="box-panel">
			this is a pen this is a chair
			</div>			
		</div>
		<div id="box">
			<div class="box-top">News</div>
			<div class="box-panel">
			this is a pen this is a chair
			</div>			
		</div>
	</div>	
<!------------------------------functions-------------------------------->
	<script type="text/javascript">
	$(".mobile").on('click',function(e){
		e.preventDefault();
		$(".sidebar").toggle(100);
	})
	
	function screen_resize() {
    var sheight = parseInt(window.innerHeight);
	var swidth = parseInt(window.innerWidth);
    
    if(swidth <= 700)
    {
        $(".sidebar").hide();
    }
    else
    {
		$(".sidebar").show();
	}

}
$(window).resize(function(e) {
    screen_resize();
});
// call responsive function on default :)
$(document).ready(function(e) {
	screen_resize();
});
	</script>
</div>
</body>
</html>