<?php 
include "koneksi.php";
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	echo "<h2> Selama datang ".$_SESSION['name']. "</h2>";
	?>

	<a href="tambah.php"> Tambah Pengguna </a> <br>

<?php
}else{
	header('location: login.php');
}
?>
<a href ="logout.php"> Locot </a>