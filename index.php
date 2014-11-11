<?php 
include "koneksi.php";
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){

	echo "<h2> Selama datang ".$_SESSION['name']. "</h2>";
	?>
	<ul>
	<a href="tambah.php"> Tambah Pengguna </a> <br>
	<a href="lihat.php"> Lihat Daftar Pengguna </a> <br>
	</ul>

<?php
}else{
	header('location: login.php');
}
?>
<a href ="logout.php"> Logout </a>