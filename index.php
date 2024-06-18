<?php
require_once "required/session.php";
const PAGE_TITLE = "Digital SIWES Logbook";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?= PAGE_TITLE ?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="demo-icons">
	<header>
		<h1>Digital SIWES Logbook</h1>
		<p>
			By
			<a href="https://theprimotionstudio.wordpress.com">Martins Obomate Okanlawon</a>
		</p>
	</header>
	<div id="icons-wrapper">
		<section>
			<ul>
				<li>
					<i class="nc-icon nc-single-copy-04"></i>
				</li>
				<li>
					<i class="nc-icon nc-bullet-list-67"></i>
				</li>
				<li>
					<i class="nc-icon nc-check-2"></i>
				</li>
				<li>
					<i class="nc-icon nc-chart-bar-32"></i>
				</li>
				<li>
					<i class="nc-icon nc-hat-3"></i>
				</li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li>
					<button type="submit" class="btn btn-info btn-round">
						<a style="color: #f0f0f0" href="login">Login</a>
					</button>
					<button type="submit" class="btn btn-info btn-round">
						<a style="color: #f0f0f0" href="register">Register</a>
					</button>
				</li>
				<li></li>
				<li></li>
			</ul>
		</section>
	</div>
	<?php
	include_once "included/scripts.php";
	?>