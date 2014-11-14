<form action="" method="post">
	<p>Masukkan Nama Pelanggan : 
		<input type="text" name="nama_pelanggan"></p>
	<p>Masukkan No Telepon : 
		<input type="text" name="no_telepon"></p>
	<p>Deskripsi: 
		<input type="text" name="deskripsi"></p>
	<p><input type="submit" value="Tambah Barang" 
		name="tambah"></p> 
</form>

<?php

	require('koneksi.php');
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama_pelanggan = $_POST['nama_pelanggan'];
		$no_telepon = $_POST['no_telepon'];
		$deskripsi = $_POST['deskripsi];

		$sql = "INSERT INTO barang(nama_barang, kuantitas, harga_satuan)
				VALUES('$nama_barang', $kuantitas, $harga_satuan)";

		mysqli_query($con, $sql) or die ('Insert data error '. mysqli_error($con));

		header('location:index.php');

	}
	
?>
