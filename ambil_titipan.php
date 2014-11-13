<html> 
	<head>
		<title>Laman Ambil Titipan</title>
	</head>
	<body>
	<?php
	
	session_start();
	if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	 ?>
		
<?php
	require('koneksi.php');
	
	if(isset($_GET['no_trx'])){

	$sql="Update transaksi set 
	 	waktu_ambil=now() ,
	 	durasi=(select timestampdiff(Hour,waktu_masuk,waktu_ambil)), 
	 	biaya=(durasi*1000), ket='sudah diambil'
	 	where no_trx=".$_GET['no_trx'];
	
	mysqli_query($con, $sql) or die(' Error Oom'.mysql_error($con));
	

	
	}
?>
	<?php

	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
	$i=1;
	$query= mysqli_query($con, "SELECT * From transaksi where no_trx= ".$_GET['no_trx']);
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
     		echo "<td > Nomor HaPe: </td>";
     		echo "<td >".$data['no_hp']."<td>";
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
     		echo "<td > Waktu Ambil : </td>";
     		echo "<td >".$data['waktu_ambil']."<td>";
    	echo "</tr>";
    	echo "<tr>";
     		echo "<td > Biaya : </td>";
     		echo "<td >".$data['biaya']."<td>";
    	echo "</tr>";
    	echo "<tr>";
     		echo "<td > Status : </td>";
     		echo "<td >".$data['ket']."<td>";
    	echo "</tr>";
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
