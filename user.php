
<form action="" method="post">
	<p>Id Pengguna:
		<input type="text" name="id"></p>
	<p>Nama_Pengguna:
		<input type="text" name="nama_pengguna"></p>
	<p>Keterangan :
		<input type="text" name="deskripsi"></p>
	<p>No_Handphone :
		<input type="text" name="no_hp"></p>
	<p>No_Loker :
		<input type="text" name="no_loker"></p>
	<p>waktu :
		<input type="text" name="waktu"></p>
	<p><input type="submit" value="Masukan data " name="tambah"></p>
</form>
 
 <?php
 
	require('koneksi.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = $_POST['id'];
	$nama = $_POST['nama_pengguna'];
	$ket  = $_POST['deskripsi'];
	$no  = $_POST['no_hp'];
	$lo  = $_POST['no_loker'];
	$lok  = $_POST['waktu'];
	
	$sql="insert into nitip(id,nama_pengguna,deskripsi,no_hp,no_loker,waktu)values
	('$id', '$nama', '$ket',$no, $lo,$lok)";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	
	
	
	}
 ?>