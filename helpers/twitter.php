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
		
		if( $this->creds['access_token'] ) {
			// add access_token
			$params['access_token'] = $this->creds['access_token'];
		} else {
			// add secret
			//$params['access_token'] = $this->creds['access_token'];
		}
		
		$url = $this->api . $service;
		
		$http = new Http();
		$http->setMethod('GET');
		$http->setParams( $params );
		$http->execute( $url );
		
		return ($http->error) ? die($http->error) : json_decode( $http->result);
		
	}
	
	
	function  post() {
		
	}
	
	function  put() {
		
	}
	
	function  delete() {
		
	}
	
	
}

?>