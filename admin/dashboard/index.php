<?php  
	include '../../config/web.php';
	session_start();
	if (@$_SESSION["status_login"] != "sudah") {
		header("location: {$url}admin");
	}
	$nama = $_SESSION["user"];
	include '../../view/admin/dashboard.php';
?>