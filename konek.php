<?php 
		$host='localhost';
		$dbname='vancouver';
		$user='root';
		$pass='';
		
		//membuat koneksi
		$con = mysqli_connect($host, $user, $pass, $dbname);
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		}
		?>