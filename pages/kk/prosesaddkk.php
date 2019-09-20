<?php


include('../../config/koneksi.php');

// ambil data dari form

$id_kla = htmlspecialchars($_POST['id_kla']);
$no_kk = htmlspecialchars($_POST['no_kk']);
$nikbaru = htmlspecialchars($_POST['nik']);
$kecamatan = htmlspecialchars($_POST['kecamatan']);
$kabupaten = htmlspecialchars($_POST['kabupaten']);
$provinsi = htmlspecialchars($_POST['provinsi']);
$kodepos = htmlspecialchars($_POST['kodepos']);
$status = htmlspecialchars($_POST['status']);

// masukkan ke database

$query3 = "UPDATE penduduk SET status_cari = '1' WHERE nik='$nikbaru'";
$hasil3 = mysqli_query($db, $query3);
$query = "INSERT INTO kk (no_kk, kec,kab,provinsi,kodepos) VALUES ('$no_kk', '$kecamatan','$kabupaten', '$provinsi','$kodepos');";
$hasil = mysqli_query($db, $query);
$query2 = "INSERT INTO klasifikasi_kk (id_kla, no_kk,nik,statuskk) VALUES ('$id_kla', '$no_kk','$nikbaru', '$status');";
$hasil2 = mysqli_query($db, $query2);
	if ($hasil3 == true) {
  echo "<script>window.alert('Tambah kk berhasil'); window.location.href='../kk/'</script>";
} else {
  echo "<script>window.alert('Tambah kk gagal!'); window.location.href='../kk/'</script>";
}

// cek keberhasilan pendambahan data

