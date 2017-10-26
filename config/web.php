<?php  
	date_default_timezone_set("Asia/Jakarta");
	include_once 'master.php';
	// DB
	$db = "mysql";
	$host = "localhost";
	$table = "myBlog";
	$user = "root";
	$pass = "";
	$blog = new tool_mantap($db, $host, $table, $user, $pass);
	$url = "http://localhost/myBlog/";
	// list tabel
	$admin = "admin";
	$post = "posting";
	$komen = "komentar";
?>