<?php
require_once "required/session.php";
require_once "required/sql.php";
const PAGE_TITLE = "Login";
include_once "included/head.php";

require_once "func/login.php";
?>
<div class="wrapper">
	<header>
		<h1>Digital SIWES Logbook</h1>
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
							<label>Username</label>
							<input type="text" class="form-control" placeholder="Username" name="username" required />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password" required />
						</div>
						<div class="row">
							<div class="update ml-auto mr-auto">
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