
<?php
	require("koneksi.php");
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	
	$id = $_GET['id'];
	$sql = "UPDATE `penitipan`.`pengguna` SET `waktu_selesai` = now(), `diambil` = '1' WHERE `pengguna`.`id` =". $id."";
	mysqli_query($con, $sql) or die('error PRET!!!!'. mysqli_error($con));

	function tarif ($id, $con){

		$q = "SELECT TIMESTAMPDIFF(MINUTE, waktu_mulai, waktu_selesai) as lama FROM pengguna WHERE id = $id";
		$s = mysqli_query($con, $q);
		$a = mysqli_fetch_array($s);
		$tarif = $a['lama'] * (1000/60);
		$up = mysqli_query($con, "UPDATE `penitipan`.`pengguna` SET tarif = $tarif WHERE `pengguna`.`id` =". $id."");
	}

	tarif($id, $con);

	
	
	header('location:detail.php?&id='.$id.'');
	}else{
	header('location: login.php');
}
?>
?>