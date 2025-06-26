<?php
namespace Neubox\Component;
use Neubox\API\ApiRequest;

require __DIR__ . '/libs/api_call.php';
require_once __DIR__ . '/debug/debug.php';	

class NeuboxPetitions {
	private $req;
	function __construct($data = []) {
		$this->req = new ApiRequest($data);
	}
	
	public function getDomains() {
		$response = $this->req->Call('getdomains');
		return $response;
	}
	
	public function searchDomains(Array $postData) {
		if($postData['domain'] && is_array($postData['tlds']) && count($postData['tlds']) > 0) {
			$response_json = $this->req->Call('searchdomains', $postData);
			$response = json_decode($response_json);
			$result = [];
			foreach($response->datos as $key => $value) {
				$dot_pos = strpos($key, '.');
				$tld = ltrim(substr($key, $dot_pos), '.');
				$result[$tld] = [
					'status' => $value->disponible == true ? 'available' : 'unavailable',
					'premium' => property_exists($value, 'premium') ? $value->premium : '',
					'premium_price' => [
						'amount' => property_exists($value, 'precios') ? $value->precios->MXN->{1}->registro : 0,
						'currency' => 'MXN'
					]
				];
			}
			return $result;
		} else {
			throw new \Exception('Missing data', 400);
		}
	}
}
?>
