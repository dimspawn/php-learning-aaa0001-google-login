<?php
	session_start();
	require_once 'GoogleAPI/vendor/autoload.php';
	$gClient = new Google_Client();
	$gClient->setClientId("211798805415-31kgnigup6abariu99l3lqg9424g5509.apps.googleusercontent.com");
	$gClient->setClientSecret("qOd-YQdOL0et7e_4M6OtPMkR");
	$gClient->setApplicationName("Mytestapp Login");
	$gClient->setRedirectUri("http://localhost/googlelogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login email profile");
?>