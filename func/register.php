<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$matric = $_POST["matric"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];

	// Check if username and email already exist in users table
	$select_user = "SELECT * FROM users WHERE matric='$matric' || phone='$phone' || email='$email'";
	$query_user = mysqli_query($con, $select_user);
	if (mysqli_num_rows($query_user) != 0) {
		$_SESSION["alert"] = "Matric number of Phone number or Email already exists";
		header("location: register");
		exit;
	}

	// Confirm if password match
	if ($password !== $confirm_password) {
		$_SESSION["alert"] = "Passwords doesn't match";
		header("location: register");
	} else {
		// Insert user in database
		$insert_user = "INSERT INTO users (firstname, lastname, email, phone, matric, password) VALUES ('$firstname', '$lastname', '$email', '$phone', '$matric', '$password')";
		if (mysqli_query($con, $insert_user)) {
			$_SESSION["alert"] = "Registeration Successful";
			header("location: login");
		} else {
			$_SESSION["alert"] = "An error occured during registeration";
			header("location: register");
		}
	}
	exit;
}
