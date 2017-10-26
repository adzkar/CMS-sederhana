<?php  
	$id = $_GET["id"];
	$hapus = $blog->delete($post, "id_post", $id);
	header("location: {$url}admin/dashboard/?page=post");
?>