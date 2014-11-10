<!DOCTYPE html>
<html>
<head>
	<title>barang</title>
</head>
<body>
<?php
	session_start();
	if((isset($_SESSION['login'])) && ($_SESSION['login'] ==  1)){
	echo "<h2>welkomen,".$_SESSION['username']."</h2>";
	echo "pilih menu <a href=\"index.php\">pengaturan barang</a>";
	echo " atau <a href=\"pengguna.php\">pengaturan pengguna</a>";
	
	echo "<br><a href=\"logout\">logout</a>";
	}else{
		header('location:login.php');
		
	}
	?>
</body>
</html>
