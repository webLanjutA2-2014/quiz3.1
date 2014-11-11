<?php 
include "koneksi.php";
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	?>
	<a href="lihat.php"> Daftar Pengguna </a>| <a href="logout.php"> Logout </a> <br>
	<strong>Tambah Pengguna</strong>
<form method="POST" action="hasil.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Id pengguna </td> <td> <input type="number" name="id"> </td>
		</tr>
		<tr>
			<td>Nama Pengguna </td> <td>  <input type="text" name="nama"> </td>
		</tr>
	 	<tr>
			<td>No HP </td> <td>  <input type="text" name="hp"> </td>
		</tr>
		<tr>
			<td>Deskripsi Barang </td> <td>  <textarea name="deskripsi"> </textarea> </td>
		</tr>
		<tr>
			<td>Nomor Loker </td> <td>  <input type="number" name="loker"> </td>
		</tr>
	  	<tr>
	  		<td colspan="2"> <input type="submit" name="tambah" value="Tambah"> </td>
	  	</tr>
	
	</table>
</form>
<?php
}else{
	header('location: login.php');
}
?>
