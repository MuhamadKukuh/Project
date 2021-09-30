<?php include 'nav.php' ?>
	<div class="pb-3 mt-4" style="background-color: #ecd0d0;">
	<form action="koneksi.php" method="post" class="container pb-3">
		<h5 class="mt-3">Nama :
		<input type="text" name="apa" class="mt-4">
		</h5>
		<h5>
		Kelas : <br>
		<input type="radio" name="kelas[]" value="XI-RPL">XI-RPL <br>
		<input type="radio" name="kelas[]" value="XI-MM1">XI-MM1 <br>
		<input type="radio" name="kelas[]" value="XI-MM2">XI-MM2 <br>
		</h5>
		<h5>Masukan Nilai : <br>
		<input type="number" name="asem" placeholder="" style="width: 50px;">
		<input type="number" name="bau" placeholder="" style="width: 50px;">
		<input type="number" name="cacing" placeholder="" style="width: 50px;">
		</h5>
		<input type="submit" name="e">		
	</form>
	</div>