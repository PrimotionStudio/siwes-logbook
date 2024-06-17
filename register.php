<?php
require_once "required/session.php";
require_once "required/sql.php";
require_once "func/register.php";

const PAGE_TITLE = "Register";
include_once "included/head.php";
?>
<div class="wrapper">
	<header>
		<h1>Digital SIWES Logbook</h1>
		<h6>in Rivers State University</h6>
	</header>
	<div class="row">
		<div class="col-lg-4 col-md-3"></div>
		<div class="col-lg-4 col-md-6">
			<div class="card card-md card-user border-top">
				<div class="card-header" style="display: flex; align-items: center; justify-content: space-evenly">
					<a href="index"><i class="nc-icon nc-minimal-left text-body small" style="font-size: 1rem"></i></a>
					<h5 class="card-title text-center">By
						<a href="https://theprimotionstudio.wordpress.com">Martins Obomate Okanlawon</a>
					</h5>
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label>Firstname</label>
							<input type="text" class="form-control" placeholder="Firstname" name="firstname" required />
						</div>
						<div class="form-group">
							<label>Lastname</label>
							<input type="text" class="form-control" placeholder="Lastname" name="lastname" required />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" placeholder="Email" name="email" required />
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="tel" class="form-control" placeholder="Phone" name="phone" required />
						</div>
						<div class="form-group">
							<label>Matric Number</label>
							<input type="text" class="form-control" placeholder="Matric Number" name="matric" required />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password" required />
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required />
						</div>
						<div class="row">
							<div class="ml-auto mr-auto">
								<button type="submit" class="btn btn-primary btn-round">
									Register
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<p class="text-center">Already have an account? <a href="login">Login!</a></p>
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