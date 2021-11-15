<?php

	$id= $_GET['id'];

	include 'koneksi1.php';

	echo $id;

	$delete = mysqli_query($koneksi, "DELETE FROM `kelas` WHERE id = $id");

	header("Location: tampilan.php");
 ?>