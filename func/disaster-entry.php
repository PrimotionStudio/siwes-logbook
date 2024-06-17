<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$datetime = $_POST["datetime"];
	$location = $_POST["location"];
	$disaster = $_POST["disaster"];
	$severity = $_POST["severity"];
	$description = $_POST["description"];

	$insert_disaster = "INSERT INTO disasters (event_datetime, location, disaster, severity, description) VALUES ('$datetime', '$location', '$disaster', '$severity', '$description')";
	if (mysqli_query($con, $insert_disaster)) {
		$_SESSION["alert"] = "Disaster Reported";
		header("location: disasters");
	} else {
		$_SESSION["alert"] = "Error while reporting disaster";
		header("location: disaster-entry");
	}
	exit;
}
