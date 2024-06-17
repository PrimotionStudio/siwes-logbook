<div class="row">
	<div class="col-12">
		<pre>
            <?php

			$curl = curl_init();

			curl_setopt_array($curl, [
				CURLOPT_URL => "https://real-time-climate-index.p.rapidapi.com/api/climate-data",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 60,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => [
					"x-rapidapi-host: real-time-climate-index.p.rapidapi.com",
					"x-rapidapi-key: 55c7eabb03msh62e6099093e65bfp1a8a59jsn169a58da121a"
				],
			]);

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
				print_r(json_decode($response));
			}
			?></pre>
	</div>
</div>

<!-- Also Try: https://www.fema.gov/api/open/v1/FemaWebDisasterDeclarations -->