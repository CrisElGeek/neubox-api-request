<?php
use Neubox\API\ApiRequest;

class NeuboxPetitions extends ApiRequest {
	private $req;
	function __construct() {
		$this->req = new ApiRequest();
	}
	
	public function getDomains() {
		try {
			$response = $this->req->Call('getdomains');
		} catch(\Exception $e) {
			die($e->getMessage());
		}
		header('Content-Type: application/json');
		return $response;
	}
	
	public function searchDomains(Array $postData) {
		try {
			$response = $this->req->Call('searchdomains', $postData);
		} catch(\Exception $e) {
			die($e->getMessage());
		}
		header('Content-Type: application/json');
		echo $response;
	}
}
?>
