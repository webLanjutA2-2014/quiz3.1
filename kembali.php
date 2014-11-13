
<?php
	require("koneksi.php");
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	
	$id = $_GET['id'];
	$sql = "UPDATE 'penitipan'.'nitip' SET 'waktu_selesai' = now(), 'diambil' = '1' WHERE 'nitip'.'id' =". $id."";
	mysqli_query($con, $sql) or die('error '. mysqli_error($con));

	function tarif ($id, $con){

		$q = "SELECT TIMESTAMPDIFF(MINUTE, waktu, waktu_selesai) as lama FROM nitip WHERE id = $id";
		$s = mysqli_query($con, $q);
		$a = mysqli_fetch_array($s);
		$tarif = $a['lama'] * (1000/60);
		$up = mysqli_query($con, "UPDATE `penitipan`.`nitip` SET tarif = $tarif WHERE `nitip`.`id` =". $id."");
	}

	tarif($id, $con);

	
	
	header('location:cari2.php?&id='.$id.'');
	}
?>
?>