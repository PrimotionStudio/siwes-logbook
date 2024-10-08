<div class="sidebar" data-color="white" data-active-color="danger">
	<div class="logo">
		<a href="javascript:;" class="simple-text logo-mini">
			<div class="logo-image-small">
				<img src="assets/img/logo-small.png">
			</div>
			<!-- <p>CT</p> -->
		</a>
		<a href="javascript:;" class="simple-text logo-normal">
			SIWES Logbook
			<!-- <div class="logo-image-big">
			<img src="assets/img/logo-big.png">
		  </div> -->
		</a>
	</div>
	<div class="sidebar-wrapper">
		<ul class="nav">
			<?php
			if ($get_user["role"] !== null) :
			?>
				<li class="<?php
							$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
							$file_name = end($file_path);
							$route = explode(".", $file_name)[0];
							if ($route === 'home') {
								echo 'active';
							}
							?>">
					<a href="home">
						<i class="nc-icon nc-bank"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<?php
				if ($get_user["role"] === 'student') :
				?>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'log-entry') {
									echo 'active';
								}
								?>">
						<a href="log-entry">
							<i class="nc-icon nc-paper"></i>
							<p>Log Entry</p>
						</a>
					</li>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'logs') {
									echo 'active';
								}
								?>">
						<a href="logs">
							<i class="nc-icon nc-single-copy-04"></i>
							<p>Logs</p>
						</a>
					</li>
				<?php
				endif;
				?>
				<?php
				if ($get_user["role"] === 'supervisor') :
				?>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'students-logs') {
									echo 'active';
								}
								?>">
						<a href="students-logs">
							<i class="nc-icon nc-single-02"></i>
							<p>Students</p>
						</a>
					</li>
				<?php
				endif;
				?>
				<?php
				if ($get_user["role"] === 'lecturer') :
				?>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'students_logs') {
									echo 'active';
								}
								?>">
						<a href="students_logs">
							<i class="nc-icon nc-single-02"></i>
							<p>Students</p>
						</a>
					</li>
				<?php
				endif;
				?>
				<?php
				if ($get_user["role"] === 'admin') :
				?>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'users') {
									echo 'active';
								}
								?>">
						<a href="users">
							<i class="nc-icon nc-single-02"></i>
							<p>Users</p>
						</a>
					</li>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'faculty') {
									echo 'active';
								}
								?>">
						<a href="faculty">
							<i class="nc-icon nc-app"></i>
							<p>Faculty</p>
						</a>
					</li>
					<li class="<?php
								$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
								$file_name = end($file_path);
								$route = explode(".", $file_name)[0];
								if ($route === 'company') {
									echo 'active';
								}
								?>">
						<a href="company">
							<i class="nc-icon nc-world-2"></i>
							<p>Company</p>
						</a>
					</li>
					<!-- <li class="<?php
									$file_path = explode("/", $_SERVER["SCRIPT_NAME"]);
									$file_name = end($file_path);
									$route = explode(".", $file_name)[0];
									if ($route === 'feedbacks') {
										echo 'active';
									}
									?>">
						<a href="feedbacks">
							<i class="nc-icon nc-chat-33"></i>
							<p>Feedbacks</p>
						</a>
					</li> -->
				<?php
				endif;
				?>
			<?php
			endif;
			?>
			<li class="active-pro">
				<a href="logout">
					<i class="nc-icon text-danger nc-button-power"></i>
					<p class="text-danger">Logout</p>
				</a>
			</li>
		</ul>
	</div>
</div>