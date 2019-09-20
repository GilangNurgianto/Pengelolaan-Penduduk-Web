<?php
include('../../config/koneksi.php');

// ambil data dari form

$username_user = htmlspecialchars($_POST['username_user']);
$password_user = md5(htmlspecialchars($_POST['password_user']));
$akses = htmlspecialchars($_POST['akses']);


// masukkan ke database

$query = "INSERT INTO user (id_admin, username, password, akses) VALUES ('', '$username_user', '$password_user', '$akses');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah  berhasil'); window.location.href='../master/'</script>";
} else {
  echo "<script>window.alert('Tambah  gagal!'); window.location.href='../master/tambah.php'</script>";
}
