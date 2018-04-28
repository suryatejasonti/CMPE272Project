<?php
	$db = new mysqli("setmeo.cywrugau8fzt.us-west-1.rds.amazonaws.com", "root", "welcome123", "setmeondb");
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$query = "select firstname, lastname, email from se_customer";
	$res = $db->query($query);

	echo json_encode(mysqli_fetch_all($res));
?>