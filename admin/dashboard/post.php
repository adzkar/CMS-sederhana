<?php  
	$data = $blog->read($post);
?>
<div class="tabel">
	<h1>List Postingan</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Penulis</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				if ($data->rowCount() > 0) {
					echo "Hello World !";
				} else {
					echo "<tr>";
					echo "<td colspan='4'>";
					echo "Anda Belum Memposting apapun";
					echo "</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</div>