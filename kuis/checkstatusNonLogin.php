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

<?php session_start();

 ?>
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
	<tr>
    	<td align="left"><a href="login.php">Back to Login</a></td>
    </tr>
  </table>
</form>
		
<?php
	
	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$sql="Update transaksi set 
	 jam_ambil=now() ,
	 durasi=(select timestampdiff(Hour,jam_masuk,jam_ambil)), 
	 biaya=(durasi*1000) where ket = ' '";
	
	mysqli_query($con, $sql) or die(' Error Oom'.mysql_error($con));
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
		echo "<td><a href=\"hapus_barang.php?id=".$data['id_barang']."\" onclick=\"alert('Anda Akan Menghapus Barang??')\">Hapus</a></td>";
		echo "</tr>"; */
		$i++;
		echo "</table>";
	}}
?>

</body>
</html>