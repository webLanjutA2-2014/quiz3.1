<!DOCTYPE html>
<?php //require_once('cekLogin.php'); ?>
<html>
<head>
	<title>Titip Barang</title>
</head>
<body>
	<h1>Titip Barang</h1>
	<form action="" method="POST" id="usrform">
		<p>Nama Penitip : <input type="text" name="nama_penitip"></p>
		<p>No HP : <input type="text" name="no_hp"></p>
		<p>No Loker : <input type="text" name="no_loker"></p>
		<p>Deskripsi Barang : <textarea rows="4" cols="50" name="deskripsi" form="usrform"></textarea></p>
		<p><input type="submit" value="Simpan"></p>
	</form>
</body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	require_once("../include/koneksi.php");
	$nama_penitip = $_POST['nama_penitip'];
	$no_hp = $_POST['no_hp'];
	$no_loker = $_POST['no_loker'];
	$deskripsi = $_POST['deskripsi'];

	$SQLQuery = "INSERT INTO penitipan (nama_penitip,no_hp,no_loker,deskripsi_barang,waktu_masuk) VALUES ('$nama_penitip','$no_hp','$no_loker','$deskripsi',now())";

	mysqli_query($con, $SQLQuery) or die ('Insert data error '. mysqli_error($con));

	header('location:lihatBarangTitipan.php');
}
?>
</html>