<?php
session_start();
include('../../config/koneksi.php');

// ambil data
$username_user = $db->real_escape_string($_POST['username_user']);
$password_user = $db->real_escape_string($_POST['password_user']);

// periksa username dan password
$query = "SELECT * FROM admin WHERE username = '$username_user' and password = '$password_user'";
$hasil = $db->query( $query);
$hitung = $hasil ->num_rows;

// cek
if ($hitung) {
	$cetak = $hasil->fetch_assoc();
	extract($cetak);

  $_SESSION['user'] = $username;
  $_SESSION['akses'] = $akses;
   if($akses == 2){
   	echo "<script> window.location.href='../dasbor/'</script>";
   }elseif($akses == 1){
   	echo "<script> window.location.href='../dasbor/index2.php'</script>";
   }
} else {
  // jika user dan password tidak cocok
  echo "<script>window.alert('Username atau password salah'); window.location.href='../login/'</script>";
}

