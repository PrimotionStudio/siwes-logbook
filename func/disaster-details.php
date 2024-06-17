<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$affected = $_POST["affected"];
	$damages = $_POST["damages"];
	$response = $_POST["response"];
	$casualties = $_POST["casualties"];

	$update_disaster = "UPDATE disasters SET affected='$affected', damages='$damages', response='$response', casualties='$casualties' WHERE id='$id'";
	if (mysqli_query($con, $update_disaster)) {
		$_SESSION["alert"] = "Disaster Updated";
		header("location: disasters");
	} else {
		$_SESSION["alert"] = "Error while updating disaster";
		header("location: disaster-details?id=$id");
	}
	exit;
}