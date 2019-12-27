<?php
session_start();

include_once "koneksi.php";

// menangkap data yang dikirim dari form bayar
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$tgl = $_POST['tgl'];
$waktu = $_POST['waktu'];
$nominal = $_POST['nominal'];
$file = $_POST['file'];


// menyeleksi data yang sesuai
$bayar = mysqli_query($mysqli,"SELECT * FROM bayar WHERE nis='nis' AND nama='$nama' AND kelas='$kelas' AND tgl='$tgl' AND waktu='$waktu' AND nominal='$nominal' AND file='$file'");
$row = mysqli_fetch_array($bayar);
// menghitung jumlah data yang ditemukan
if ($row['nis'] == $nis AND $row['nama'] == $nama AND $row['kelas'] == $kelas AND $row['tgl'] == $tgl AND $row['waktu'] == $waktu AND $row['nominal'] == $nominal AND $row['file'] == $file)
{
  $_SESSION['nis'] = $row['nis'];
  $_SESSION['nama'] = $row['nama'];
  $_SESSION['kelas'] = $row['kelas'];
  $_SESSION['tgl'] = $row['tgl'];
  $_SESSION['waktu'] = $row['waktu'];
  $_SESSION['nominal'] = $row['nominal'];
  $_SESSION['file'] = $row['file'];
  echo '<script language="javascript">
        alert ("Data sudah dikirim!");
        window.location = "form.php";
        </script>';
        exit();
}else {
  echo "FORM GAGAL DIKIRIM!!! <br> Lengkapi Data Diform!!";
  echo "<br>";
  echo "<input class='btn btn-blue' type=button value= 'ULANGI LAGI' onclick=location.href='form.php'>";
}

?>