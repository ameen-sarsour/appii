<?php 
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * HttpClient is a simple minimal cUrl-based HTTP client
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 2.0 of the Apache license
 * http://www.apache.org/licenses/LICENSE-2.0.txt
 *
 * @category  Services
 * @package   LiteSolr
 * @author    Muayyad Alsadi <alsadi@gmail.com>
 * @copyright 2013 Muayyad Alsadi
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   GIT: <git_id>
 * @link      http://pear.php.net/package/PackageName
 */


/**
 * Simple HTTP client based on cUrl, it can re-use connections
 * 
 * it support all kinds of custom HTTP methods like PUT, PURGE and DELETE
 * used like this
 * $http=new HttpClient();
 * list($info, $content)=$http->get($url, array($key1=>$value1, $key2=>$value2));
 * list($info, $content)=$http->post($url, array($key1=>$value1, $key2=>$value2));
 *
 * @category  Services
 * @package   LiteSolr
 * @author    Muayyad Alsadi <alsadi@gmail.com>
 * @copyright 2013 Muayyad Alsadi
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PackageName
 */
class HttpClient
{
    protected $opt = array(
        CURLOPT_USERAGENT=>'LiteSolr (cUrl)',
        CURLOPT_HEADER => 0,
        CURLOPT_HTTPHEADER=>array('Expect: '),
        CURLOPT_FRESH_CONNECT => 0,
        CURLOPT_FORBID_REUSE => 0,
        CURLOPT_BINARYTRANSFER => 1,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_TIMEOUT => 600,
    );
    protected $curl=null;

    /**
     * Constructor
     * 
     * @param array $options cUrl options common in all requests
     *
     * @return a new instance
     **/
    public function __construct($options=array())
    {
        $this->curl = curl_init();
        $this->opt = $options + $this->opt;
    }

    /**
     * Destructor
     **/
    public function __destruct()
    {
        if (gettype($this->curl) == 'resource') {
            curl_close($this->curl);
        }
    }

    /**
     * Send a POST requst using cURL
     *
     * @param string $url     to request
     * @param array  $params  values to send
     * @param array  $options for cURL
     *
     * @return array having two elements info and result
     */
    public function post($url, $params = array(), $options = array())
    {
        $options += array(
            CURLOPT_POST => 1,
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => (is_string($params))?
                $params:http_build_query($params),
        ) + $this->opt;
        curl_setopt_array($this->curl, $options);
        if (! $result = curl_exec($this->curl)) {
            return array(array(
                'code'=>'',
                'Content-Type'=>'',
                'curl-Error'=>curl_error($ch)), ''
            );
        }
        $info=array(
          'code' => curl_getinfo($this->curl, CURLINFO_HTTP_CODE),
          'Content-Type' => curl_getinfo($this->curl, CURLINFO_CONTENT_TYPE)
        );
        return array($info, $result);
    }
    
    /**
     * Send a GET requst using cURL
     *
     * @param string $url     to request
     * @param array  $params  values to send
     * @param array  $options for cURL
     *
     * @return array having two elements info and result
     */
    public function get($url, array $params = array(), array $options = array())
    {   
        if ($params) {
            $url.=(strpos($url, '?') === false ? '?' : '')
                .http_build_query($params));
        }
        $options += array(
            CURLOPT_URL => $url,
        ) + $this->opt;
        curl_setopt_array($this->curl, $options);
        if (! $result = curl_exec($this->curl)) {
            return array(array(
                'code'=>'',
                'Content-Type'=>'',
                'curl-Error'=>curl_error($ch)), ''
            );
        }
        $info=array(
          'code' => curl_getinfo($this->curl, CURLINFO_HTTP_CODE),
          'Content-Type' => curl_getinfo($this->curl, CURLINFO_CONTENT_TYPE)
        );
        return array($info, $result);
    }


    /**
     * Send a custom unusual method using cURL (eg. PUT, DELETE, PURGE, ..etc.)
     *
     * @param string $method HTTP method
     * @param array  $args   options like post above
     *
     * @return array having two elements info and result
     */
    public function __call($method,$args)
    {
        $params=array_shift($args);
        if ($params===NULL) $params=array();
        $options=array_shift($args);
        if ($options===NULL) $options=array();
        $options[CURLOPT_CUSTOMREQUEST]=strtoupper($method);
        return $this->post($url, $params, $options);
    }

}


 

