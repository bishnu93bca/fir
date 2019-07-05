<?php
	header('Content-Type: application/json');
	include_once('../config.php');
	$query = mysqli_query($conn,"SELECT incident_type,COUNT(`complain_id`) as total from user_add_complain GROUP BY incident_type");
			
	$data = array();
	foreach ($query as $row) 
	{
		$data[] = $row;
	}
	echo json_encode($data);
?>