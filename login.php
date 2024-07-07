<?php
require_once "required/session.php";
require_once "required/sql.php";
const PAGE_TITLE = "Login";

require_once "func/login.php";
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
	<div class="wrapper">
		<header>
			<h1>Digital SIWES Logbook</h1>
			<h6>in Rivers State University</h6>
		</header>
		<div class="row">
			<div class="col-lg-4 col-md-3"></div>
			<div class="col-lg-4 col-md-6">
				<div class="card card-md card-user border-top">
				<div class="card-header">
				<!-- <div class="card-header" style="display: flex; align-items: center; justify-content: space-evenly"> -->
						<a href="index"><i class="nc-icon nc-minimal-left text-body small" style="font-size: 1rem"></i></a>
						<!-- <h5 class="card-title text-center">By
							<a href="https://theprimotionstudio.wordpress.com">Martins Obomate Okanlawon</a>
						</h5> -->
					</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" placeholder="Email" name="email" required />
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" placeholder="Password" name="password" required />
							</div>
							<div class="row">
								<div class="ml-auto mr-auto">
									<button type="submit" class="btn btn-primary btn-round">
										Login
									</button>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<p class="text-center">Don't have an account? <a href="register">Register!</a></p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-4"></div>
		</div>
	</div>
	<?php
	include_once "included/scripts.php";
	?>