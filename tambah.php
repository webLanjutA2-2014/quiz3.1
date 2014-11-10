
<form action="" method="post">
	<p>Nama Barang:
		<input type="text" name="nama_barang"></p>
	<p>loker:
		<input type="text" name="loker"></p>
	<p>nama_pelanggan:
		<input type="text" name="nama_pelanggan"></p>
	<p><input type="submit" value="tambah Barang" name="tambah"></p>
</form>
 
 <?php
 
	require('konek.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama_barang = $_POST['nama_barang'];
	$loker = $_POST['loker'];
	$nama_pelanggan  = $_POST['nama_pelanggan'];
	
	$sql="insert into barang(nama_barang,loker,nama_pelanggan)values
	('$nama_barang', $loker, '$nama_pelanggan')";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:index.php');
	
	
	}
 ?>