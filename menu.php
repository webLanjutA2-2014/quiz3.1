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
		$query = mysqli_query($con, "select * from nitip");
		//mysqli_fetch_row();   menampilkan database yang akan di import
		//mysqli_fetch_array();	menampilkan database yang akan di import
		
		echo "<h2> Daftar pengguna</h2>";
		
		?>
			<a href="user.php">tambah data pengguna</a>
			<a href="logout.php">logout</a>
			<a href="cri.php">cek jumlah pembayaran</a>
			<br>
			<table border="2">
			<br>
			<tr><th>No.</th>
			<th>nama</th>
			<th>desbarang</th>
			<th>No_hp</th>
			<th>No_lokr</th>
			<th>waktu</th>
			</tr>
			
		<?php
		
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['nama_pengguna']."</td>";
		echo "<td>".$row['deskripsi']."</td>";
		echo "<td>".$row['no_hp']."</td>";
		echo "<td>".$row['no_loker']."</td>";
		echo "<td>".$row['waktu']."</td>";
		echo "</tr>";
		}
	
	
		
		
	?>
	
		
	</table>