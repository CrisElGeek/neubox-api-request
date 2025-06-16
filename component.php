<?php
namespace Neubox\Component;

use Neubox\API\ApiRequest;

class NeuboxPetitions extends ApiRequest {
	private $req;
	function __construct() {
		$this->req = new ApiRequest();
	}
	
	public function getDomains() {
		$response = $this->req->Call('getdomains');
		return $response;
	}
	
	public function searchDomains(Array $postData) {
		if($postData['domain'] && is_array($postData['tlds']) && count($postData['tlds']) > 0) {
			$response = $this->req->Call('searchdomains', $postData);
			return $response;
		} else {
			throw new \Exception('Missing data', 400);
		}
	}
}
?>
