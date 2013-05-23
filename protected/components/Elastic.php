<?php
class Elastic extends CApplicationComponent {
	public $index;
  public $type;
	public $host;
	public $port = 9200;
	private $http_request;

	public function init() {
		$this->http_request = new HttpRequest($this->host, $this->port);
	}

	public static function buildMapping($attributes_mapping) {
		$mapping = array();
		foreach($attributes_mapping as $key => $value) {
			if(is_array($value))
				$mapping[$key] = array('properties' => self::buildMapping($value));
			elseif($value == 'string' || $value == 'array') // TBD check if 'array' is correct here
				$mapping[$key] = array('type'=>'string'); // TBD add optional support for untouched
			else
				$mapping[$key] = array('type'=>$value);
		}
		return $mapping;
	}

  protected static function check($response) {
		if(empty($response)) throw new Exception("No response from server");

		if(preg_match('/{"error":"([^"]*)"/',$response,$match)) 
			throw new Exception($match[1]);
	}

	public static function is_associative ($arr) { $a = array_keys($arr); return ($a != array_keys($a)); }

	public static function mapData($mapping, $doc) {
		$casted_data = array();
		foreach ($mapping as $key => $type) {
			if (!isset($doc[$key]) || empty($doc[$key]) ) continue;
			if (is_array($type)) {
				if(self::is_associative($doc[$key])) {
					$value = self::mapData($type, $doc[$key]);
				} else {
					$value = array();
					foreach($doc[$key] as $inner_value) {
						$value [] = self::mapData($type, $inner_value);
					}
				}
			} elseif ($type == 'date') {
				if(isset($doc[$key]->sec)) {
					$value = date('c', $doc[$key]->sec);
				} elseif(isset($doc[$key]['sec'])) {
					$value = date('c', $doc[$key]['sec']);
				}else {
					$value = $doc[$key];
				}
				$type = 'string';
			} elseif ($type == 'array') {
				$value = $doc[$key];
				$type = 'string';
			} else {
				$value = $doc[$key];
			}

			if(!is_array($doc[$key]) && !is_array($type))
				setType($doc[$key], $type);
			$casted_data[$key] = $value;
		}

		return $casted_data;
	}

	public function delete($type) {
		$response = $this->http_request->delete("/{$this->index}/$type");
    self::check($response);
	}

	public function create($type) {
		$request = '{"settings":{"number_of_shards":5,"number_of_replicas":1}}';
		$response = $this->http_request->put("/{$this->index}/$type", $request);
    self::check($response);
	}

	public function map($type, $mapping) {
		$mapping_data = array($type=>array('properties'=>self::buildMapping($mapping)));
		$response = $this->http_request->put("/{$this->index}/{$type}/_mapping", json_encode($mapping_data));
    self::check($response);
	}

	public function search($type, $term) {
		$query = '{"query":{"text":{"_all":"TERM"}}}';
		$request = str_replace('TERM', $term, $query);
		$response = $this->http_request->post("/{$this->index}/{$type}/_search", $request);
    self::check($response);
		return $response;
	}

  public function import($type, $docs) {
    $bulk = '';
		foreach($docs as $doc) {
      $id = $doc['_id'];
      unset($doc['_id']);
			$bulk .= "{\"index\":{\"_id\":\"{$id}\"}}" . PHP_EOL . json_encode($doc) . PHP_EOL;
		}
		$response = $this->http_request->put("/{$this->index}/{$type}/_bulk", $bulk);
    self::check($response);
	}
}
