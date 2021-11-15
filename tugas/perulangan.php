<?php 

for ($i=1; $i < 15 ; $i++) { 
	if($i == 4){
		continue;
	}elseif($i == 7){
		echo "endang dan ujang <br>";
		continue;
	}elseif($i == 9){
		echo "9";
		continue;
	}elseif($i == 10){
		echo "10ujang <br>";
		continue;
	}

	echo $i;
	echo "ujang <br>";
}


$apa = 0;

echo "for ". "<br><br>";
for ($i=0; $i < 10 ; $i++) { 
	echo "wow". "<br>";
}
echo "<br>";

echo "WHILE". "<br><br>";

while ($apa < 10) {
	echo $apa. "<br>";
	$apa++;
}

echo "<br>";

echo "Do while". "<br><br>";


$dajal = 1;
do {
	echo "string <br>";
	$dajal++;
} while ($dajal <= 10);

echo "<br>";

echo "foreach". "<br><br>";

$data = ["wow", "wew", "woo"];

foreach ($data as $key ) {
	echo $key. "<br>";
}

echo "<br>";

echo "foreach db". "<br><br>";

$koneksi = mysqli_connect("localhost", "root", "", "nofal");

$data 	 = mysqli_query($koneksi, "SELECT * FROM siswa");

foreach($data as $key){
	echo $key["nama"]. $key["kelas"]. $key["jurusan"];
}

if (isset($_POST['isi'])) {
	$nama = $_POST['nama'];

	// $isi = mysqli_query($koneksi, "INSERT INTO siswa(`nis`, `nama`, `kelas`, `jurusan`) VALUES ('123', '$nama', 'X', 'RPL')");
}

echo "<br><br>";

if (isset($_POST["login"])) {
	$us 	  = $_POST['username'];
	$pw       = $_POST["password"];

	$username = "ujang123";
	$password = "password";

	if ($us == $username) {

		if ($pw == $password){
			header("Location: login.php");
			exit;
		}else{
			echo "babi";
			exit;
		}
	}else {
		echo "babi";
		exit;
	}
}


?>

<form action="" method="post">
	<input type="text" name="username">
	<input type="password" name="password">
	<button type="submit" name="login">Kirim</button>
</form>