<?php 
	require_once 'config.php';
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	header('Location: login.php');
	exit();
?>