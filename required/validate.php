<?php
// Validate a users login
if (isset($_SESSION["loginkey"]) && isset($_SESSION["user_id"])) {
	$user_id = $_SESSION["user_id"];
	$loginkey = $_SESSION["loginkey"];
	$select_user = "SELECT * FROM users WHERE id='$user_id' AND loginkey='$loginkey'";
	$query_user = mysqli_query($con, $select_user);
	if (mysqli_num_rows($query_user) != 0) {
		// Login Validated
	} else {
		$_SESSION["alert"] = "Session expired, please login again";
		header("location: login");
		exit;
	}
} else {
	$_SESSION["alert"] = "Session expired, please login again";
	header("location: login");
	exit;
}