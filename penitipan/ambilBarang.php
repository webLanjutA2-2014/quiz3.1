<!DOCTYPE html>
<?php
require_once('../include/cekLogin.php');
require_once("../include/koneksi.php");
if(isset($_GET['id']))
{
	$sqlquery = "SELECT * FROM penitipan WHERE id_penitip =".$_GET['id'];
	
	$query = mysqli_query($con, $sqlquery) or die ("GET DATA ERROR". mysqli_error($con));
	
	$data = mysqli_fetch_assoc($query);

	//GET THE HARGA
	$sqlharga = "SELECT TIMESTAMPDIFF(SECOND, waktu_masuk, now()) as bayar from penitipan where id_penitip=".$_GET['id'];
	$queryHarga = mysqli_query($con, $sqlharga) or die ("GET DATA ERROR". mysqli_error($con));
	$harga = mysqli_fetch_assoc($queryHarga);

	//TIME
	date_default_timezone_set('Asia/Jakarta');
	$nowdate = date('m/d/Y h:i:s a', time());
}

?>
<html>
<head>
	<title>Ambil Barang</title>
</head>
<body>
<h1>Ambil Barang</h1>
	<form action="" method="POST" enctype="multipart/form-data">
		<p>ID Penitip : <input type="text" name="id" value="<?=$data['id_penitip']?>" readonly="readonly"></p>
		<p>Nama Penitip : <input type="text" name="nama_penitip" value="<?=$data['nama_penitip']?>" readonly="readonly"></p>
		<p>No HP: <input type="text" name="no_hp" value="<?=$data['no_hp']?>" readonly="readonly"></p>
		<p>No Loker: <input type="text" name="no_loker" value="<?=$data['no_loker']?>" readonly="readonly"></p>
		<p>Deskripsi Barang: <input type="text" name="deskripsi_barang" value="<?=$data['deskripsi_barang']?>" readonly="readonly"></p>
		<p>Waktu Masuk: <input type="text" name="waktu_masuk" value="<?=$data['waktu_masuk']?>" readonly="readonly"></p>
		<p>Waktu Keluar: <input type="text" name="waktu_masuk" value="<?=$nowdate?>" readonly="readonly"></p>
		<p>Bayar: <input type="text" name="bayar" value="<?=$harga['bayar'] / 3600 * 1000?>" readonly="readonly"></p>
		<input type="submit" value="Ambil">
	</form>
</body>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$id = $_POST['id'];
	
	$SQLQuery = "UPDATE penitipan SET sudah_diambil = TRUE, waktu_keluar = now() WHERE id_penitip=$id";
	
	mysqli_query($con, $SQLQuery) or die ('Update data error '. mysqli_error($con));
	
	header('location:lihatBarangTitipan.php');
}

?>
</html>