
<form action="" method="post">
	<p>Nama Barang:
		<input type="text" name="nama_barang"></p>
	<p>jml kuantitas:
		<input type="text" name="kuantitas"></p>
	<p>harga satuan :
		<input type="text" name="harga"></p>
	<p><input type="submit" value="tambah Barang" name="tambah"></p>
</form>
 
 <?php
 
	require('koneksi.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama_barang = $_POST['nama_barang'];
	$kuantitas = $_POST['kuantitas'];
	$harga  = $_POST['harga'];
	
	$sql="insert into barang(nama_barang,kuantitas,harga)values
	('$nama_barang', $kuantitas, $harga)";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:index.php');
	
	
	}
 ?>