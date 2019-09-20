<?php
include('../../config/koneksi.php');

// ambil data dari form
$username = htmlspecialchars($_POST['username']);
$akses = htmlspecialchars($_POST['akses']);

$md5 = htmlspecialchars($_POST['password']);
$pass = md5($password);


// masukkan ke database

$query = "INSERT INTO user(username, password, akses) VALUES ('$username', '$pass',  '$akses');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah warga berhasil'); window.location.href='../master/'</script>";
} else {
  echo "<script>window.alert('Tambah warga gagal!'); window.location.href='../master/'</script>";
}
