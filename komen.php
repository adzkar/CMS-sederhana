<?php  
	$nama = $_POST["nama"];
	$komen = $_POST["komen"];
	$id_post = $_POST["id_post"];
	// echo $nama.' '.$komen.' '.$id_post;
	$data = array(
				'nama' => $nama,
				'komentar' => $komen,
				'id_post' =>  $id_post
				);
	$berkomentar = $blog->create("komentar", $data);
	// var_dump($berkomentar);
	if ($berkomentar) {
		echo "Sukses";
	} else {
		echo "Gagal";
	}
	// header("location: {$url}?page=halaman&id=$id_post");
?>