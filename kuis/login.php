<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<style>
		.tengah{
		position: absolute;
		margin-top: -200px;
		margin-left: -200px;
		left: 50%;
		top: 50%;
		width: 400px;
		height: 220px;
		background-color: black;
		}
	</style>
</head>
<body>
	<div align="center" class="tengah">
				<font face="verdana" size="2" color="white">
				<H2>Selamat Datang</H2>
				<form action=" " method="POST" enctype="multipart/form-data">
				
				Username
				</br>
				<input type="text" name="username"/>
				</br>
				Password
				</br>
				<input type="password" name="password" />
				</br>
				</br>
				<input type="submit" name="login" value="Login"/>
				</font>
				</form>
				</br>
				<div class="row">
				  <div class="col-md-offset-11" style="background-color:white;"><a href="checkstatusNonLogin.php">Check Status Barang</a></div>
				</div>
	</div>


<?php 		
	session_start();
	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sql="SELECT *FROM user where username='".$_POST['username']."' AND password='".$_POST['password']."'";
		$query=mysqli_query($con, $sql) or die (mysqli_error($con));
		
	if(mysqli_num_rows($query)){
		while($data=mysqli_fetch_assoc($query)){
			$_SESSION['login']=1;
			$_SESSION['name']=$data['nama_pengguna'];
			
			header('location:index.php');
			}
			
			}else{
				echo "*username atau password salah";
				}
			}
?> 
</body>
</html>