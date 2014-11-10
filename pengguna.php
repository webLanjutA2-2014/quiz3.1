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
		
		echo "<h2> user atau pengguna</h2>";
		?>
			<a href="pengguna.php">tambah data pengguna</a>
			<table>
			<tr><th>No.</th>
			<th>id_pengguna</th>
			<th>nama_pengguna</th>
			<th>no_telp</th>
			<th>password</th>
			<th colspan="2"> aksi</th>
			</tr>
			
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['id_pengguna']."</td>";
		echo "<td>".$row['nama_pengguna']."</td>";
		echo "<td>".$row['no_telp']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td><a href=\"edit2.php?&id=".$row['id']."\">edit</a></td>";
		echo "<td><a href=\"hapus2.php?&id=".$row['id']."\"onclick=\"alert('anda akan menghapus barang!')\">hapus</a></td>";
		echo "</tr>";
		$i++;
		}
	
	
		
		//$query=mysqli_query($con, "select *from barang");
		//$result=mysqli_fetch_array($query);
		
		//foreach ($result as $item){
			//echo $item[1];
			//echo $item[2];
			//echo $item[3];
		
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