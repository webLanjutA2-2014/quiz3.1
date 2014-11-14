<html>
<head>
<title>Penitipan</title>
<style>
		.tengah{
		position: absolute;
		margin-top: -200px;
		margin-left: -200px;
		left: 50%;
		top: 50%;
		width: 400px;
		height: 220px;
		background-color: black;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
</head>
<body>
</br>
<div class="row">
  <div class="col-md-offset-11"><a href="logout.php">Logout</a></div>
</div>
</br>
</br>
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="index.php">Daftar</a></li>
  <li role="presentation"><a href="ambil_titipan.php" >Ambil Barang Titipan</a></li>
  <li role="presentation"><a href="cekstatus.php">Cek Status Barang</a></li>
  <li role="presentation"><a href="tambah_titipan.php">Tambah Data Titipan</a></li>
</ul>

<?php

require('koneksi.php');
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	echo "<h2>Daftar Barang Titipan</h2>";
	
	$sql="Update transaksi set 
	 jam_ambil=now() ,
	 durasi=(select timestampdiff(Hour,jam_masuk,jam_ambil)), 
	 biaya=(durasi*1000) where ket = ' '";
	
	mysqli_query($con, $sql) or die(' Error Oom'.mysql_error($con));
	
	?>
	
	<table border="2"><tr>
		<th>No</th>
		<th>Nomor Transaksi</th>
		<th>Nama Pelanggan</th>
		<th>Nomor HaPe</th>
		<th>Deskripsi Barang</th>
		<th>Nomor Loker</th>
		<th>Jam Masuk</th>
		<th>Jam Ambil</th>
		<th>Biaya</th>
		<th>Keterangan</th>
	</tr>
	<?php
	
	
	$i=1;
	$query= mysqli_query($con, "SELECT * From transaksi");
	while ($data =mysqli_fetch_assoc($query)){
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['no_trx']."</td>";
		echo "<td>".$data['nama_pelanggan']."</td>";
		echo "<td>".$data['no_hp']."</td>";
		echo "<td>".$data['desc_barang']."</td>";
		echo "<td>".$data['no_loker']."</td>";
		echo "<td>".$data['jam_masuk']."</td>";
		echo "<td>".$data['jam_ambil']."</td>";
		echo "<td>".$data['biaya']."</td>";
		echo "<td>".$data['ket']."</td>";
		$i++;
	}
	
?>
	<tr>
		<td><a href="index.php">Refresh</a></td>
	</tr>
</table>
</body>
</html>

<?php
	}else{
		header('location:login.php');
	}
?>
