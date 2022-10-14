<?php 
	session_start();

	if (!isset($_SESSION['global_token'])) {
		$_SESSION['global_token'] = md5( uniqid( mt_rand(),true ) );
	}

	$user_agent = getenv("HTTP_USER_PATH");

	if (!defined('BASE_PATH')) {
		if (strpos($user_agent, "Win") !== FALSE) {
			define('BASE_PATH','http://localhost/equipo-7-tm-22-4ta/');
		}elseif (strpos($user_agent, "Mac") !== FALSE) {
			define('BASE_PATH','http://localhost:8888/equipo-7-tm-22-4ta/');
		}
	}
?>