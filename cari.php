<?php  
	
			require('koneksi.php');
    /* Membuat Form Untuk pencarian */      ?>
	<form id="form1" name="form1" method="post" action="">
	<div align="center">
	<input name="cari" type="text" id="cari" size="50" />
	<input type="submit" name="Submit" value="Pencarian" />
	</div>
	</form> <br/><br/>
<?
	/* Membuat fungsi untuk pencarian data pada database */
	$cari=$_POST['cari'];
	if(!empty($cari)){
	?><p align="center"><strong>HASIL PENCARIAN BEDASARKAN NAMA</strong></p>
	<p><?
	$lissiswa="SELECT * FROM 'penitipan'.'nitip' WHERE id LIKE '%$cari%'";
	echo "<li>$hasil[nama_buku]</li>";

?>
