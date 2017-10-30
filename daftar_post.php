<?php  
	// file untuk list artikel di home
	$read = $blog->read($post);
	$total = $read->rowCount();
	if ($total > 0) {
		while ($r = $read->fetch(PDO::FETCH_LAZY)) {
?>
<div class="list-box">
	<div class="box">
	
		<div class="img">
			<a href="?page=halaman&id=<?=$r['id_post']?>">
				<img src="gambar/<?=$r['gambar']?>" alt="<?=$r['judul']?>">	
			</a>
		</div>
		<div class="tubuh">
			<div class="judul">
				<a href="?page=halaman&id=<?=$r['id_post']?>">
					<h2><?=$r['judul']?></h2>
				</a>
			</div>
			<div class="isi">
				<?php  
					$p = $r['isi'];
					$p = substr($p, 0, 100);
				?>
				<p><?=$p?></p>
			</div>
			<div class="readmore">
				<p><a href="?page=halaman&id=<?=$r['id_post']?>">Read More</a></p>
			</div>
		</div>
	</div>
</div>
<?php
		}//akhir while
	} else {
		echo "<div class='belum-ada'>";
		echo "<p>:(</p>";
		echo "<h2>Belum ada post tersedia...</h2>";
		echo "</div>";
	}
?>