<?php


//===============================================
// Configuration
//===============================================

if( class_exists('Config') && method_exists(new Config(),'register')){ 

	// Register variables
	Config::register("twitter", "key", "0000000");
	Config::register("twitter", "secret", "AAAAAAAAA");

}

?>