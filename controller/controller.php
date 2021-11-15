<?php include 'database.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama     = $_POST['nama'];
	$nis 	  = $_POST['nis'];
	$no_tlp	  = $_POST['no_tlp'];
	$kelas    = $_POST['kelas'];

	$hash	  = password_hash($password, PASSWORD_DEFAULT);

	$data = mysqli_query($koneksi,"INSERT INTO register(`nama`, `username`, `password`, `id_kelas`, `no_tlp`, `nis`) VALUES ('$nama', '$username', '$hash', '$kelas', '$no_tlp', '$nis')");

	if ($data) {
				header("Location: login.php");
				exit;
			}else {
				header("Location: form.php");
			}		
 ?>
