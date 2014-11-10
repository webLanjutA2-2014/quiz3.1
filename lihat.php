<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pengguna</title>
</head>
<body>
<?php
	include "koneksi.php";
	$query = mysqli_query($con, "SELECT * FROM pengguna");
	
	?>
	<a href="tambah.php"> Tambah </a>
	<table border =1> 
			<tr>
			<th> No </th>
			<th> Id Pengguna </th>
			<th> Nama </th>
			<th> No HP </th>
			<th> Deskripsi </th>
			<th> No Loker</th>
			<th> Waktu Mulai </th>
			<th> Waktu Selesai </th>
			<th> Status Kembali </th>
			<th colspan ="2"> Options  </th>
			</tr>
	<?php	
	$i = 1;	
	while($data = mysqli_fetch_assoc($query)){
	echo "
			<tr>"; 
				echo "<td>".$i ."</td>";
				echo "<td>".$data['id']. "</td>";
				echo "<td>". $data['nama_pengguna']."</td>";
				echo "<td>". $data['hp']."</td>";
				echo "<td>". $data['deskripsi']."</td>";
				echo "<td>". $data['no_loker']."</td>";
				echo "<td>". $data['waktu_mulai']."</td>";
				echo "<td>". $data['waktu_selesai']."</td>";
				if ($data['diambil'] == 1) {

					echo "<td> Sudah </td>";
				}else{echo "<td> Belum </td>";}
				echo "<td> <a href=\"tarif.php?&id=".$data['id']."\"> Cek Tarif </a> </td>";
				if ($data['diambil'] == 1) {

					echo "<td> :D </td>";
				}else{
					echo "<td> <a href=\"kembali.php?&id=".$data['id']."\"> Kembali </a> </td>";
				}
				
			echo "	</tr>";
	$i++;			
	}
	?>
	</table>
	