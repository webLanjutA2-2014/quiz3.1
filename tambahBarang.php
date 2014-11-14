<h1>Form Penitipan Barang</h1>
<form action="" method="post">
	<p>No Penitipan : 
		<input type="text" name="id"></p>
	<p>Nama  Penitip : 
		<input type="text" name="namaPengguna"></p>
	<p>No Handphone : 
		<input type="text" name="noHp"></p>
	<p>Deskripsi Barang : 
		<input type="text" name="deskripsi"></p>
	<p>No Loker : 
		<input type="text" name="loker"></p>
	
	<p><input type="submit" value="Simpan" name="simpan"><input type="submit" value="Reset" name="reset"></p> 

<?php

	require('sambung.php');
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$noTitip = $_POST['id'];
		$nama = $_POST['namaPengguna'];
		$nohp = $_POST['noHp'];
		$barang = $_POST['deskripsi'];
		$loker = $_POST['loker'];
		$wakt = $_POST['waktu'];
		$wakt = 'now()';

		$sql = "INSERT INTO transaksi(id,namaPengguna, noHp,deskripsi, noLoker,waktu)
				VALUES('$noTitip','$nama', '$nohp', '$barang','$loker',$wakt)";

		mysqli_query($con, $sql) or die ('Insert data error '. mysqli_error($con));

		header('location:index.php');

	}
	
?>
