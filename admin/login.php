<?php  
	$pesan_sukses = null;
	$pesan_error = null;
	if (isset($_POST["klik"])) {
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
		$data = array(
			'username' => $username,
			'password' => $password 
			);
		// proses login
		$login = $blog->read($admin, $data);

		if ($login->rowCount() > 0) {
			$data = $login->fetch(PDO::FETCH_LAZY);
			$_SESSION["status_login"] = "sudah";
			$_SESSION["user"] = $data['nama'];
			$_SESSION["id"]   = $data["id"];
			header("location: {$url}admin/dashboard");
		} else {
			$pesan_error .= "Username / Password Salah";
		}
	}
	include '../view/admin/form_login.php';
?>