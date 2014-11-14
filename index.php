<html>
<head>
	<title>List Penitipan Barang</title>
	</head>
	<body>
	<?php
		$host='localhost';
		$dbname='vancouver';
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
		//mysqli_fetch_row();   menampilkan database yang akan di import
		//mysqli_fetch_array();	menampilkan database yang akan di import
		
		echo "<h2> Daftar Penitipan Barang</h2>";
		
		?>
			<a href="menambahbarang.php">menambah barang titipan</a>
			<a href="mengambilbarang.php">mengambil barang titipan</a>
			<a href="logout.php"> dipersilahkan keluar </a>
			<br>
			<table border="2">
			<br>
			<tr><th>No.</th>
			<th>id titip</th>
			<th>nama pengguna</th>
			<th>deskripsi</th>
			<th>No HP</th>
			<th>No Loker</th>
			<th>waktu penitipan</th>
			<th> status boyy </th>
			<th> hayoo dihapus </th>
			</tr>
			
		<?php
		$i = 1;
		while ($row = mysqli_fetch_assoc($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['nama_pengguna']."</td>";
		echo "<td>".$row['deskripsi']."</td>";
		echo "<td>".$row['no_HP']."</td>";
		echo "<td>".$row['no_Loker']."</td>";
		echo "<td>".$row['waktu']."</td>";
		echo "<td><a href=\"cekBarang.php?&id=".$row['id']."\"	onclick=\"alert('Anda Akan mengecek barang titipan!')\">cekbarang</a></td>";
		echo "<td><a href=\"hapus.php?&id=".$row['id']."\"	onclick=\"alert('Anda Akan menghapus barang titipan!')\">hapus</a></td>";
		echo "</tr>";
		$i++;
		}

	
	
		

	?>
	<?php
		//if($_SERVER['REQUEST_METHOD'] == 'GET'){
		/*if(isset($_GET['aksi'])){
			$aksi = $_GET['aksi'];
			
			switch($aksi){
				case 'hapus':
					hapus_barang($con, $_GET['id']);
					break;
				case 'edit':
					edit_barang($_GET['id']);
					break;
				case 'tambah':
					tambah_barang();
					break;
				default:
					tambah_barang();
					break;
			}
			
		}
		
	function hapus_barang($con, $id){
		$query = mysqli_query($con,"DELETE FROM barang
		WHERE id_barang = $id");
		
	
	}*/
	
	?>
	</table>