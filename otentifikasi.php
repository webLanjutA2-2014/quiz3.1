<?php
session_start();
require('koneksi.php');

//$username = $_POST['username'];
//$password = $_POST['password'];

if (empty($_POST['username']) && empty($_POST['password'])) {
	//kalau username dan password kosong
	header('location:login.php?error=1');
	break;
} else if (empty($_POST['username'])) {
	//kalau username saja yang kosong
	header('location:login.php?error=2');
	break;
} else if (empty($_POST['password'])) {
	//kalau password saja yang kosong
	header('location:login.php?error=3');
	break;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sql="SELECT *FROM user where username='".$_POST['username']."' AND password='".$_POST['password']."'";
		
		$query=mysqli_query($con, $sql) or die (mysqli_error($con));

//$q = mysql_query("select * from user where username='$username' and password='$password'");

if (mysql_num_rows($query) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['login']=1;

	$_SESSION['username'] = $username;
	
	//redirect ke halaman index
	header('location:index.php');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login.php?error=4');
}
}
?>