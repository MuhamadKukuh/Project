<?php include 'koneksi1.php';
	  include 'edit.php';
	  	// Ini Untuk Upload
		$nama  = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$gambar= $_POST['gambar'];

	 	
		$test =mysqli_query($koneksi,"INSERT INTO kelas (`kelas`, `nama`, `gambar`) VALUES ('$kelas', '$nama', '$gambar')");

		// if($test){
		// 	echo "oke";
		// }else
		// echo "not oke";

		header("Location: tampilan.php");

 ?>