<!DOCTYPE html>
<html>
<head>
	<title>Daftar Penitipan Barang</title>
</head>
<body>
<?php 

	//konfigurasi database
	$host = 'localhost';
	$dbname = 'penitipanbarang';
	$user = 'root';
	$pass = '';

	//membuat koneksi ke database
	$con = mysqli_connect($host, $user, $pass, $dbname);
	//cek ada kesalahan koneksi atau tidak?
	if (mysqli_connect_errno()) {
		echo "Koneksi Error : " . mysqli_connect_error();
	}

	//membuat query
	//$sql_query = "SELECT * FROM barang";
	$query = mysqli_query($con, "SELECT * FROM pengguna");

	//mengambil data hasil query dan menampilkannya
	//mysqli_fetch_row();
	//mysqli_fetch_array();
	echo "<h2>DAFTAR PENITIPAN BARANG</h2>";
	?>
	
	<table><tr>
		<th>No.</th>
		<th>Nama Pengguna</th>

		<th>No Handphone</th>
		<th>Deskripsi Barang</th>
		<th>No Loker</th>
		<th>Waktu Penitipan</th>


	</tr>
	<?php
	$i = 1;
	while ($data = mysqli_fetch_assoc($query)) {
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['namaPengguna']."</td>";
		echo "<td>".$data['noHp']."</td>";
		echo "<td>".$data['deskripsiBarang']."</td>";
		echo "<td>".$data['noLoker']."</td>";
		echo "<td>".$data['waktu']."</td>";
		echo "</tr>";
		$i++;
	}
	?>
	</table>
	<a href="pengguna.php">Tambah Penitip Barang</a>
	<?php
    

?>
</body>
</html>