<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 ">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/latihan php/latihan.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Hasil Jadi</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
	<div class="container pb-3" style="background-color: #ecd0d0;">
		<?php 
	$asem 	=$_POST['apa'];
	$bau 	=$_POST['kelas'];

	$apa 	=$_POST['asem'];
	$lili  	=$_POST['bau'];
	$dimana =$_POST['cacing'];
	$hasil 	=$apa + $lili + $dimana;
	$ganjil =$hasil % 2;
	$rata 	=$hasil / 3;

	$kelas	=$_POST['kelas'];


	echo "Nama Kamu adalah = $asem <br>";

	foreach ($kelas as $key => $value) {
		echo "Kelas = $value <br>";
	}

	echo "Nilai Pertama = $apa <br>";
	echo "Nilai Kedua 	= $lili <br>";
	echo "Nilai Ketiga 	= $dimana <br>";
	echo "Total Nilai 	: $hasil <br>";

	// if ($hasil = 0) {
	// 	echo "Hasilnya adalah bilangan genap <br>";
	// }else{
	// 	echo "Hasilnya adalah bilangan ganjil <br>";
	// }

	if ($hasil /2 == 0) {
		echo "Angka Genap <br>";
		
	}else{
		echo "Angka Ganjil <br>";
	}

	echo "Nilai Rata Rata Kamu adalah = $rata <br>";

	if ($hasil/ 3 > 75) {
		echo "Selamat Anda Lulus";
	}else {
		echo "Maaf Anda Tidak Lulus";
	}



 ?>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
<!-- <?php 
	$asem 	=$_POST['apa'];
	$bau 	=$_POST['kelas'];

	$apa 	=$_POST['asem'];
	$lili  	=$_POST['bau'];
	$dimana =$_POST['cacing'];
	$hasil 	=$apa + $lili + $dimana;
	$ganjil =$hasil % 2;
	$rata 	=$hasil / 3;

	$kelas	=$_POST['kelas'];


	echo "Nama Kamu adalah = $asem <br>";

	foreach ($kelas as $key => $value) {
		echo "Kelas = $value <br>";
	}

	echo "Nilai Pertama = $apa <br>";
	echo "Nilai Kedua 	= $lili <br>";
	echo "Nilai Ketiga 	= $dimana <br>";
	echo "Total Nilai 	: $hasil <br>";

	// if ($hasil = 0) {
	// 	echo "Hasilnya adalah bilangan genap <br>";
	// }else{
	// 	echo "Hasilnya adalah bilangan ganjil <br>";
	// }

	if ($ganjil == 0) {
		echo "Angka Genap <br>";	
	}else{
		echo "Angka Ganjil <br>";
	}

	echo "Nilai Rata Rata Kamu adalah = $rata <br>";

	if ($rata > 75) {
		echo "Selamat Anda Lulus";
	}else {
		echo "Maaf Anda Tidak Lulus";
	}



 ?> -->