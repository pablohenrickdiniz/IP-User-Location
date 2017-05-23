<?php
require_once('../vendor/autoload.php');
use IPInfo\IPInfo;

// Enable full error reporting
error_reporting(-1);

// Include the class
require_once 'ipinfo.inc.php';

// Get the API key, you could set this anywhere..
require_once 'key.key.php';

// Create a new instance
$ipInfo = new IPInfo(APIKEY);

$userIP = $ipInfo->getIPAddress();

//var_dump($ipInfo->getCity($userIP));
var_dump($ipInfo->getCountry($userIP));