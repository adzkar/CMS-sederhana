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
				<th style="text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				if ($data->rowCount() > 0) {
					$no = 1;
					while ($r = $data->fetch(PDO::FETCH_LAZY)) {
						echo "<tr>";
						echo "<td>";
						echo $no;
						echo "</td>";
						echo "<td>".$r['judul']."</td>";
						$a = array('id' => $_SESSION["id"]);
						$a = $blog->read($admin, $a);
						$a = $a->fetch(PDO::FETCH_LAZY);
						echo "<td>".$a['nama']."</td>";
						echo "<td class='edit-delete'>";
						echo "<a href='?page=edit&id=$r[id_post]'>Edit</a>";
						echo "<a href='?page=hapus&id=$r[id_post]'>Delete</a>";
						echo "</td>";
						echo "</tr>";
						$no++;
					}
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