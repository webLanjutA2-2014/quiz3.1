<html> 
	<head>
		<title>Halaman Tambah Titipan</title>
	</head>
	<body>

	<?php session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){ ?>
		
		<form action=" " method="POST" enctype="multipart/form-data">
 	    <table align="center"; margin="100">
 	    <tr>
 	    	<td><H2>Tambah Barang</H2></td>
 	    </tr>
   		<tr>
        	<td align="right">Nama Pelanggan	: </td>
        	<td align="left"><input type="text" name="nama_pelanggan"></td>
    	</tr>
    	<tr>
        	<td align="right">No HP	: </td>
        	<td align="left"><input type="text" name="no_hp"></td>
    	</tr>
    	<tr>
        	<td align="right">Deskripsi Barang	: </td>
        	<td align="left"><input type="text" name="desc_barang"></td>
    	</tr>
    	<tr>
        	<td align="right">Nomor Loker	: </td>
        	<td align="left"><input type="text" name="no_loker"></td>
    	</tr>
    	<tr>
    		<td align="right"><input type="submit" value="Tambah"></td>
    	</tr>
    	<tr>
    		<td><a href="index.php">Kembali ke Awal</a></td>
    	</tr>
  		</table>
		</form>
<?php
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nama_pelanggan=$_POST['nama_pelanggan'];
		$no_hp=$_POST['no_hp'];
		$desc_barang=$_POST['desc_barang'];
		$no_loker=$_POST['no_loker'];
	
	$sql="INSERT INTO transaksi(nama_pelanggan, no_hp, desc_barang, no_loker, jam_masuk) 
	VALUES ('$nama_pelanggan', $no_hp, '$desc_barang' , '$no_loker', now())";
	
	mysqli_query($con, $sql) or die('Insert Data Error Oom'.mysql_error($con));
	
	header('location:index.php');
	}
?>


<?php
	}else{
		header('location:login.php');
	}
?>
	</body>
</html>
