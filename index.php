<?php

	$coordinates = '43.0481,-76.1474';	

	$api_url = 'https://api.darksky.net forecast/6ffd743d3a5218a27ea754d14ba3a846/'.$coordinates;

$forecast = json_decode(file_get_contents($api_url));

echo '<pre>';
print_r(($forecast));
echo '</pre>';


	$temperature_current = round($forecast->currently->temperature);
	$summary_current = $forecast->currently->summary;
?>


<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="utf-8">
		<title>Forecast</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>
	<body>
		<main class="container text-center">
			<h1 class="display-1">Forecast</h1>
			<div class="card p-4" style="margin: 0 auto;max-width: 320px;">
				<h2>Current Forecast</h2>
				<h3 class="display-2"><?php echo $temperature_current; ?>&deg;</h3>
				<p class="lead"><?php echo $summary_current; ?></p>
			</div>
		</main>
	</body>
</html>