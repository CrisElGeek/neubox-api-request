<?php
use Neubox\API\ApiRequest;

$req = new ApiRequest();

try {
	$response = $req->Call('getdomains');
} catch(\Exception $e) {
	die($e->getMessage());
}

header('Content-Type: application/json');

echo $response;
?>
