<?php include 'koneksi1.php';

	$id = $_POST['kirim'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$gambar = $_POST['gambar'];

	// echo $id;


	$ubah = mysqli_query($koneksi, "UPDATE `kelas` SET kelas='$kelas', nama='$nama', gambar='$gambar' WHERE id = $id");

	// if($ubah){
	// 	echo "mantap";
	// }else{
	// 	echo "wow";
	// }
	header("Location: tampilan.php");
 ?>