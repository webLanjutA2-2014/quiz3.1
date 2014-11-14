<!DOCTYPE html>
<html>
	<head>
	<title> contoh form</title>
	</head> 
	<body>
		<td><h2 align="center">Masukan Data Admin</h2></td>
	<form action = "" method="post">
		<table align="center"; margin="100">
		<td align="left">Masukan id  </td>
			<td align="right"><input type="text" name="nama"></td>
			<tr>
		    <td align="left">Masukan nama</td>
			<td align="right"><input type="password" name="password"></td>
			<tr>
		<td align="right"><input type="submit" name="submit" value="Enter">
		
		</form>
		<?php
			session_start();
			require('koneksi.php');
			if($_SERVER['REQUEST_METHOD']=="POST"){
						$sql="select *from admin where nama='".$_POST['nama']."'
						and password='".$_POST['password']."'";
				$query=mysqli_query($con, $sql)or die(mysqli_error($con));
				if(mysqli_num_rows($query)){
					while($row=mysqli_fetch_assoc($query)){
						$_SESSION['login']  = 1;
						$_SESSION['username']  = $row['password'];
						
						echo "berhasil";
						header('location:index.php');
						
					}
				}else{
					echo "username atau password anda salah";

				}
			}
			
		?>
		
	</body>
</html>