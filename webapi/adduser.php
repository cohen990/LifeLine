<?php 
	$db = mysqli_connect("localhost", "tester", "tester", "dresp");

	$phone_id = $db->escape_string($_GET['phone_id']);
	$full_name = $db->escape_string(str_replace("_", " ", $_GET['full_name']));
	$dob = $db->escape_string($_GET['dob']);
	$gender = $db->escape_string($_GET['gender']);

	echo $type;
	if(isset($type)){
		$type = $db->escape_string($_GET['type']);
		$db->query("INSERT INTO users (phone_id,name,dob,gender, type) 
			VALUES ('$phone_id','$full_name','$dob','$gender', 'responder')");
	}
	else{
		$db->query("INSERT INTO users (phone_id,name,dob,gender, type) 
			VALUES ('$phone_id','$full_name','$dob','$gender', 'civilian')");
	}
?>