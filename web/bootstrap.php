<?php
use Neubox\Component\NeuboxPetitions;

require __DIR__ . '/config.php';

if($_GET['q'] == 'neubox-api-test') {
	$action = trim(strip_tags($_GET['a']));
	$actions = ['get-domains', 'search-domains'];
	if(in_array($action, $actions)) {
		$env = parse_ini_file(__DIR__ . '/../.env');

		$postData = json_decode(file_get_contents('php://input'), true);

		include __DIR__ . '/../component.php';
	
		$req = new NeuboxPetitions($env);
		switch($action) {
			case 'get-domains':
				header('Content-Type: application/json');
				try {
					$response = $req->getDomains();
				} catch(\Exception $e) {
					http_response_code($e->getCode());
					echo json_encode([
						'message' => $e->getMessage()
					]);
				}
				echo $response;
				break;
			case 'search-domains':
				header('Content-Type: application/json');
				try {
					$response = $req->searchDomains($postData);
				} catch(\Exception $e) {
					http_response_code($e->getCode());
					echo json_encode([
						'message' => $e->getMessage()
					]);
				}
				echo $response;
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
