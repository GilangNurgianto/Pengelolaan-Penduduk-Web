<?php


include('../../config/koneksi.php');

// ambil data dari form

$no_kkbaru = htmlspecialchars($_POST['no_kkbaru']);
$no_kk= htmlspecialchars($_POST['no_kk']);
// masukkan ke database

$query3 = "UPDATE kk SET no_kk= '$no_kkbaru' where no_kk='$no_kk'";
$hasil3 = mysqli_query($db, $query3);
  if ($hasil3 == true) {
  echo "<script>window.alert('Update kk berhasil'); window.location.href='../kk/'</script>";
} else {
  echo "<script>window.alert('Update kk gagal!'); window.location.href='../kk/'</script>";
}

// cek keberhasilan pendambahan data

