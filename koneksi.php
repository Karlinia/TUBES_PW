<?php


$Host = 'localhost';
$dbName = 'spp';
$username = 'root';
$password = '';

$mysqli = mysqli_connect($Host, $username, $password, $dbName);

if(mysqli_connect_errno()){
	echo "Koneksi database gagal : " .
		mysqli_connect_error();
}
?>