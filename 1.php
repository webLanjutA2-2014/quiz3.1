<h1>Cek Barang</h1>
<form action="" method="post">
	<p>Nama  Pemilik : 
		<input type="text" name="nama"></p>
	<p>No Handphone : 
		<input type="text" name="nohp"></p>
	<p>Deskripsi Barang : 
		<input type="text" name="barang"></p>
	<p>No Loker : 
		<input type="text" name="loker"></p>
	<p>Waktu Penitipan : 
		<input type="text" name="waktuTitip"></p>
	<p><input type="submit" value="Simpan" name="simpan"><input type="submit" value="Reset" name="reset"></p> 
	<a href="utama.php">Kembali</a>
<?php

	require('sambung.php');
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$nohp = $_POST['nohp'];
		$barang = $_POST['barang'];
		$loker = $_POST['loker'];
		$sql = "INSERT INTO pengguna(namaPengguna,noHp, deskripsiBarang, noLoker)
				VALUES('$nama', '$nohp', '$barang','$loker')";

		mysqli_query($con, $sql) or die ('Insert data error '. mysqli_error($con));

		header('location:utama.php');

	}
	
?>
