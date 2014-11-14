<html>
<head>
    <title></title>
    <body>

 <form action=" " method="POST" enctype="multipart/form-data">
 	    
 	    <tr>
 	    	<td><H2 align="center">Tambah Data Penitipan</H2></td>
 	    </tr>
        <table align="center"; margin="100">
   		<tr>
        	<td align="right">id penitipan	: </td>
        	<td align="left"><input type="text" name="id"></td>
    	</tr>
    	<tr>
        	<td align="right">Nama penitip	: </td>
        	<td align="left"><input type="text" name="nama_pengguna"></td>
    	</tr>
    	<tr>
        	<td align="right">Deskripsi Barang	: </td>
        	<td align="left"><input type="text" name="deskripsi"></td>
    	</tr>
    	<tr>
        	<td align="right">Nomor handphone	: </td>
        	<td align="left"><input type="text" name="no_hp"></td>
    	</tr>
    	<tr>
        	<td align="right">no loker	: </td>
        	<td align="left"><input type="text" name="no_loker"></td>
    	</tr>
    	<tr>
        	<td align="right">waktu penitipan	: </td>
        	<td align="left"><input type="text" name="waktu"></td>
    	</tr>
    	<tr>
    		<td align="right"><input type="submit" value="tambah"></td>
    	</tr>

    	<tr>
    		<td><a href="index.php">Kembali ke Menu</a></td>
    	</tr>
  		</table>
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
 </body>
 </html>