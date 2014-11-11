	<form accept-charset="UTF-8" role="form" method="POST">
<fieldset align="center">
	<h3> Login Petugas </h3>
	<div class="form-group">
		<input class="form-control" placeholder="E-Mail" name="username" type="text">
	</div>
	<div class="form-group">
		<input class="form-control" placeholder="Password" name="password" type="password" value="">
	</div>
	
	<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
	<br>Untuk cek tarif klik <a href="cek_tarif.php">disini </a>
</fieldset>
</form>



<?php include"koneksi.php"; 
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$sql = "select * from petugas
				where username= '".$_POST['username']. "' AND password ='" .$_POST['password']."'";
				
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		if(mysqli_num_rows($query)){
			while($data = mysqli_fetch_assoc($query)){
				echo $data['nama'];
				$_SESSION['login'] = 1;
				$_SESSION['name'] = $data['nama'];
				header('location:index.php');
			}
		}
		else{
				echo"salah";
			
		}
	}
?>
