<html>
<head>
	<title>DAFTAR</title>
	</head>
	<body>
	<?php
		$host='localhost';
		$dbname='bisnis';
		$user='root';
		$pass='';
		
		$con = mysqli_connect($host, $user, $pass, $dbname);
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}else{
		
		echo "";
		}
		
		//membuat koneksi database dengan php
		$query = mysqli_query($con, "select * from transaksi");
		
		echo "<h2> Daftar</h2>";
		?>
			<a href="input_user.php">tambah</a>
			<table>
			<tr><th>No.</th>
			<th>Nama</th>
			<th>no_HP</th>
			<th>Barang</th>
			<th>Waktu</th>
			</tr>
			
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		$date = Date("Y-m-d H:i:s", time()+60*60*7);
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['nama_pengguna']."</td>";
		echo "<td>".$row['no_hp']."</td>";
		echo "<td>".$row['barang']."</td>";
		echo "<td>".$date."</td>";
		echo "</tr>";
		$i++;
		}
		
	?>
	</table>