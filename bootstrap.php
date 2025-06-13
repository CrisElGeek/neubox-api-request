<?php
require __DIR__ . '/config.php';

if($_GET['q'] == 'neubox-api-test') {
	$action = trim(strip_tags($_GET['a']));
	$actions = ['get-domains', 'search-domains'];
	if(in_array($action, $actions)) {
		global $env;
		$env = parse_ini_file(__DIR__ . '/.env');

		require __DIR__ . '/libs/api_call.php';

		include __DIR__ . '/get_domain_results.php';
	
		$req = new NeuboxPetitions();
		switch($action) {
			case 'get-domains':
				$response = $req->getDomains();
				break;
			case 'search-domains':
				$postData = [
					'domain' => 'cosasinteresantes.mx',
					'tlds' => ['com', 'mx', 'com.mx', 'it', 'me']
				];
				$response = $req->searchDomains($postData);
				break;
			default:
				http_response_code(404);
				break;
		}
		
		echo $response;
	} else {
		http_response_code(404);
	}
} else {
	http_response_code(404);
}
?>
