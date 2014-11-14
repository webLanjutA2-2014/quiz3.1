<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<H2>Selamat Datang</H2>
<form action=" " method="POST" enctype="multipart/form-data">
  <table>
    <tr>
      <td>Username : </td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td>Password : </td>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
    	<td><input type="submit" value="Login"></td>
    </tr>
  </table>
</form>

<?php 		
	session_start();
	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sql="SELECT *FROM user where username='".$_POST['username']."' AND password='".$_POST['password']."'";
		echo $_POST['username'];
		echo $_POST['password'];
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
</body>
</html>