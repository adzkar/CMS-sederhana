<?php  
	$page = @$_GET["page"];
	if ($page == 'keluar') {
		session_destroy();
		header("location: {$url}admin");
	} elseif ($page == 'post') {
		include 'list_post.php';
	} elseif ($page == 'posting') {
		include 'posting.php';
	} elseif ($page == 'edit') {
		include 'edit.php';
	} elseif ($page == 'hapus') {
		include 'hapus.php';
	} elseif ($page == 'komentar') {
		include 'komentar.php';
	} elseif ($page == 'hapus_komentar') {
		include 'hapus_komentar.php';
	} else {
		echo "Hello World";
	}
?>