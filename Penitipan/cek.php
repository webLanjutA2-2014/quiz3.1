<form action="" method="post" enctype="multipart/form-data"> <!---untuk nambah foto-->
	<p>ID transaksi:
		<input type="text" name="id"></p>
	
	<p><input type="submit" value="cari" name="tambah">
	</p>
</form>
 
 <?php
 
	require('koneksi.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = $_POST['id'];

	$query= mysqli_query($con, "select * from pengguna WHERE id=$id");
	
	
		$row = mysqli_fetch_array($query);
		
		
		echo "ID transaksi : ".$id."</br>";
		echo "Nama Pengguna : ".$row['nama']."</br>";
		echo "Nomor Handphone : ".$row['no_hp']."</br>";
		echo "Deskripsi Barang : ".$row['deskripsi']."</br>";
		echo "Nomor Loker : ".$row['no_loker']."</br>";
		echo "Waktu Penitipan : ".$row['waktu']."</br>";
		
		
		
		
	
	}
	
	
 ?>