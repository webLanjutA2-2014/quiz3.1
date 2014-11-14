</h2>cek barang</h2>
<?php
	require('sambung.php');
	
	if(isset($_GET['id'])){
		$sql="select *from barang where id_barang=".$_GET['id'];
		$query = mysqli_query($con, $sql);
		
		$result = mysqli_fetch_assoc($query);
		}
?>

<form action="" method="post">
	<p>Nno pengguna: 
		<input type="text" name="nama"></p>


<form action="" method="post">
	<p>Nama Barang :
		<input type="text" name="nama_barang" value="<?=$result['nama_barang'];?>"></p>
	<p>kuantitas :
		<input type="text" name="kuantitas" value="<?=$result['kuantitas']?>"></p>
	<p>harga satuan :
		<input type="text" name="harga" value="<?=$result['harga']?>"></p>
		
		<input type="hidden" name="id_barang" value="<?=$result['id_barang']?>">
	<p><input type="submit" value="tambah Barang" name="tambah"></p>
</form>
 
 <?php
 
	require('koneksi.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama_barang = $_POST['nama_barang'];
	$kuantitas = $_POST['kuantitas'];
	$harga  = $_POST['harga'];
	$id_barang = $_POST['id_barang'];
	
	$sql="update barang set nama_barang='$nama_barang', kuantitas=$kuantitas, harga=$harga
	where id_barang=$id_barang";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:index.php');
	
	
	}
 ?>