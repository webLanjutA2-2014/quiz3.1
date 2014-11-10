<html> 
	<head>
		<title>Form Tambah Titipan</title>
	</head>
	<h2>Form Tambah Barang</h2>
	<body>
		<form action=" " method="POST">
			<p>Masukkan Nama Pelanggan	: <input type="text" name="nama_pelanggan"></p>
			<p>Masukkan Deskripsi Barang: <input type="text" name="desc_barang"></p>
			<p>Masukkan Jam Masuk: <input type="time" name="jam_masuk"></p>
			<p><input type="submit" name="tambah" value="Tambah Titipan"></p>
		</form>
		
<?php
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nama_pelanggan=$_POST['nama_pelanggan'];
		$desc_barang=$_POST['desc_barang'];
		$jam_masuk=$_POST['jam_masuk'];
	
	$sql="INSERT INTO transaksi(nama_pelanggan, desc_barang, jam_masuk) 
	VALUES ('$nama_pelanggan', '$desc_barang' , $jam_masuk)";
	
	mysqli_query($con, $sql) or die('Insert Data Error Oom'.mysql_error($con));
	
	header('location:index.php');
	}
?>
	</body>
</html>
