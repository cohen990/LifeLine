<?php 
	$db = mysqli_connect("localhost", "tester", "tester", "dresp");

	$phone_id = $db->escape_string($_GET['phone_id']);
	$pos_x = $db->escape_string($_GET['pos_x']);
	$pos_y = $db->escape_string($_GET['pos_y']);
	$floor = $db->escape_string($_GET['floor']);
	$timestamp = time();

	$db->query("INSERT INTO positions (phone_id,pos_x,pos_y,floor,timestamp) VALUES ('$phone_id','$pos_x','$pos_y','$floor','$timestamp')");
?>