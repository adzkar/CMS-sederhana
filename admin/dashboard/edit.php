<?php  
	$id = $_GET["id"];
	$data = array(
		'id_post' => $id
		);
	$baca = $blog->read($post, $data);
	$baca = $baca->fetch(PDO::FETCH_LAZY);
	if (isset($_POST["publikasi"])) {
		$judul = $_POST["judul"];
		$isi = $_POST["isi"];
		$nama_gambar = @$_POST["gambar"]["name"];
		$tmp = @$_POST["gambar"]["tmp"];
		$direktori = "../../gambar/".$nama_gambar;
		// jika tanpa gambar
		if (!isset($nama_gambar)) {
			$data = array(
						'judul' => $judul,
						'isi' => $isi,
						'id_penulis' => $_SESSION["id"]
					);
			$update = $blog->update($post, $data, "id_post", $id);
			if ($update) {
				$pesan_sukses = "Telah Terupdate";
			} else {
				$pesan_error = "Gagal Update";
			}
		} else {
			// Dengan gambar
			if (move_uploaded_file($tmp, $direktori)) {
			$data = array(
						'judul' => $judul,
						'isi' => $isi,
						'gambar' => $nama_gambar,
						'id_penulis' => $_SESSION["id"]
					);
			$update = $blog->update($post, $data, "id_post", $id);
			if ($update) {
				$pesan_sukses = "Telah Terposting";
			} else {
				$pesan_error = "Gagal Posting";
			}
		}
		}
	}
	include '../../view/admin/form_edit.php';
?>