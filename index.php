<html>
<head>
<title>Daftar Barang</title>
</head>
<body>
<table><tr>
	<th><a href="tambah_titipan.php" align="right">Tambah Data Titipan</a></th>
	<th><a href="ambil_titipan.php" align="right">Ambil Barang Titipan</a></th>
	<th><a href="cekstatus.php" align="right">Cek Status Barang</a></th>
	<th><th><a href="logout.php" align="right">Logout</a></th></th>
</tr></table>
<?php
require('koneksi.php');
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	echo "<h2>Daftar Barang Titipan</h2>";
	?>
	<table border="2"><tr>
		<th>No</th>
		<th>Nomor Transaksi</th>
		<th>Nama Pelanggan</th>
		<th>Nomor HaPe</th>
		<th>Deskripsi Barang</th>
		<th>Nomor Loker</th>
		<th>Waktu Masuk</th>
		<th>Waktu Ambil</th>
		<th>Biaya</th>
		<th>Keterangan</th>
		<th>Aksi</th>
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
		echo "<td>".$data['waktu_masuk']."</td>";
		echo "<td>".$data['waktu_ambil']."</td>";
		echo "<td>".$data['biaya']."</td>";
		echo "<td>".$data['ket']."</td>";
		echo "<td><a href=\"ambil_titipan.php?no_trx=".$data['no_trx']."\">Ambil Barang</a></td>";
		$i++;
	}
?>
</table>
</body>
</html>

<?php
	}else{
		header('location:login.php');
	}
?>