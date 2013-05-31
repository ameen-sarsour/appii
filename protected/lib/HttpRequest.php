<?php

class HttpRequest {
	private $host;
	private $port;

	public function __construct($_host, $_port) {
		$this->host = $_host;
		$this->port = $_port;
	}

	public function put($sub_url, $data) { return $this->call($sub_url, $data, 'PUT'); }
	public function get($sub_url) { return $this->call($sub_url, null, 'GET'); }
	public function post($sub_url, $data) { return $this->call($sub_url, $data, 'POST'); }
	public function delete($sub_url) { return $this->call($sub_url, null, 'DELETE'); }

	private function call($sub_url, $data, $verb) {
		$length  = mb_strlen($data);
		$headers = "$verb $sub_url HTTP/1.1\r\n".
			"Host: {$this->host}\r\n".
			"Content-Type: application/x-www-form-urlencoded\r\n".
			"Connection: close\r\n".
			"Content-Length: $length\r\n".
			"\r\n$data";

		$fp = fsockopen($this->host, $this->port, $errno, $errstr, 30);
		if (!$fp) {
			throw new Exception ("Error while connecting #$errno $errstr");
		}

		fputs($fp, $headers);
		$result = '';

		while (!feof($fp)) {
			$result .= fgets($fp, 128);
		}

		// TBD : check http response
		$pattern = "/^.*\r\n\r\n/s";
		$result  = preg_replace($pattern, '', $result);
		return $result;
	}
}

