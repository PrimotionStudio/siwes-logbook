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
				<li>
					<a href="home">
						<i class="nc-icon nc-bank"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<?php
				if ($get_user["role"] === 'student') :
				?>
					<li>
						<a href="log-entry">
							<i class="nc-icon nc-paper"></i>
							<p>Log Entry</p>
						</a>
					</li>
					<li>
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
					<li>
						<a href="students-logs">
							<i class="nc-icon nc-single-02"></i>
							<p>Students</p>
						</a>
					</li>
				<?php
				endif;
				?>
				<li>
					<a href="analysis">
						<i class="nc-icon nc-chart-bar-32"></i>
						<p>Analysis</p>
					</a>
				</li>
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