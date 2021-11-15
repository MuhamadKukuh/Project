<?php include 'koneksi1.php';

	$id = $_GET['id'];

	$data = mysqli_query($koneksi, "SELECT * FROM `kelas` WHERE id=$id");
	// echo $edit;
	// echo $id;
	$date = mysqli_fetch_assoc($data);

	// echo $date['nama'];
 ?>



 <form action="ntr.php" method="post" >
 	<?php foreach($data as $ntr) : ?>
 	Nama :<input type="text" name="nama" value="<?php echo $ntr['nama']; ?>">
 	Kelas :<input type="text" name="kelas" value="<?php echo $ntr['kelas']; ?>">
 	Gambar :<input type="text" name="gambar" value="<?php echo $ntr['gambar']; ?>">
 	<button type="submit" name="kirim" value="<?php echo $ntr['id'] ?>">Kirim</button>
 	<?php endforeach ?>
 </form>