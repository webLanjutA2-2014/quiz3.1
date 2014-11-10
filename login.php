<?php
	session_start();
	//if(isset($_SESSION['login']))
	//{
	//	header('location:mainMenu.php');
	//}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h1>LOGIN PENGGUNA</h1>
	<form action="" method="POST">
		<p>USERNAME   : <input type="text" name="username"></p>
		<p>PASSWORD : <input type="password" name="password"></p>
		<p><input type="submit" value="Login"></p>
	</form>

	<h1>CEK BARANG</h1>
	<p><a href="cekBarang/inputId.php">Halaman Cek Barang</a></p>
<?php
	require_once("include/koneksi.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'";
		
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		
		if(mysqli_num_rows($query))
		{
			while($data = mysqli_fetch_assoc($query))
			{
				$_SESSION['login'] = 1;
				$_SESSION['name'] = $data['username'];
			}
			
			header('location:mainMenu.php');
		}
		else
		{
			echo "EMAIL atau PASSWORD anda SALAH!";
		}
	}

?>
	
	
</body>
</html>