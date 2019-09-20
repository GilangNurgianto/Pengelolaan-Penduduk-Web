<?php


include('../../config/koneksi.php');

// ambil data dari form

$id_kla = htmlspecialchars($_POST['id_kla']);
$no_kk = htmlspecialchars($_POST['no_kk']);
$nikbaru = htmlspecialchars($_POST['nikbaru']);
$statuskk = htmlspecialchars($_POST['statuskk']);
$status_cari = '1';

// masukkan ke database

$query3 = "UPDATE penduduk SET status_cari = '$status_cari' WHERE nik='$nikbaru'";
$hasil3 = mysqli_query($db, $query3);

$query2 = "INSERT INTO klasifikasi_kk (id_kla, no_kk,nik,statuskk) VALUES ('$id_kla', '$no_kk','$nikbaru', '$statuskk');";
$hasil2 = mysqli_query($db, $query2);
	if ($hasil2 == true) {
  echo "<script>window.alert('Tambah kk berhasil'); window.location.href='detailkk.php?no_kk=$no_kk'</script>";
} else {
  echo "<script>window.alert('Tambah kk gagal!'); window.location.href='../kk/'</script>";
}

// cek keberhasilan pendambahan data

