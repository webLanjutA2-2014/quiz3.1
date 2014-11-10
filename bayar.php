<?php   
require('koneksi.php');
	$query = mysqli_query($con, "select * from nitip");
$waktu = $_POST['waktu'];  
  
  
//menghitung subtotal  
$subtotal = $waktu - now() * 1000 ;  
  
?>