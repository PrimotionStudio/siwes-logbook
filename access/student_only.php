<?php
if (isset($get_user)) {
	if ($get_user['role'] == "student") {
	} else {
		header("location: logout");
		exit;
	}
} else {
	header("location: logout");
	exit;
}
