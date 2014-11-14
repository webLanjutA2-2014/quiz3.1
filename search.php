<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<H2>Data Pengambilan</H2>
<a href="form_cari.php">Kembali ke Pencarian</a>
&nbsp<a href="index.php">Kembali ke Menu</a>
<br><br>
<?php
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$cari=$_POST['id'];
		
	//digunakan untuk mengupdate waktu selesai dan menhitung jumlah yang harus dibayarkan
	$sql="Update nitip set waktu_Selesai=now() ,
	 selisih=(select timestampdiff(Hour,waktu, waktu_Selesai)), status=(selisih*1000) where id='$cari'";
	
	mysqli_query($con, $sql) or die(' Error Oom'.mysql_error($con));
	
	}
?>
	<?php

	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$query= mysqli_query($con, "SELECT * From nitip where id= '$cari'");
	while ($data =mysqli_fetch_assoc($query)){

		echo "<table border='2'><tr>";
		echo "<th>Id Penitipan</th>";
		echo "<th>Nama Pelanggan</th>";
		echo "<th>Nama Barang</th>";
		echo "<th>No Handphone</th>";
		echo "<th>No Loker</th>";
		echo "<th>Jam Penitipan</th>";
		echo "<th>Jam Pengambilan</th>";
		echo "<th>Biaya</th>";
	    echo "</tr>";
		echo "<tr>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['nama_pengguna']."</td>";
		echo "<td>".$data['deskripsi']."</td>";
		echo "<td>".$data['no_hp']."</td>";
		echo "<td>".$data['no_loker']."</td>";
		echo "<td>".$data['waktu']."</td>";
		echo "<td>".$data['waktu_selesai']."</td>";
		echo "<td>".$data['status']."</td>";
		
		echo "</table>";

		echo "<td><a href=\"hapus.php?&id=".$data['id']."\"onclick=\"alert('anda akan menghapus barang!')\">hapus</a></td>";
	}}
?>

<br>

	</body>
</html>
