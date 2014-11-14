 <?php
		$host='localhost';
		$dbname='vancouver';
		$user='root';
		$pass='';
		
		$con = mysqli_connect($host, $user, $pass, $dbname);
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}


	
	if (isset($_GET['id'])) {
		$sql = "DELETE  FROM transaksi
				WHERE id = ". $_GET['id'];
		$query = mysqli_query($con, $sql);

		if (!$query) {
			echo mysqli_error($con);
		} else {
			echo "Data berhasil dihapus. ";
			echo "<a href=\"index.php\">Kembali</a>";
		}
	}
?>