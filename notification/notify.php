<?php
	include_once("config.php");
	if (isset($_POST['data'])) 
	{
		$complain_id = $_POST['data'];
		$id = $complain_id['id'];
		$query = mysqli_query($conn,"UPDATE `user_note` SET read_n = 0 where id = '$id'");
	}
?>