<?php

include('../../config/koneksi.php');

// ambil data dari form

$id_mutasi = htmlspecialchars($_POST['id_mutasi']);
$nik = htmlspecialchars($_POST['nik']);
$alamat_sebelum = htmlspecialchars($_POST['alamat_sebelum']);
$alamat_tujuan = htmlspecialchars($_POST['alamat_tujuan']);
$tanggal_mutasi = htmlspecialchars($_POST['tanggal_mutasi']);
$alasan = htmlspecialchars($_POST['alasan']);
$status = htmlspecialchars($_POST['status']);

// masukkan ke database

$query = "INSERT INTO mutasi (id_mutasi ,nik, alamat_tujuan,alamat_sebelum, tanggal_mutasi, alasan) VALUES ('$id_mutasi','$nik',  '$alamat_tujuan', '$alamat_sebelum', '$tanggal_mutasi','$alasan');";
$hasil = mysqli_query($db, $query);

	$query2 = "UPDATE penduduk SET status='$status' WHERE penduduk.nik='$nik';";
	$hasil2 = mysqli_query($db, $query2);

	if ($hasil == true) {
  echo "<script>window.alert('Tambah warga berhasil'); window.location.href='../mutasi/'</script>";
} else {
  echo "<script>window.alert('Tambah warga gagal!'); window.location.href='../mutasi/'</script>";
}

// cek keberhasilan pendambahan data

