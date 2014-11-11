<?php
include "koneksi.php";
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM pengguna WHERE `pengguna`.`id` =". $id."");
	$data = mysqli_fetch_assoc($query);	

	if ($data['diambil'] == 1){
		$status = "Sudah";
	}else{$status = "Belum";}

	echo "
	<a href='lihat.php'> Daftar Pengguna </a> <br>
	 <strong> Detail Pengguna </strong> 
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
		}else{
	header('location: login.php');
}
?>
