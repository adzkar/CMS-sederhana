<?php  
	session_start();
	include_once '../config/web.php';
	//cek session apakah sudah login atau blum
	if (@$_SESSION["status_login"] == "sudah") {
		header("location: {$url}admin/dashboard");
	} else {
		include 'login.php';
	}
?>