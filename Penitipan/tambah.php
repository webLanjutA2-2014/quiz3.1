
<form action="" method="post" enctype="multipart/form-data"> <!---untuk nambah foto-->
	<p>Nama pengguna:
		<input type="text" name="nama"></p>
	<p>Nomor telepon:
		<input type="text" name="no_hp"></p>
	<p>Deskripsi:
		<input type="text" name="deskripsi"></p>
	<p>Nomor Loker:
		<input type="text" name="no_loker"></p>
	<p>Waktu:
		<input type="time" name="waktu"></p>
	<p><input type="submit" value="simpan" name="tambah">
	</p>
</form>
 
 <?php
 
	require('koneksi.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama = $_POST['nama'];
	$no_hp = $_POST['no_hp'];
	$deskripsi  = $_POST['deskripsi'];
	$no_loker  = $_POST['no_loker'];
	$waktu  = $_POST['waktu'];
	
	
	
	$sql="insert into pengguna(nama,no_hp,deskripsi,no_loker,waktu) values
	('$nama', '$no_hp', '$deskripsi', '$no_loker','$waktu')";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:tabel_pengguna.php');
	}
	
	
 ?>