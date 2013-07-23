<?php
/* Twitter for KISSCMS */
class Twitter {

	private $api;
	private $oauth;
	private $config;
	private $creds;
	private $cache;

	function  __construct() {
		// main URL
		$this->api = "https://api.twitter.com/1.1/";

		// load all the necessery subclasses
		$this->oauth = new Twitter_OAuth();

		$this->config = $GLOBALS['config']['twitter'];
		// get/update the creds
		$this->creds = $this->oauth->creds();

	}

	// REST methods
	function  get( $service="", $params=array() ){

		// check cache before....
		//...

		$url = $this->api . $service .".json";

		$results = $this->oauth->request($url, 'GET', $params);

		return json_decode( $results );

	}


	function  post() {

	}

	function  put() {

	}

	function  delete() {

	}

	// Helpers

	function token(){
		return $this->oauth->request("https://api.twitter.com/oauth2/token", "POST", array("grant_type"=>"client_credentials") );
	}
}

?>
