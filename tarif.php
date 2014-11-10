<?php
include "koneksi.php";

	if(isset($_GET['id'])){
		$query = mysqli_query($con, "SELECT * from pengguna where id = '".$_GET['id']."'");
		$data = mysqli_fetch_assoc($query);
		$today = date("c");
		
		$selisih = strtotime($today) -  strtotime($data['waktu_mulai']);
		$tarif = ($selisih/60) * 1000;
		echo $selisih;
	}

?>