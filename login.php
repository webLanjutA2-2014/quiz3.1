<!DOCTYPE html>
<html>
	<head>
	<title> contoh form</title>
	</head> <!---kalau mengunakan get maka akan tampil nama dan password pada tab browser--->
	<body>
	<form action = "" method="post">
		<p>Masukan Nama  
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="nama"></p>
		<p>Masukan Password
			<input type="password" name="password"></p>
		<p><input type="submit" name="submit" value="Enter"></p>
		
		</form>
		<?php
			session_start();
			require('konek.php');
			if($_SERVER['REQUEST_METHOD']=="POST"){
						$sql="select *from pengguna where nama ='".$_POST['nama']."'
						and password='".$_POST['password']."'";
				$query=mysqli_query($con, $sql)or die(mysqli_error($con));
				if(mysqli_num_rows($query)){
					while($row=mysqli_fetch_assoc($query)){
						$_SESSION['login']  = 1;
						$_SESSION['username']  = $row['nama'];
						
						echo "berhasil";
						
						header('location:menu.php');
					}
				}else{
					echo "username atau password anda salah";
				}
			}
			
		?>
		
	</body>
</html>