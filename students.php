<?php
require_once "required/session.php";
require_once "required/sql.php";

// Validate a users login
if (isset($_SESSION["loginkey"]) && isset($_SESSION["user_id"])) {
	$user_id = $_SESSION["user_id"];
	$loginkey = $_SESSION["loginkey"];
	$select_user = "SELECT * FROM users WHERE id='$user_id' AND loginkey='$loginkey'";
	$query_user = mysqli_query($con, $select_user);
	if (mysqli_num_rows($query_user) != 0) {
		// Login Validated
		$get_user = mysqli_fetch_assoc($query_user);
	} else {
		$_SESSION["alert"] = "Session expired, please login again";
		header("location: logout");
		exit;
	}
} else {
	$_SESSION["alert"] = "Session expired, please login again";
	header("location: logout");
	exit;
}

const PAGE_TITLE = "Students Information - Digital Logbook System";
include_once "included/head.php";
require_once "required/students.php";
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
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="card card-user">
						<div class="card-header">
							<h5 class="card-title">Update Students Information</h5>
						</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="row">

									<div class="col-md-6 pr-1">
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?= $get_user["firstname"] ?>" readonly>
										</div>
									</div>
									<div class="col-md-6 pl-1">
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?= $get_user["lastname"] ?>" readonly>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 pr-1">
										<div class="form-group">
											<label>Email address</label>
											<input type="email" name="email" class="form-control" placeholder="Email" value="<?= $get_user["email"] ?>" readonly>
										</div>
									</div>
									<?php
									?>
									<div class="col-md-4 px-1">
										<div class="form-group">
											<label>Matric Number</label>
											<input type="text" class="form-control" name="matric" placeholder="DE:xxxx/****">
										</div>
									</div>
									<div class="col-md-4 pl-1">
										<div class="form-group">
											<label>Phone Number</label>
											<input type="tel" class="form-control" name="phone" placeholder="Phone Number" value="<?= $get_user["phone"] ?>" readonly>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 pr-1">
										<div class="form-group">
											<label>Faculty</label>
											<input type="text" class="form-control" name="faculty" placeholder="Faculty">
										</div>
									</div>
									<div class="col-md-6 pl-1">
										<div class="form-group">
											<label>Department</label>
											<input type="text" class="form-control" name="department">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="ml-auto mr-auto">
										<button type="submit" class="btn btn-primary btn-round">Update Information</button>
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