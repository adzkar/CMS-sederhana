<?php  
	$id = $_GET["id"];
	$blog->delete($komen, "id_komentar", $id);
	header("location: {$url}admin/dashboard/?page=komentar");
?>