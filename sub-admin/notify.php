<?php
	include_once("../config.php");
	if (isset($_POST['data'])) 
	{
		$complain_id = $_POST['data'];
		$id = $complain_id['id'];
		$query = mysqli_query($conn,"UPDATE `user_complain_notification` SET `read_n` = 0 where complain_id = '$id'");
	}
?>
<?php
	include_once("../config.php");
	if (isset($_POST['data'])) 
	{
		$report_id = $_POST['data'];
		$id = $report_id['id'];
		$query = mysqli_query($conn,"UPDATE `subadmin_receive_notification` SET `read_n` = 0 where report_id = '$id'");
	}
?>