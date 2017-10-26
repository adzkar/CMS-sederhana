<?php  
	$publikasi = @$_POST["publikasi"];
	if (isset($publikasi)) {
		$judul = $_POST["judul"];
		$isi   = $_POST["isi"];
		$nama_gambar = $_FILES["gambar"]["name"];
		$tmp = $_FILES["gambar"]["tmp_name"];
		$direktori = "../../gambar/".$nama_gambar;
		

		if (move_uploaded_file($tmp, $direktori)) {
			$data = array(
				'judul' => $judul,
				'gambar' => $nama_gambar,
				'isi' => $isi,
				'id_penulis' => $_SESSION["id"]
			);
			$input = $blog->create($post, $data);
			if ($input) {
				$pesan_sukses = "Telah Terposting";
			} else {
				$pesan_error = "Gagal Posting";
			}
		}

	}
	include '../../view/admin/form_posting.php';
?>