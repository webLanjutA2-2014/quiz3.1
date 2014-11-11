
<?php
	require("koneksi.php");
	session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if ($_POST['id'] == null || $_POST['nama'] == null || $_POST['deskripsi'] == null || $_POST['loker'] == null) {
			# code...
			echo "sorry mas bro, harus diisi semua";
			echo "<br> <a href='lihat.php'> Daftar Pengguna </a>| <a href='tambah.php'> Tambah </a>";
		}else{
		$id = $_POST['id'];
		$nama_pengguna =$_POST['nama'];
		$hp =$_POST['hp'];
		$deskripsi =$_POST['deskripsi'];
		$no_loker = $_POST['loker'];
		$sql = "INSERT INTO `pengguna`(id, nama_pengguna, hp, deskripsi, no_loker, waktu_mulai) 
				VALUES ($id, '$nama_pengguna', '$hp', '$deskripsi', '$no_loker', now() )";
		mysqli_query($con, $sql) or die('Adda yang error bro!!!!'. mysqli_error($con));
		echo " <a href='lihat.php'> Daftar Pengguna </a>| <a href='tambah.php'> Tambah </a> <br>
		<strong> Penitipan Berhasil </strong> <br>";
		echo "<table>
				<tr>
					<td> Id pengguna</td> <td>: " . $id . "</td>
				</tr>
				<tr>
					 <td> Nama pengguna </td> <td>: " . $nama_pengguna . "</td>
				</tr>
				<tr>
					 <td> No HP </td> <td>: " . $hp . "</td>
				</tr>
				<tr>
					 <td> Deskripsi </td> <td>: " . $deskripsi . "</td>
				</tr>
				<tr>
					 <td> No Loker </td> <td>: " . $no_loker . "</td>
				</tr>
		";
		
}

}else{
	header('location: login.php');
}
}
?>