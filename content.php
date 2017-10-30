<?php  
	// halaman ini berisi halaman artikel
	$id = @$_GET["id"];
	$data = array('id_post' => $id);
	$post = $blog->read($post, $data);
	$post = $post->fetch(PDO::FETCH_LAZY);
?>
<div class="post">
	<h1>
		<?=$post->judul?>
	</h1>
	<img src="gambar/<?=$post->gambar?>" alt="">
	<p>
		<?=$post->isi?>
	</p>
</div>

<div class="komentar">
	<h3>Komentar</h3>
	<div class="komennya">
		<?php  
			$cek = array('id_post' => $id);
			$komentar = $blog->read($komen,$cek);
			if ($komentar->rowCount() > 0) {
				while ($r = $komentar->fetch(PDO::FETCH_LAZY)) {
		?>
			<div class="komen">
				<div class="nama">
					<h5><?=$r['nama']?> : </h5>
				</div>
				<div class="isi-komen">
					<p><?=$r['komentar']?></p>
				</div>
			</div>
		<?php
				}//akhir while
			} else {
				echo "<h4 class='belum-ada'>Belum Ada Komentar</h4>";
			}
		?>
	</div>
	<hr>
	<div class="beri-komentar">
		<h4>Berikta Komentar Anda</h4>
		<form action="<?=$url?>?page=komen" method="post">
			<input type="hidden" name="id_post" value="<?=$id?>">
			<input type="text" name="nama" required="" placeholder="Nama">
			<textarea name="komen" placeholder="Berikan Komentar Anda..." cols="30" rows="10"></textarea>
			<div class="tombol">
				<button type="reset">Reset</button>
				<button type="submit" name="klik">Post ! </button>
			</div>
		</form>
	</div>
</div>