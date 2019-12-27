<?php
session_start();
include "koneksi.php";

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
$kodecaptcha = $_POST['kodecaptcha'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($mysqli,"SELECT * FROM login WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);
// menghitung jumlah data yang ditemukan
if ($cek>0){
  $data = mysqli_fetch_array($login);

if($kodecaptcha != $_SESSION["code"] OR $_SESSION["code"] == ''){
        echo '<script language="javascript">
        alert ("Kode captcha Salah!");
        window.location = "Login.php";
        </script>';
        exit();
}
elseif ($kodecaptcha = $_SESSION["code"] ) {
  # code...
  $_SESSION['username'] = $cek['username'];
  $_SESSION['password'] = $cek['password'];
  header('location:main.php');
} 
else{
   echo '<script language="javascript">
        alert ("Username atau Password Salah!");
        window.location = "Login.php?pesan=gagal";
        </script>';
        exit();
}
}
?>