<?php 
	include 'koneksi.php';

	$id= $_GET['id'];

	$db= mysqli_query($koneksi, "SELECT * FROM `siswa` WHERE id=$id");

	$baru = mysqli_fetch_assoc($db);

	echo $baru["nama"];
 ?>

