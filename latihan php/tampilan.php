<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<div class="container rounded bg-warning mt-5 pt-3 pb-3">
	<h5> <a href="form.php" class="text-decoration none">Tambah Data</a> </h5>
	<?php include 'koneksi1.php';
		
		// $nama  = $_POST['nama'];
		// $kelas = $_POST['kelas'];
	 	
		// $test =mysqli_query($koneksi,"INSERT INTO kelas (`kelas`, `nama`) VALUES ('$kelas', '$nama')");
		// if($test){
		// 	echo "oke";
		// }else
		// echo "not oke";

		$show =mysqli_query($koneksi, "SELECT * FROM kelas");

		foreach($show as $all){
			echo '<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">NO</th>
				      <th scope="col">Nama</th>
				      <th scope="col">Kelas</th>
				      <th scope="col">Gambar</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">'. $all['id'] .'</th>
				      <td>'. $all['nama'] .'</td>
				      <td>'. $all['kelas'] .'</td>
				      <td>'. $all['id'] .'</td>
				    </tr>
				  </tbody>
				</table>';
		}

	?>
</div>












<?php 

	// var_dump($show);

	// foreach ($show as $key ) {
	// 	echo $key['kelas']. "-";
	// 	echo $key['nama']. '<br>';
	// }

	// foreach ($show as $key){
	// 	echo '<h1 style="color:red">'. $key['kelas']. "-". $key['nama']. '</h1>';
	// }
  ?>