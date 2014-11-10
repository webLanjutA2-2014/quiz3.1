<H2>LOGIN OOMM</H2>
<form action=" " method="POST" enctype="multipart/form-data">
			<p>Masukkan username: <input type="text" name="username"></p>
			<p>Masukkan Password: <input type="password" name="password"></p>
			<p><input type="submit" value="Login"></p>
		</form>
		
		
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
				echo "username atau password salah";
				}
			}
	

?>