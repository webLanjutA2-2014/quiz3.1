
<?php
	require("koneksi.php");
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id = $_POST['id'];
		$nama_pengguna =$_POST['nama'];
		$hp =$_POST['hp'];
		$deskripsi =$_POST['deskripsi'];
		$no_loker = $_POST['loker'];
		$sql = "INSERT INTO `pengguna`(id, nama_pengguna, hp, deskripsi, no_loker, waktu_mulai) 
				VALUES ($id, '$nama_pengguna', '$hp', '$deskripsi', '$no_loker', now() )";
		mysqli_query($con, $sql) or die('Adda yang error bro!!!!'. mysqli_error($con));
		echo "Penitipan Berhasil : <br>";
		echo 		"Id pengguna 		: " . $id . "<br>
					 Nama pengguna 		: " . $nama_pengguna . "<br>
					 No HP 				: " . $hp . "<br>
					 Deskripsi 			: " . $deskripsi . "<br>
					 No Loker 			: " . $no_loker . "<br>
		";
		
}
?>