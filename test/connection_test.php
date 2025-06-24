<?php
$env = parse_ini_file(__DIR__ . '/../.env');
require __DIR__ . '/../Neubox.php';

$conf = [
	'settings' => [
		'apikey' => $env['API_KEY'],
		'privatekey' => $env['API_SECRET'],
		'useragent' => $env['API_USER_AGENT'],
		'neuboxuseremail' => $env['NEUBOX_USER_EMAIL'],
		'apiurl' => $env['API_HOST']
	]
];

$module = new Neubox();

try {
	$resp = $module->testConnection($conf);
} catch(\Exception $e) {
	echo $e->getMessage();
}
echo json_encode($resp);
?>
