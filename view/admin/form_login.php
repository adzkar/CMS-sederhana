<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Admin</title>
	<link rel="stylesheet" href="../asset/css/fonts.css">
	<link rel="stylesheet" href="../asset/css/font-awesome.css">
	<link rel="stylesheet" href="../asset/css/style.css">
	<link rel="stylesheet" href="../asset/css/login.css">
</head>
<body>
	<?php  
		if (isset($pesan_error)) {
	?>
		<div class="pesan">
			<h4>
				<?=$pesan_error?>
			</h4>		
		</div>
	<?php
		}
	?>
	<div class="login">
		<div class="judul">
			<h1>Login Form</h1>
		</div>
		<div class="isi">
			<form action="" method="post">
				<div class="formnya">
					<input type="text" name="username" placeholder="Username" autofocus="">
					<input type="password" name="password" placeholder="Password">
				</div>
				<button type="submit" name="klik">Login</button>
			</form>
		</div>
	</div>
</body>
</html>