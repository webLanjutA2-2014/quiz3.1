<!DOCTYPE html>
<html>
	<head>
	<title> form login</title>
	</head> <!---kalau mengunakan get maka akan tampil nama dan password pada tab browser--->
	<body>
	<form action = "" method="post">
		<p>Masukan id  
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="id"></p>
		<p>Masukan nama
			<input type="text" name="nama_pengguna"></p>
		<p><input type="submit" name="submit" value="Enter"></p>
		
		</form>
		<?php
			session_start();
			require('konek.php');
			if($_SERVER['REQUEST_METHOD']=="POST"){
						$sql="select *from user where id='".$_POST['id']."'
						and password='".$_POST['nama_pengguna']."'";
				$query=mysqli_query($con, $sql)or die(mysqli_error($con));
				if(mysqli_num_rows($query)){
					while($row=mysqli_fetch_assoc($query)){
						$_SESSION['login']  = 1;
						$_SESSION['username']  = $row['nama_pengguna'];
						
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