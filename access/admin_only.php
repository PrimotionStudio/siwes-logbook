<?php
if ($get_user['role'] == "admin") {
} else {
	$_SESSION["alert"] = "You are not allowed access to this page";
	header("location: home");
	exit;
}
