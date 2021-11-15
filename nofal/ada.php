<?php  
	include 'koneksi.php';

	$tampil = mysqli_query($koneksi, "SELECT * FROM `siswa` ");

	// foreach ($tampil as $key ) {
	// 	echo $key["nis"];
	// }
?>

<table>
	<thead>
		<tr>
			<td>NIS</td>
			<td>nama</td>
			<td>kelas</td>
			<td>Aksi</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach($tampil as $key ) : ?>
		<tr>
			<td><?php echo $key["nis"]; ?></td>
			<td><?php echo $key["nama"]; ?></td>
			<td><?php echo $key["kelas"];?>- <?php echo $key["jurusan"]; ?></td>
			<td><a href="hapus.php?id=<?php echo $key["id"]; ?>">Hapus</a>|<a href="edit.php?id=<?php echo $key["id"]; ?>">edit</a></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>