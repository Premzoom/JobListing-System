<?php
//Start session
session_start();

//Config fil
require_once 'config.php';

//Include helpers
require_once 'helpers/system_helper.php';

// Autoloader
function __autoload($class_name){
	require_once 'lib/'.$class_name.'.php';
}

