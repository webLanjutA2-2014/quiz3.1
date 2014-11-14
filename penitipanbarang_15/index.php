<html>
<head>
	<title>Penitipan Barang</title>
	</head>
	<body>
	<?php
		$host='localhost';
		$dbname='titipbarang';
		$user='root';
		$pass='';
		
		$con = mysqli_connect($host, $user, $pass, $dbname);
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}else{
		
		echo "";
		}
		
		//membuat koneksi database dengan php
		$query = mysqli_query($con, "select * from barang");
		//mysqli_fetch_row();   menampilkan database yang akan di import
		//mysqli_fetch_array();	menampilkan database yang akan di import
		
		echo "<h2> Daftar Barang</h2>";
		?>
			<a href="tambah.php">tambah data barang</a>
			<table>
			<tr><th>No.</th>
			<th>Nama Barang</th>
			<th>Kuantitas</th>
			<th>Harga Barang</th>
			<th>Aksi</th>
			<th colspan="2"> aksi</th>
			</tr>
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['nama_barang']."</td>";
		echo "<td>".$row['kuantitas']."</td>";
		echo "<td>".$row['harga']."</td>";
		echo "<td><a href=\"edit.php?&id=".$row['id_barang']."\">edit</a></td>";
		echo "<td><a href=\"hapus.php?&id=".$row['id_barang']."\"onclick=\"alert('anda akan menghapus barang!')\">hapus</a></td>";
		echo "</tr>";
		$i++;
		}
	
	
		
	
	?>
	</table>