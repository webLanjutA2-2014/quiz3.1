<a href="login.php">| Login Petugas |</a> <br>
<strong> Cek Tarif </strong> <br>
Masukan Id Anda <br>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="number" name="id">
	<input type="submit" value ="Cek">
</form>

<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$id = $_POST['id'];
	$query = mysqli_query($con, "SELECT * FROM pengguna WHERE `pengguna`.`id` =". $id." AND diambil ='1'");
	$data = mysqli_fetch_assoc($query);	
	if ($data['diambil'] == 1){
		$status = "Sudah";
	}else{$status = "Belum";}

	if ($id != $data['id']) {
		echo "Id anda salah, atau loker anda belum dikembalikan";
	}else{
	echo "<strong> Detail Pengguna </strong> 
	<table>
		<tr>
			<td> Id Pengguna </td> <td> : ".$data['id']."</td>
		</tr>
		<tr>
			<td> Nama Pengguna </td> <td> : ".$data['nama_pengguna']."</td>
		</tr>
		<tr>
			<td> No HP </td> <td> : ".$data['hp']."</td>
		</tr>
		<tr>
			<td> Deskripsi Barang </td> <td> : ".$data['deskripsi']."</td>
		</tr>
		<tr>
			<td> No Loker </td> <td> : ".$data['no_loker']."</td>
		</tr>
		<tr>
			<td> Waktu Mulai </td> <td> : ".$data['waktu_mulai']."</td>
		</tr>
		<tr>
			<td> Waktu Selesai </td> <td> : ".$data['waktu_selesai']."</td>
		</tr>
		<tr>
			<td> Sudah Dikembalikan? </td> <td> : ".$status."</td>
		</tr>
		<tr>
			<td> Tarif </td> <td> : Rp. ".$data['tarif']."</td>
		</tr> 
		</table>";
}
}
?>