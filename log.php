<?php
session_start();
$sql="SELECT *FROM user where username='".$_POST['username']."' AND password='".$_POST['password']."'";

$query=mysqli_query($con, $sql) or die (mysqli_error($con));

$data=mysql_fetch_assoc($query);


$_SESSION['namauser'] = $data['username'];

if(!isset($_SESSION['namauser'])){
    //jika session belum di set/register
    die("Anda belum login");
}

?>