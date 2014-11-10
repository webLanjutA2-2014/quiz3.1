
<form action="" method="post">
	<p>Nama
		<input type="text" name="nama"></p>
	<p>No. HP
		<input type="text" name="no_hp"></p>
	<p>Barang
		<input type="text" name="barang"></p>
	<p><input type="submit" value="tambah Barang" name="tambah"></p>
</form>
 <a href="daftar.php">ke daftar</a>
 <?php
 
	require('connection.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama = $_POST['nama'];
	$no_hp = $_POST['no_hp'];
	$barang  = $_POST['barang'];
	
	$sql="insert into transaksi(nama_pengguna,no_hp,barang)values
	('$nama', '$no_hp', '$barang')";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:daftar.php');
	
	
	}
 ?>