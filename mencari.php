<H2>Data Pengambilan</H2>
<?php
	require('konek.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$no_trx=$_POST['id'];
		
	
	$sql="Update transaksi set waktu_ambil=now() ,
	 lama_waktu=(select timestampdiff(Hour,waktu, waktu_ambil)), biaya=(lama_waktu*1000) where id='$no_trx'";
	
	mysqli_query($con, $sql) or die(' Error Oom'.mysql_error($con));
	
	
	}
?>
	<?php

	require('konek.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$query= mysqli_query($con, "SELECT * From transaksi where id= '$no_trx'");
	while ($data =mysqli_fetch_assoc($query)){

		echo "<table border='2'><tr>";
		echo "<th>No Transaksi</th>";
		echo "<th>Nama Pelanggan</th>";
		echo "<th>Nama Barang</th>";
		echo "<th>No Handphone</th>";
		echo "<th>No Loker</th>";
		echo "<th>Jam Penitipan</th>";
		echo "<th>Jam Pengambilan</th>";
		echo "<th>Biaya</th>";
		echo "<th>lama_waktu</th>";
	    echo "</tr>";
		echo "<tr>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['nama_pengguna']."</td>";
		echo "<td>".$data['deskripsi']."</td>";
		echo "<td>".$data['no_HP']."</td>";
		echo "<td>".$data['no_Loker']."</td>";
		echo "<td>".$data['waktu']."</td>";
		echo "<td>".$data['waktu_ambil']."</td>";
		echo "<td>".$data['biaya']."</td>";
		echo "<td>".$data['lama_waktu']."</td>";
		//echo "<td>".$data['username']."</td>";
		/* echo "<td><a href=\"edit_barang.php?id=".$data['id_barang']."\">Edit</a></td>";
		echo "<td><a href=\"hapus_barang.php?id=".$data['id_barang']."\" onclick=\"alert('Anda Akan Menghapus Barang??')\">Hapus</a></td>";
		echo "</tr>"; */
		
		echo "</table>";
	}}
?>

	</body>
</html>
