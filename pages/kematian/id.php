<?php

include('../../config/koneksi.php');

// ambil data dari form

$id_mati = htmlspecialchars($_POST['id_mati']);
$nik = htmlspecialchars($_POST['nik']);
$hari = htmlspecialchars($_POST['hari']);
$tgl_mati = htmlspecialchars($_POST['tgl_mati']);
$jam = htmlspecialchars($_POST['jam']);
$menit = htmlspecialchars($_POST['menit']);
$tempat_makam = htmlspecialchars($_POST['tempat_makam']);
$tempat_meninggal = htmlspecialchars($_POST['tempat_meninggal']);
$penyebab = htmlspecialchars($_POST['penyebab']);
// masukkan ke database

$query = "INSERT INTO kematian (id_mati,nik, hari,tgl_mati, waktu, tempat_makam, tempat_meninggal, penyebab) VALUES ('$id_mati','$nik', '$hari',  '$tgl_mati', '$jam.$menit WIB', '$tempat_makam','$tempat_meninggal','$penyebab');";
$hasil = mysqli_query($db, $query);

	$query2 = "UPDATE penduduk SET status='4' WHERE penduduk.nik='$nik';";
	$hasil2 = mysqli_query($db, $query2);

	if ($hasil == true) {
  echo "<script>window.alert('Tambah warga berhasil'); window.location.href='../kematian/'</script>";
} else {
  echo "<script>window.alert('Tambah warga gagal!'); window.location.href='../kematian/'</script>";
}

// cek keberhasilan pendambahan data

