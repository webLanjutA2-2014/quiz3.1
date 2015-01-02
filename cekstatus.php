<html>
<head>
<title>Daftar Barang</title>
</head>
<body>
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
	if($data =mysqli_fetch_assoc($query)){

	echo "<table align='center'><td>";
		echo "<tr>";
     		echo "<td > Nomor Penitipan : </td>";
     		echo "<td >".$data['no_trx']."<td>";
    	echo "</tr>";
    	echo "<tr>";
     		echo "<td > Nama Pelanggan : </td>";
     		echo "<td >".$data['nama_pelanggan']."<td>";
    	echo "</tr>";
    	echo "<tr>";
     		echo "<td > Deskripsi Barang : </td>";
     		echo "<td >".$data['desc_barang']."<td>";
    	echo "</tr>";
    	echo "<tr>";
     		echo "<td > Waktu Masuk : </td>";
     		echo "<td >".$data['waktu_masuk']."<td>";
    	echo "</tr>";
    	echo "<tr>";
     		echo "<td > Biaya : </td>";
     		echo "<td >".$data['biaya']."<td>";
    	echo "</tr>";
	echo "</table>";
	}else {
		echo "data tidak ditemukan";
	}}
?>

</body>
</html>