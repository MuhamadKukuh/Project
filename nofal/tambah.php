<?php 
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$kelas = $_POST['kelas'];
	$nis = $_POST['nis'];

	

	$isi = mysqli_query($koneksi, "INSERT INTO `siswa`(`nis`, `nama`, `kelas`, `jurusan`) VALUES ('$nis', '$nama', '$kelas','$jurusan')");

	if ($isi) {
		echo "berhasil";
	}else{
		echo "gagal";
	}

	// echo $nama;
	// echo $jurusan;
	// echo $kelas;
	// echo $nis;
 ?>