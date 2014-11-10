<html>
<head>
<title>Daftar Barang</title>
</head>
<body>
<?php
	$host='localhost';
	$dbname='quiz';
	$user='root';
	$pass='';
	
	$con=mysqli_connect($host, $user, $pass, $dbname);
	
	if(mysqli_connect_errno()){
		echo "koneksi error".mysqli_connect_error();
		echo "<br>";
		echo "<br>";
	}else{
		echo "koneksi berhasil";
		echo "<br>";
		echo "<br>";
	}
	echo "<h2>Daftar titipan</h2>";
	?>
	<a href="tambah_titipan.php">Tambah Data Titipan</a>
	<table><tr>
		<th>No Transaksi</th>
		<th>Nama Pelanggan</th>
		<th>Deskripsi Barang</th>
		<th>Jam Masuk</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	$i=1;
	$query= mysqli_query($con, "SELECT * From transaksi");
	while ($data =mysqli_fetch_assoc($query)){
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['no_trx']."</td>";
		echo "<td>".$data['nama_pelanggan']."</td>";
		//echo "<td>".$data['no_hp']."</td>";
		echo "<td>".$data['desc_barang']."</td>";
		echo "<td>".$data['jam_masuk']."</td>";
		//echo "<td>".$data['jam_ambil']."</td>";
		//echo "<td>".$data['biaya']."</td>";
		//echo "<td>".$data['username']."</td>";
		/* echo "<td><a href=\"edit_barang.php?id=".$data['id_barang']."\">Edit</a></td>";
		echo "<td><a href=\"hapus_barang.php?id=".$data['id_barang']."\" onclick=\"alert('Anda Akan Menghapus Barang??')\">Hapus</a></td>";
		echo "</tr>"; */
		$i++;
	}
?>
</table>
</body>
</html>