<?php
if ($get_user['role'] == "student") {
} else {
	header("location: home");
	exit;
}
