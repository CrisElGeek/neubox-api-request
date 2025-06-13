<?php
namespace Neubox\API;

class ApiRequest {
	function __construct() {
		global $env;
		$this->url = $env['API_HOST'];
		$this->headers = [
			'Accept: application/json',
			'Content-Type: application/json',
			'neubox-api-key: ' . $env['API_KEY'],
			'neubox-api-secret: ' . $env['API_SECRET'],
			'User-Agent: ' . $env['API_USER_AGENT'],
			'neubox-user-email: ' . base64_encode($env['NEUBOX_USER_EMAIL']),
		];
		$this->postfields = json_encode([
			'email' => base64_encode($env['NEUBOX_USER_EMAIL'])
		]);
	}

	public function Call($action = 'getdomains', $additional_fields = NULL) {
		$url = $this->url . $action;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $this->postfields);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		$response = curl_exec($ch);
		if (curl_errno($ch)) {
			$error_msg = curl_error($ch);
			throw new \Exception($error_msg);
		}
		curl_close($ch);
		return $response;
	}
}
?>
