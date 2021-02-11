<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>docker-sample/nginx-proxy-frontend-backend/frontend</title>
	</head>
	<body>
		<h1>hello world</h1>
		<p>docker-sample/nginx-proxy-frontend-backend/frontend</p>
		<hr>
		<h2>cURL</h2>
		<a href="http://api.docker.sample/">backend &gt;&gt;</a><br>
		<br>
		<?php

require './../vendor/autoload.php';

$client = new \GuzzleHttp\Client();
// $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
$response = $client->request('GET', 'http://docker_sample_api/');

echo $response->getStatusCode(); // 200
echo '<br>';
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo '<br>';
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

		?>
	</body>
</html>
