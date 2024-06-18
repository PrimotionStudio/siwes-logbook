<?php
require_once "required/session.php";
require_once "required/sql.php";
require_once "required/validate.php";
const PAGE_TITLE = "Home - Digital Logbook System";
include_once "included/head.php";
?>
<div class="wrapper ">
	<?php
	include_once "included/sidebar.php";
	?>
	<div class="main-panel">
		<?php
		include_once "included/navbar.php";
		?>
		<div class="content">
			<div class="row">
				<div class="col-md-8">
					<div class="card card-user">
						<div class="card-header">
							<h5 class="card-title">Edit Profile</h5>
						</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="row">
									<div class="col-md-6 pr-1">
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?= $get_user["firstname"] ?>">
										</div>
									</div>
									<div class="col-md-6 pl-1">
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?= $get_user["lastname"] ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 pr-1">
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" name="email" class="form-control" placeholder="Email" value="<?= $get_user["email"] ?>">
										</div>
									</div>
									<?php
									?>
									<div class="col-md-4 px-1">
										<div class="form-group">
											<label>Matric Number</label>
											<input type="text" class="form-control" name="matric" placeholder="DE:xxxx/****" value="<?= $get_user["matric"] ?>">
										</div>
									</div>
									<div class="col-md-4 pl-1">
										<div class="form-group">
											<label>Phone Number</label>
											<input type="tel" class="form-control" name="phone" placeholder="Phone Number" value="<?= $get_user["phone"] ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 pr-1">
										<div class="form-group">
											<label>Company</label>
											<input type="text" class="form-control" name="company" disabled="" placeholder="Company" value="Creative Code Inc.">
										</div>
									</div>
									<div class="col-md-6 pl-1">
										<div class="form-group">
											<label>Status</label>
											<input type="text" class="form-control" name="status" disabled="" value="<?= ucfirst($get_user["role"]) ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-primary btn-round">Update Profile</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Change Password</h4>
						</div>
						<div class="card-body">

							<form action="" method="post">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Current Password</label>
											<input type="password" class="form-control" name="old">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>New Password</label>
											<input type="password" class="form-control" name="new"">
										</div>
									</div>
								</div>
								<div class=" row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Confirm Password</label>
											<input type="password" class="form-control" name="confirm">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="update ml-auto mr-auto">
										<button type="submit" class="btn btn-primary btn-round">Update Password</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		include_once "included/footer.php";
		?>
	</div>
</div>

<?php
include_once "included/scripts.php";
?>