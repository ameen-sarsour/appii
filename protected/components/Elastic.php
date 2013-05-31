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
			if(isset($value['type']) && is_string($value['type'])) {
				$mapping[$key] = $value;
			} else { // This is an array lets call-self
				$mapping[$key] = array('properties' => self::buildMapping($value));
      }
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
			if (!isset($doc[$key]) || (empty($doc[$key]) && !is_bool($doc[$key]))) continue;
      if(isset($type['type']) && is_string($type['type'])) $type = $type['type']; // Detect the map end point and just consider its type here.
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
    $url = "/{$this->index}/";
    if(isset($type)) $url .= "$type/_mapping";
		$response = $this->http_request->delete($url);
    self::check($response);
	}

	public function createIndex() {
		$request = '{"settings":{"number_of_shards":5,"number_of_replicas":0}}';
		$response = $this->http_request->put("/{$this->index}", $request);
    self::check($response);
	}

	public function map($type, $mapping) {
		$mapping_data = array($type=>array('properties'=>self::buildMapping($mapping)));
		$response = $this->http_request->put("/{$this->index}/{$type}/_mapping", json_encode($mapping_data));
    self::check($response);
	}

	public function search($type, $term , $field='') {
		$query = json_encode(array(
			'query'=>array('text'=>array($field=>$term)),
			'highlight'=>array('pre_tags'=>array('<tag>'), 'post_tags'=>array('</tag>'), 'fields'=>array($field=> new stdClass))
			));
		$response = $this->http_request->post("/{$this->index}/{$type}/_search", $request);
    self::check($response);
		return $response;
	}

  public function import($type, $docs) {
    $bulk = '';
		foreach($docs as $doc) {
      $id = $doc['id'];
      unset($doc['id']);
			$bulk .= "{\"index\":{\"_id\":\"{$id}\"}}" . PHP_EOL . json_encode($doc) . PHP_EOL;
		}
		$response = $this->http_request->put("/{$this->index}/{$type}/_bulk", $bulk);
    self::check($response);
	}
}
