<!DOCTYPE html>
<html>
	<head>
	<title> contoh form</title>
	</head> 
	<form action = "" method="post">
		<p>Masukan id  
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="nama"></p>
		<p>Masukan password
			<input type="password" name="password"></p>
		<p><input type="submit" name="submit" value="Enter"></p>
		
		</form>
		<?php
			session_start();
			require('konek.php');
			if($_SERVER['REQUEST_METHOD']=="POST"){
						$sql="select *from user where id='".$_POST['nama']."'
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