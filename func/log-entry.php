<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$datetime = $_POST["datetime"];
	$company_id = $_POST["company_id"];
	$description = $_POST["description"];

	$insert_log = "INSERT INTO logs (user_id, company_id, activity, datetime) VALUES ('$user_id', '$company_id', '$description', '$datetime')";
	if (mysqli_query($con, $insert_log)) {
		$_SESSION["alert"] = "Activity Logged";
		header("location: logs");
	} else {
		$_SESSION["alert"] = "Error while logging activity";
		header("location: log-entry");
	}
	exit;
}
