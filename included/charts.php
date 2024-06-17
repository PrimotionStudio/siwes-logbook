<!-- <script src="../assets/js/Chart.js">
</script> -->
<script>
	<?php
	$select_disasters = "SELECT * FROM disasters";
	$query_disasters = mysqli_query($con, $select_disasters);
	$disaster_types = [];
	while ($get_disaster = mysqli_fetch_assoc($query_disasters)) {
		$disaster_types[] = $get_disaster["disaster"];
	}

	$disaster_types = array_unique($disaster_types);
	$disasters = [];
	$occurance = [];
	foreach ($disaster_types as $type) {
		$severity = [];
		$select_disasters = "SELECT * FROM disasters WHERE disaster='$type'";
		$query_disasters = mysqli_query($con, $select_disasters);
		$occurance[] = mysqli_num_rows($query_disasters);
		while ($get_disaster = mysqli_fetch_assoc($query_disasters)) {
			$severity[] = $get_disaster["severity"];
		}
		$disasters[$type] = $severity;
	}
	?>
	const xValues = [<?php
						foreach ($disaster_types as $i => $type) {
							if ($i != 0) {
								echo ", ";
							}
							echo "'";
							echo $type;
							echo "'";
						}
						?>];
	const yValues = [<?php
						foreach ($occurance as $i => $occur) {
							if ($i != 0) {
								echo ", ";
							}
							echo $occur;
						}
						?>];
	const barColors = ['#51cbce', '#6c757d', '#6bd098', '#ef8157', '#fbc658', '#51bcda', '#212529', '#343a40'];
	new Chart("occurance", {
		type: "bar",
		data: {
			labels: xValues,
			datasets: [{
				backgroundColor: barColors,
				data: yValues
			}]
		},
		options: {
			legend: {
				display: false
			},
		}
	});
</script>

<script>
	<?php
	$colors = ['#51cbce', '#6c757d', '#6bd098', '#ef8157', '#fbc658', '#51bcda', '#212529', '#343a40'];
	$col = 0;
	foreach ($disasters as $type => $severity) :
	?>
		var <?= $type ?>Canvas = document.getElementById("<?= $type ?>_chart");

		var dataFirst = {
			data: [<?php
					foreach ($severity as $i => $sever) {
						if ($i != 0) {
							echo ", ";
						}
						echo $sever;
					}
					?>],
			fill: false,
			borderColor: '<?= $colors[$col] ?>',
			backgroundColor: 'transparent',
			pointBorderColor: '<?= $colors[$col] ?>',
			pointRadius: 4,
			pointHoverRadius: 4,
			pointBorderWidth: 8,
		};

		var speedData = {
			labels: [<?php
						$i = 1;
						while ($i <= max($occurance)) {
							if ($i != 1) {
								echo ", ";
							}
							echo $i;
							$i++;
						}
						?>],
			datasets: [dataFirst]
		};

		var chartOptions = {
			legend: {
				display: false,
				position: 'top'
			},
		}
		var lineChart = new Chart(<?= $type ?>Canvas, {
			type: 'line',
			hover: false,
			data: speedData,
			options: chartOptions
		});
	<?php
		$col++;
	endforeach;
	?>
</script>


<script>
	var sever_occur = document.getElementById("sever_occur");

	<?php
	$colors = ['#51cbce', '#6c757d', '#6bd098', '#ef8157', '#fbc658', '#51bcda', '#212529', '#343a40'];
	$col = 0;
	foreach ($disasters as $type => $severity) :
	?>
		var data<?= $type ?> = {
			label: "<?= $type ?>",
			data: [<?php
					foreach ($severity as $i => $sever) {
						if ($i != 0) {
							echo ", ";
						}
						echo $sever;
					}
					?>],
			fill: false,
			borderColor: '<?= $colors[$col] ?>',
			backgroundColor: 'transparent',
			pointBorderColor: '<?= $colors[$col] ?>',
			pointRadius: 4,
			pointHoverRadius: 4,
			pointBorderWidth: 8,
		};
	<?php
		$col++;
	endforeach;
	?>

	var speedData = {
		labels: [<?php
					$i = 1;
					while ($i <= max($occurance)) {
						if ($i != 1) {
							echo ", ";
						}
						echo $i;
						$i++;
					}
					?>],
		datasets: [<?php
					$i = 0;
					foreach ($disasters as $type => $sev) {
						if ($i != 0) {
							echo ", ";
						}
						echo "data" . $type;
						$i++;
					}
					?>]
	};

	var chartOptions = {
		legend: {
			display: true,
			position: 'top'
		},
	}
	var lineChart = new Chart(sever_occur, {
		type: 'line',
		hover: false,
		data: speedData,
		options: chartOptions
	});
</script>