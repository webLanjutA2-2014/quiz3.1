<!DOCTYPE html>
<html>
	<head>
	<title>Form Login</title>
	</head> 
	<form action = "" method="post">
		<h2>Form Login </h2>
		<p>User  
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="nama"></p>
		<p>Password
			<input type="password" name="password"></p>
		<p><input type="submit" name="submit" value="Enter"></p>
		
		</form>
		<?php
			session_start();
			require('sambung.php');
			if($_SERVER['REQUEST_METHOD']=="POST"){
						$sql="select *from user where idPetugas='".$_POST['nama']."'
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
					echo "Maaf Password yang anda masukkan salah";
				}
			}
			
		?>
		
	</body>
</html>