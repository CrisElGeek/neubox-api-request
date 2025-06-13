<?php
if($_GET['q'] == 'neubox-api-test') {
	global $env;
	$env = parse_ini_file(__DIR__ . '/.env');

	require __DIR__ . '/libs/api_call.php';

	include __DIR__ . '/get_domain_results.php';
} else {
	echo "Hello Word!";
}
?>
