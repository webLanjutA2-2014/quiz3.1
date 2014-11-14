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


	$con = mysqli_connect($host, $user, $pass, $dbname);

	if (mysqli_connect_errno()) {
		echo "Koneksi Error : " . mysqli_connect_error();
	}

	//membuat query
	//$sql_query = "SELECT * FROM barang";
	$query = mysqli_query($con, "SELECT * FROM transaksi");


	echo "<h2>DAFTAR PENITIPAN BARANG</h2>";
	?>
	<a href="tambahBarang.php">Tambah Penitipan</a>
	<a href="pengambilanBarang.php">Ambil</a>
	<table><tr>
		<th>No.</th>
		<th>Id Penitipan</th>
		<th>Nama Pengguna</th>
		<th>No Handphone</th>
		<th>Deskripsi Barang</th>
		<th>No Loker</th>
		<th>Waktu Penitipan</th>
		<th>Aksi</th>




	</tr>
	<?php
	$i = 1;
	while ($data = mysqli_fetch_assoc($query)) {
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['namaPengguna']."</td>";
		echo "<td>".$data['noHp']."</td>";
		echo "<td>".$data['deskripsi']."</td>";
		echo "<td>".$data['noLoker']."</td>";
		echo "<td>".$data['waktu']."</td>";
		echo "<td><a href=\"cekBarang.php?&id=".$data['id']."\"	onclick=\"alert('Anda Akan mengecek Barang!')\">Cek Barang</a></td>";
		echo "</tr>";
		$i++;
	}
	?>
	</table>
	<?php
    

?>
</body>
</html>