<?php  
	// Index home file
	include 'config/web.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LoremIpsum Dolor Sit Amet</title>
	<link rel="stylesheet" href="asset/css/fonts.css">
	<link rel="stylesheet" href="asset/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/css/font-awesome.css">
	<link rel="stylesheet" href="asset/css/style.css">
	<link rel="stylesheet" href="asset/css/home.css">
</head>
<body>
	<div class="menu-atas">
		<div class="container">
			<div class="menu kiri">
				<ul>
					<li class="hover"><a href="<?=$url?>">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Donate</a></li>
				</ul>
			</div><!-- menu kiri -->
			<div class="menu kanan">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div><!-- menu kanan -->
		</div><!-- container -->
	</div><!-- menu atas -->

	<div class="header">
		<div class="container">
			<div class="bagian-atas">
				<div class="logo">
					<a href="#">
						<h1>myBlog</h1>
					</a>
				</div>
				<!-- logo -->
				<div class="ads">
					ADS
				</div>
				<!-- ads -->
			</div><!-- bagian-atas -->
			<div class="bagian-bawah menu">
				<ul>
					<li><a href="<?=$url?>">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Donate</a></li>
				</ul>
			</div><!-- bagian-bawah -->
		</div><!-- container -->
	</div><!-- header -->


	<div class="tubuh">
		<div class="container">
			<?php  
				include 'isi.php';
			?>
		</div>
		<!-- container -->
	</div>
	<!-- tubuh -->


	<div class="footer">
		<div class="container">
			<div class="widget">
				<div class="header">
					<h2>Lorem Ipsum</h2>
				</div>
				<div class="isi">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.</p>
				</div>
			</div>
			<!-- widget -->

						<div class="widget">
				<div class="header">
					<h2>Lorem Ipsum</h2>
				</div>
				<div class="isi">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.</p>
				</div>
			</div>
			<!-- widget -->

			<div class="widget">
				<div class="header">
					<h2>Lorem Ipsum</h2>
				</div>
				<div class="isi">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.</p>
				</div>
			</div>
			<!-- widget -->

		</div><!-- container -->

		<div class="copy">
			<p>
				&copy Made with <i class="fa fa-heart" style="color: #c0392b"></i> by Adzkar Fauzie R | October 2017
			</p>
		</div>
	</div><!-- footer -->

</body>
</html>