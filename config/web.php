<?php  
	date_default_timezone_set("Asia/Jakarta");
	include_once 'master.php';
	// Konfigurasi untuk DataBase
	$db = "mysql";
	$host = "localhost";
	$table = "myBlog";
	$user = "root";
	$pass = "";
	$blog = new tool_mantap($db, $host, $table, $user, $pass);
	$url = "http://localhost/myBlog/";
	// list tabel pada database yang digunakan
	$admin = "admin";
	$post = "posting";
	$komen = "komentar";
?>