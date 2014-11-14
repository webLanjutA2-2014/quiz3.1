<!DOCTYPE html>
<html>
	<head>
	<title>form Login</title>
	</head> 
	<body>
	<form action = "" method="post">
		<p>Masukan Id
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="id"></p>
		<p>Masukan Password
			<input type="password" name="password"></p>
		<p><input type="submit" name="submit" value="Enter"></p>
		
		</form>
		<?php
			session_start();
			require('sambung.php');
			if($_SERVER['REQUEST_METHOD']=="POST"){
						$sql="select *from petugas where idPetugas='".$_POST['id']."'
						and password='".$_POST['password']."'";
				$query=mysqli_query($con, $sql)or die(mysqli_error($con));
				if(mysqli_num_rows($query)){
					while($row=mysqli_fetch_assoc($query)){
						$_SESSION['login']  = 1;
						$_SESSION['username']  = $row['nama_pengguna'];
						
						echo "berhasil";
						header('location:pengguna.php');
						
					}
				}else{
					echo "username atau password anda salah";

				}
			}
			
		?>
		
	</body>
</html>