function proses(){
	var angka1 = document.getElementById('angka_pertama').value;
	var angka2 = document.getElementById('angka_kedua').value;
	var wadah =	document.getElementById('input_nama').value;
	var hasil = angka1 * angka2;

	document.getElementById('nama_depan').innerHTML= parseInt(angka1) + parseInt(angka2);
	document.getElementById('nama_belakang').innerHTML= hasil;

	// alert("Hasl?");
	
}