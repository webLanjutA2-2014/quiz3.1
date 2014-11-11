<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pengguna</title>
</head>
<body>
<?php
	include "koneksi.php";
	session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	
	$query = mysqli_query($con, "SELECT * FROM pengguna ORDER BY diambil ASC");
	
	?>
	<a href="index.php">Home</a> | <a href="tambah.php"> Tambah </a> | <a href="logout.php"> Logout </a>
	<table border =1 border.style.borderCollapse:"collapse"> 
			<tr>
			<th> No </th>
			<th> Id Pengguna </th>
			<th> Nama </th>
			<th> No HP </th>
			<th> Deskripsi </th>
			<th> No Loker</th>
			<th> Waktu Mulai </th>
			<!--<th> Waktu Selesai </th> -->
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
				//echo "<td>". $data['waktu_selesai']."</td>";
				if ($data['diambil'] == 1) {

					echo "<td> Sudah </td>";
				}else{echo "<td> Belum </td>";
				}

				
				if ($data['diambil'] == 1) {

					echo "<td> <a href=\"detail.php?&id=".$data['id']."\"> Detail </a> </td>";
				}else{
					echo "<td> <a href=\"kembali.php?&id=".$data['id']."\"> Kembali </a> </td>";
				}
				
			echo "	</tr>";
	$i++;			
	}

}else{
	header('location: login.php');
}
?>
	
	</table>
	