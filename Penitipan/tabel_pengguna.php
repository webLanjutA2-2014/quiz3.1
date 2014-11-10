<html>
<head>
	<title>tabel pengguna</title>
	</head>
	<body>
	<?php
		$host='localhost';
		$dbname='penitipan';
		$user='root';
		$pass='';
		
		$con = mysqli_connect($host, $user, $pass, $dbname);
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}else{
		
		echo "";
		}
		
		//membuat koneksi database dengan php
		$query = mysqli_query($con, "select * from pengguna");
		//mysqli_fetch_row();   menampilkan database yang akan di import
		//mysqli_fetch_array();	menampilkan database yang akan di import
		
		echo "<h2> Daftar pengguna</h2>";
		?>
			<a href="tambah.php">tambah data pengguna</a>
			<a href="cek.php">cek ID transaksi</a>
			<table>
			<tr><th>ID</th>
			<th>Nama</th>
			<th>No. HP</th>
			<th>Deskripsi</th>
			<th>No. Loker</th>
			<th>Waktu</th>
			<th colspan="2"> aksi</th>
			</tr>
			
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['no_hp']."</td>";
		echo "<td>".$row['deskripsi']."</td>";
		echo "<td>".$row['no_loker']."</td>";
		echo "<td>".$row['waktu']."</td>";
		
		echo "<td><a href=\"kembali.php?&id=".$row['id']."\">edit</a></td>";
		
		echo "</tr>";
		$i++;
		}
	
	

	
	?>
	</table>