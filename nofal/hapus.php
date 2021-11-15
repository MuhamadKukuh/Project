<?php 
	include 'koneksi.php';
	
	$id= $_GET['id'];

	$delete = mysqli_query($koneksi,"DELETE FROM `siswa` WHERE id=$id");

	if ($delete) {
		echo "berhasil";
	}else{
		echo "gagal";
	}


 ?>