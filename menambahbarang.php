
 <form action=" " method="POST" enctype="multipart/form-data">
 	    <table align="center"; margin="100">
 	    <tr>
 	    	<td><H2>tambahkan barang</H2></td>
 	    </tr>
   		<tr>
        	<td align="right">id penitipan	: </td>
        	<td align="left"><input type="text" name="id"></td>
    	</tr>
    	<tr>
        	<td align="right">Nama pengguna	: </td>
        	<td align="left"><input type="text" name="nama_pengguna"></td>
    	</tr>
    	<tr>
        	<td align="right">Deskripsi Barang	: </td>
        	<td align="left"><input type="text" name="deskripsi"></td>
    	</tr>
    	<tr>
        	<td align="right">Nomor handphone	: </td>
        	<td align="left"><input type="text" name="no_HP"></td>
    	</tr>
    	<tr>
        	<td align="right">no loker	: </td>
        	<td align="left"><input type="text" name="no_Loker"></td>
    	</tr>
    	<tr>
        	<td align="right">waktu penitipan	: </td>
        	<td align="left"><input type="text" name="waktu"></td>
    	</tr>

    	<tr>
    		<td align="right"><input type="submit" value="tambah"></td>
    	</tr>

    	<tr>
    		<td><a href="index.php">Kembali ke halaman index</a></td>
    	</tr>
  		</table>
		</form>
 <?php
 
	require('konek.php');
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = $_POST['id'];
	$nama = $_POST['nama_pengguna'];
	$ket  = $_POST['deskripsi'];
	$hp  = $_POST['no_HP'];
	$lo  = $_POST['no_Loker'];
	$lok  = $_POST['waktu'];

	
	$sql="INSERT INTO transaksi(id,nama_pengguna,deskripsi,no_HP,no_Loker,waktu)
    values ('$id', '$nama', '$ket',$hp, '$lo',$lok)";
	
	mysqli_query($con, $sql) or die('insert data eror'.mysqli_error($con));
	
	header ('location:index.php');
	
	
	}
 ?>