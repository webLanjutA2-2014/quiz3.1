

<?php
mysql_connect("localhost","root","");
mysql_select_db("penitipan");

require('koneksi.php');

	
?>
<?php



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