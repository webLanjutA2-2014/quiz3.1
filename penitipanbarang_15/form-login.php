<!DOCTYPE html>
<html>
	<head>
	<title> Daftar Penitipan Barang (Login)</title>
	</head> <!---kalau mengunakan get maka akan tampil nama dan password pada tab browser--->
	<body>
	<form action = "" method="post">
		<p>Masukan Username 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="nama"></p>
		<p>Masukan Password
			<input type="password" name="password"></p>
		<p><input type="submit" name="submit" value="Enter"></p>
		
		</form>
		<?php
			function cek_nama($data){
				if(!empty($data)){
				return false;
				}else{
				return true;
				}
			}
			//if(!empty($_POST))
			if($_SERVER['REQUEST_METHOD']=="post"){ //mengetahui post ayau bukan--->
				if(!empty($_POST['nama'])){
			//if($_POST['nama']!=""){
			//if(!empty($_POST['nama'])){
			if(!cek_nama($_POST['nama'])){
				echo "Selamat datang di penitipan Barang, ". $_POST['nama'];
				}else{
				echo "data harus diisi";
				}
				}else{
				echo "silahkan masukan data";
			}
		?>
	</body>
</html>