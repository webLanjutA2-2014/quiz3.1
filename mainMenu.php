<?php
session_start();
if(!isset($_SESSION['login']))
	header('location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>MENU</title>
</head>

<body>
<h2>SELAMAT DATANG <?=$_SESSION['name']?></h2>
<h3>Pilih Menu</h3>
<p><a href="penitipan/menu.php">Sistem Penitipan</a></p>
<p><a href="cekBarang/inputId.php">Cek Bayar</a> <br></p>

<br>
<br>
<form action="" method="POST">
<input type="submit" value="LOGOUT">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	session_unset(); 
	session_destroy(); 
	header('location:login.php');
}
?>
</body>
</html>