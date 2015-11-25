<?php 
	$db = mysqli_connect("localhost", "tester", "tester", "dresp");

	$result = $db->query("SELECT p.phone_id, p.pos_x, p.pos_y, p.floor, p.timestamp, u.type, u.name, u.dob, u.gender FROM positions AS p
	LEFT JOIN users AS u ON p.phone_id=u.phone_id
	ORDER BY timestamp DESC");

	$results = array();
	while($row = $result->fetch_assoc()){
		$time_elapsed = time() - $row["timestamp"];
		$saturation = round(min($time_elapsed, 120)/120 * 100);
		$row["saturation"] = $saturation;
		

		if(!array_key_exists($row["phone_id"], $results)){
			$results[$row["phone_id"]] = $row;
		}
	}
	
	asort($results);

	echo json_encode(array_values($results));
?>
