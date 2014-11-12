<!DOCTYPE html>
<?php
require_once('../include/cekLogin.php');
require_once("../include/koneksi.php");

$SQLQuery = "SELECT * FROM penitipan WHERE sudah_diambil = TRUE";

$query = mysqli_query($con, $SQLQuery);

?>
<html>
<head>
	<title>Lihat Barang</title>
</head>
<body>
	<h1>HISTORY DAFTAR BARANG</h1>
	<p><a href="menu.php">Kembali</a></p>
	<p><a href="../mainMenu.php">Menu Utama</a></p>
	<table>
		<tr>
			<th>ID Penitip</th>
			<th>Nama Penitip</th>
			<th>No HP</th>
			<th>No Loker</th>
			<th>Deskripsi Barang</th>
			<th>Waktu Masuk</th>
			<th>Waktu Keluar</th>
			<th>Bayar</th>
		</tr>
	<?php
		while($row = mysqli_fetch_assoc($query))
		{
			echo "<tr>";
				echo "<td>".$row['id_penitip']."</td>";
				echo "<td>".$row['nama_penitip']."</td>";
				echo "<td>".$row['no_hp']."</td>";
				echo "<td>".$row['no_loker']."</td>";
				echo "<td>".$row['deskripsi_barang']."</td>";
				echo "<td>".$row['waktu_masuk']."</td>";
				echo "<td>".$row['waktu_keluar']."</td>";
				
					//GET THE HARGA
					$sqlharga = "SELECT TIMESTAMPDIFF(SECOND, waktu_masuk, waktu_keluar) as bayar from penitipan where id_penitip=".$row['id_penitip'];
					$queryHarga = mysqli_query($con, $sqlharga) or die ("GET DATA ERROR". mysqli_error($con));
					$harga = mysqli_fetch_assoc($queryHarga);
					$harga['bayar'] = $harga['bayar'] / 3600 * 1000;

				echo "<td>".$harga['bayar']."</td>";
			echo "</tr>";
		}
	?>
	</table>

</body>
</html>