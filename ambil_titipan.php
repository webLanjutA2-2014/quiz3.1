<html> 
	<head>
		<title>Laman Ambil Titipan</title>
	</head>
	<body>
		<form action=" " method="POST" enctype="multipart/form-data">
 	    <table align="center"; margin="100">
 	    <tr>
 	    	<td><H2>Pengambilan Barang</H2></td>
 	    </tr>
   		<tr>
        	<td align="right">Masukkan Nomor Penitipan Barang: </td>
        	<td align="left"><input type="text" name="id"></td>
    	</tr>
    	<tr>
    		<td align="right"><input type="submit" value="ambil"></td>
    	</tr>
    	<tr>
    		<td><a href="index.php">Kembali ke Awal</a></td>
    	</tr>
  		</table>
		</form>
<?php
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$no_trx=$_POST['id'];
		
	
	$sql="Update 'Penitipan'.'nitip' set waktu_selesai=now() ,
	 selisih=(select TIMESTAMPDIFF(Hour,waktu,waktu_selesai)), status=(selisih*1000) where id=".$_POST['id'];
	 mysqli_query($con, $sql) or die('error PRET!!!!'. mysqli_error($con));

	
	
	}
?>
	<?php

	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$i=1;
	$query= mysqli_query($con, "SELECT * From nitip where id= ".$_POST['id']);
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
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['nama_pengguna']."</td>";
		echo "<td>".$data['deskripsi']."</td>";
		echo "<td>".$data['no_hp']."</td>";
		echo "<td>".$data['waktu']."</td>";
		echo "<td>".$data['waktu_selesai']."</td>";
		echo "<td>".$data['status']."</td>";
		$i++;
		echo "</table>";
	}}
?>

	</body>
</html>
