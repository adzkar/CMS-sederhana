<div class="tabel">
	<?php  
		if (isset($pesan_sukses)) {
			echo "<h4>$pesan_sukses</h4>";
		} else if (isset($pesan_error)) {
			echo "<h4><$pesan_error/h4>";
		}
	?>
	<h1>Tulis Artikel !</h1>
	<table>
		<form action="" method="post" enctype="multipart/form-data">
		<!-- awal form -->
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td>
				<input type="text" name="judul" autofocus="" placeholder="Judul">
			</td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td>:</td>
			<td>
				<input type="file" name="gambar">
			</td>
		</tr>
		<tr>
			<td>Isi</td>
			<td>:</td>
			<td>
				<textarea name="isi" cols="30" rows="10"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<button type="reset">Reset</button>
			</td>
			<td></td>
			<td>
				<button type="submit" name="publikasi">Post !</button>
			</td>
		</tr>
		<!-- akhir form -->
		</form>
	</table>
</div>