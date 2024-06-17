<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];

	// Check if username and email already exist in users table
	$select_user = "SELECT * FROM users WHERE username='$username'";
	$query_user = mysqli_query($con, $select_user);
	if (mysqli_num_rows($query_user) == 0) {
		$_SESSION["alert"] = "This username is not linked to an account";
		header("location: login");
		exit;
	}
	$get_user = mysqli_fetch_assoc($query_user);
	// Check if password is correct
	if ($get_user["password"] == $password) {
		$loginkey = password_hash(time(), PASSWORD_BCRYPT);
		$login_user = "UPDATE users SET loginkey='$loginkey'
						WHERE username='$username'";
		$query_login = mysqli_query($con, $login_user);
		$_SESSION["loginkey"] = $loginkey;
		$_SESSION["user_id"] = $get_user["id"];
		header("location: index");
	} else {
		$_SESSION["alert"] = "Incorrect login credentials";
		header("location: login");
	}
	exit;
}
