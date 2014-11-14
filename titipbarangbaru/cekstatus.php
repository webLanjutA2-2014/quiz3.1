<html>
<head>
<title>Daftar Barang</title>
</head>
<body>
<?php session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){ ?>
<H2 align="center">Pencarian</H2>
<form action=" " method="POST" enctype="multipart/form-data">
  <table align="center"; margin="100">
    <tr>
      <td align="right">Masukkan Nomor Penitipan : </td>
      <td align="left"><input type="text" name="no_trx"></td>
    </tr>
    <tr>
    	<td align="right"><input type="submit" value="Cari"></td>
    </tr>
    <tr><td><a href="index.php">Kembali ke Awal</a></td></tr>
  </table>
</form>
		

<?php

	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$i=1;
	$query= mysqli_query($con, "SELECT * From transaksi where no_trx= ".$_POST['no_trx']);
	while ($data =mysqli_fetch_assoc($query)){

		echo "<table border='2'><tr>";
		echo "<th>No</th>";
		echo "<th>No Transaksi</th>";
		echo "<th>Nama Pelanggan</th>";
		echo "<th>No HaPe</th>";
		echo "<th>Deskripsi Barang</th>";
		echo "<th>Jam Masuk</th>";
		echo "<th>Jam Ambil</th>";
		echo "<th>Biaya</th>";
	    echo "</tr>";
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['no_trx']."</td>";
		echo "<td>".$data['nama_pelanggan']."</td>";
		echo "<td>".$data['no_hp']."</td>";
		echo "<td>".$data['desc_barang']."</td>";
		echo "<td>".$data['jam_masuk']."</td>";
		echo "<td>".$data['jam_ambil']."</td>";
		echo "<td>".$data['biaya']."</td>";
		//echo "<td>".$data['username']."</td>";
		/* echo "<td><a href=\"edit_barang.php?id=".$data['id_barang']."\">Edit</a></td>";
		echo "<td><a href=\"hapus_barang.php?id=".$data['id_barang']."\" onclick=\"alert('Apakah Anda Akan Menghapus Barang??')\">Hapus</a></td>";
		echo "</tr>"; */
		$i++;
		echo "</table>";
	}}
?>

<?php
	}else{
		header('location:login.php');
	}
?>
</body>
</html>