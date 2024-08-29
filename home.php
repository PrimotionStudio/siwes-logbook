<?php
require_once "required/session.php";
require_once "required/sql.php";
require_once "required/validate.php";
const PAGE_TITLE = "Home - Digital Logbook System";
require_once "func/edit-user.php";
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
							<h5 class="card-title">Your Details</h5>
						</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?= $get_user["firstname"] ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?= $get_user["lastname"] ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="<?= ($get_user["role"] === 'student') ? "col-md-4" : "col-md-6" ?>">
										<div class="form-group">
											<label>Email address</label>
											<input type="email" name="email" class="form-control" placeholder="Email" value="<?= $get_user["email"] ?>">
										</div>
									</div>
									<?php
									if ($get_user["role"] === 'student') :
										$select_student = "SELECT * FROM students WHERE user_id='$user_id'";
										$query_student = mysqli_query($con, $select_student);
										if (mysqli_num_rows($query_student) !== 0) :
											$get_student = mysqli_fetch_assoc($query_student);
									?>
											<div class="col-md-4">
												<div class="form-group">
													<label>Matric Number</label>
													<input type="text" class="form-control" name="matric" placeholder="DE:xxxx/****" value="<?= $get_student["matric"] ?>">
												</div>
											</div>
									<?php
										endif;
									endif;
									?>
									<div class="<?= ($get_user["role"] === 'student') ? "col-md-4" : "col-md-6" ?>">
										<div class="form-group">
											<label>Phone Number</label>
											<input type="tel" class="form-control" name="phone" placeholder="Phone Number" value="<?= $get_user["phone"] ?>">
										</div>
									</div>
								</div>
								<?php
								if ($get_user["role"] === 'student') :
									$select_student = "SELECT * FROM students WHERE user_id='$user_id'";
									$query_student = mysqli_query($con, $select_student);
									if (mysqli_num_rows($query_student) !== 0) :
										$get_student = mysqli_fetch_assoc($query_student);
								?>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Faculty</label>
													<?php
													$select_faculty = "SELECT * FROM faculty WHERE id='" . $get_student["faculty"] . "' ORDER BY id DESC";
													$query_faculty = mysqli_query($con, $select_faculty);
													if (mysqli_num_rows($query_faculty) != 0) :
														$get_faculty = mysqli_fetch_assoc($query_faculty)
													?>
														<input type="text" class="form-control" name="faculty" disabled="" value="<?= ucfirst($get_faculty["name"]) ?>">
													<?php
													endif;
													?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Department</label>
													<?php
													$select_department = "SELECT * FROM departments WHERE id='" . $get_student["department"] . "' ORDER BY id DESC";
													$query_department = mysqli_query($con, $select_department);
													if (mysqli_num_rows($query_department) != 0) :
														$get_department = mysqli_fetch_assoc($query_department)
													?>
														<input type="text" class="form-control" name="department" disabled="" value="<?= ucfirst($get_department["name"]) ?>">
													<?php
													endif;
													?>
												</div>
											</div>
										</div>
								<?php
									endif;
								endif;
								?>
								<?php
								if ($get_user["role"] === 'lecturer') :
									$select_lecturer = "SELECT * FROM lecturers WHERE user_id='$user_id'";
									$query_lecturer = mysqli_query($con, $select_lecturer);
									if (mysqli_num_rows($query_lecturer) !== 0) :
										$get_lecturer = mysqli_fetch_assoc($query_lecturer);
								?>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Faculty</label>
													<?php
													$select_faculty = "SELECT * FROM faculty WHERE id='" . $get_lecturer["faculty"] . "' ORDER BY id DESC";
													$query_faculty = mysqli_query($con, $select_faculty);
													if (mysqli_num_rows($query_faculty) != 0) :
														$get_faculty = mysqli_fetch_assoc($query_faculty)
													?>
														<input type="text" class="form-control" name="faculty" disabled="" value="<?= ucfirst($get_faculty["name"]) ?>">
													<?php
													endif;
													?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Department</label>
													<?php
													$select_department = "SELECT * FROM departments WHERE id='" . $get_lecturer["department"] . "' ORDER BY id DESC";
													$query_department = mysqli_query($con, $select_department);
													if (mysqli_num_rows($query_department) != 0) :
														$get_department = mysqli_fetch_assoc($query_department)
													?>
														<input type="text" class="form-control" name="department" disabled="" value="<?= ucfirst($get_department["name"]) ?>">
													<?php
													endif;
													?>
												</div>
											</div>
										</div>
								<?php
									endif;
								endif;
								?>
								<div class="row">
									<?php
									if ($get_user["role"] === 'supervisor') :
										$select_supervisor = "SELECT * FROM supervisors WHERE user_id='$user_id'";
										$query_supervisor = mysqli_query($con, $select_supervisor);
										if (mysqli_num_rows($query_supervisor) !== 0) :
											$get_supervisor = mysqli_fetch_assoc($query_supervisor);
											$company_id = $get_supervisor["company_id"];
									?>
											<div class="col-md-6">
												<div class="form-group">
													<label>Company</label>
													<?php
													$select_company = "SELECT * FROM company WHERE id='$company_id'";
													$query_company = mysqli_query($con, $select_company);
													while ($get_company = mysqli_fetch_assoc($query_company)) :
													?>
														<input type="text" class="form-control" name="comapany" disabled="" value="<?= ucfirst($get_company["name"]) ?>">
													<?php
													endwhile;
													?>
												</div>
											</div>
									<?php
										endif;
									endif;
									?>
									<?php
									if ($get_user["role"] === 'student') :
										$select_student = "SELECT * FROM students WHERE user_id='$user_id'";
										$query_student = mysqli_query($con, $select_student);
										if (mysqli_num_rows($query_student) !== 0) :
											$get_student = mysqli_fetch_assoc($query_student);
											$company_id = $get_student["company_id"];
									?>
											<div class="col-md-6">
												<div class="form-group">
													<label>Company</label>
													<?php
													$select_company = "SELECT * FROM company WHERE id='$company_id'";
													$query_company = mysqli_query($con, $select_company);
													while ($get_company = mysqli_fetch_assoc($query_company)) :
													?>
														<input type="text" class="form-control" name="comapany" disabled="" value="<?= ucfirst($get_company["name"]) ?>">
													<?php
													endwhile;
													?>
												</div>
											</div>
									<?php
										endif;
									endif;
									?>
									<div class="col-md-6">
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