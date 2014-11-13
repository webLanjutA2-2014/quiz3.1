<html> 
	<head>
		<title>Laman Ambil Titipan</title>
	</head>
	<body>
		<form action=" " method="POST" enctype="multipart/form-data">
 	    <table align="center"; margin="100">
 	    <tr>
 	    	<td><H2>Pengambilan Barang</H2></td>
 	    </tr>
   		<tr>
        	<td align="right">Masukkan Nomor Penitipan Barang: </td>
        	<td align="left"><input type="text" name="id"></td>
    	</tr>
    	<tr>
    		<td align="right"><input type="submit" value="ambil"></td>
    	</tr>
    	<tr>
    		<td><a href="index.php">Kembali ke Awal</a></td>
    	</tr>
  		</table>
		</form>
<?php
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$no_trx=$_POST['id'];
		
	
	$sql="Update nitip set waktu_selesai=now() ,
	 selisih=(select timestampdiff(Hour,waktu,waktu_selesai)), status=(selisih*1000) where id=".$_POST['id'];
	
	mysqli_query($con, $sql) or die(' Error Oom'.mysql_error($con));
	
	
	}
?>

<?php
mysql_connect("localhost","root","");
mysql_select_db("penitipan");



$cari=trim($_POST['cari']);
$query = mysql_query("SELECT * FROM nitip WHERE id LIKE '%$cari%'");
echo "<h1>Hasil Pencarian</h1>";
while($hasil = mysql_fetch_array($query)){

	echo "<table border='2'><tr>";
	echo "<th>id</th>";
	echo "<th>nama pengguna</th>";
	echo "<th>nama barang</th>";
	echo "<th>no handpohe</th>";
	echo "<th>no loker</th>";
	echo "<th>waktu penitipan</th>";
	echo "<th>waktu ambil</th>";
	echo "<th>biaya</th>";
	echo "</tr>";
echo "<td>". $hasil['id']."</td>";
echo "<td>". $hasil['nama_pengguna']."</td>";
echo "<td>".$hasil['deskripsi']."</td>";
echo "<td>".$hasil['no_hp']."</td>";
echo "<td>".$hasil['no_loker']."</td>";
echo "<td>".$hasil['waktu']."</td>";
echo "<td>".$hasil['waktu_selesai']."</td>";
echo "<td>".$hasil['status']."</td>";
}

?>