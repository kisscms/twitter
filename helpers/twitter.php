<?php
/* Twitter for KISSCMS */
class Twitter {
	
	private $key;
	private $secret;
	private $token;
	private $api;
	private $me;
	private $oauth;
	private $cache;
	
	function  __construct() {
		
		$this->key = $GLOBALS['config']['twitter']['key'];
	 	$this->secret = $GLOBALS['config']['twitter']['secret'];
		$this->me = ( empty($_SESSION['access']['twitter']['user_id']) ) ? false : $_SESSION['access']['twitter']['user_id'];
	 	$this->token = ( empty($_SESSION['access']['twitter']['access_token']) ) ? false : $_SESSION['access']['twitter']['access_token'];
	 	$this->api = "https://api.twitter.com/1.1/";
		$this->oauth = "https://api.twitter.com/oauth/";
		$this->cache = $this->getCache();
	}
	
	// REST methods
	function  get() {
		
	}
	
	
	function  post() {
		
	}
	
	function  put() {
		
	}
	
	function  delete() {
		
	}
	
	
}

?>