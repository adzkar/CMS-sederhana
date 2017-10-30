<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dasboard</title>
	<link rel="stylesheet" href="../../asset/css/fonts.css">
	<link rel="stylesheet" href="../../asset/css/font-awesome.css">
	<link rel="stylesheet" href="../../asset/css/style.css">
	<link rel="stylesheet" href="../../asset/css/dashboard.css">
	<link rel="stylesheet" href="../../asset/css/tabel.css">
</head>
<body>
	<div class="halaman">
		<div class="isinya">
			<div class="kiri">
				<div class="profil">
					<div class="lingkaran">
						
					</div>
					<h4>
						Hi <?=$nama?> !
					</h4>
				</div>
				<div class="menu">
					<ul>
						<li><a href="?page=home">Home</a></li>
						<li><a href="?page=post">List Post</a></li>
						<li><a href="?page=posting">Post Sesuatu</a></li>
						<li><a href="?page=komentar">Komentar</a></li>
						<li><a href="?page=keluar">Logout</a></li>
					</ul>
				</div>
			</div>
			<div class="kontenya">
				<div class="kotak">
					<?php  
						// akan berubah-ubah menyesuaikan get nya
						include 'isi.php';
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>