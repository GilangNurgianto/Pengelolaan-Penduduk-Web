<?php

include('../../config/koneksi.php');

// ambil data dari form

$id_mutasi = htmlspecialchars($_POST['id_mutasi']);
$nik = htmlspecialchars($_POST['nik']);
$alamat_sebelum = htmlspecialchars($_POST['alamat']);
$alamat_tujuan = htmlspecialchars($_POST['alamat2']);
$tanggal_mutasi = htmlspecialchars($_POST['tanggal2']);
$alasan = htmlspecialchars($_POST['alasan']);
$status = '2';
$nama = htmlspecialchars($_POST['nama']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
$dusun = htmlspecialchars($_POST['dusun']);

$rt = htmlspecialchars($_POST['rt']);
$rw = htmlspecialchars($_POST['rw']);
$jk = htmlspecialchars($_POST['jk']);
$golongan_darah = htmlspecialchars($_POST['golongan_darah']);
$status_perkawinan = htmlspecialchars($_POST['status_perkawinan']);
$pekerjaan = htmlspecialchars($_POST['pekerjaan']);
$pendidikan = htmlspecialchars($_POST['pendidikan']);
$kewarganegaraan = htmlspecialchars($_POST['kewarganegaraan']);

$agama = htmlspecialchars($_POST['agama']);
$ayah = htmlspecialchars($_POST['ayah']);
$ibu = htmlspecialchars($_POST['ibu']);

$status = '2' ;

$status_cari = '' ;

// masukkan ke database


$query2 = "INSERT INTO penduduk (nik, nama, tempat_lahir, tanggal_lahir, dusun, rt, rw, jk, golongan_darah, alamat, status_keluarga, status_perkawinan, pekerjaan,pendidikan, kewarganegaraan, agama, ayah, ibu, status,status_cari) VALUES ('$nik', '$nama',  '$tempat_lahir', '$tanggal_lahir','$dusun', '$rt', '$rw', '$jk', '$golongan_darah', '$alamat_tujuan', '', '$status_perkawinan', '$pekerjaan' , '$pendidikan', '$kewarganegaraan', '$agama', '$ayah', '$ibu' , '$status','$status_cari');";

$hasil2= mysqli_query($db, $query2);

$query = "INSERT INTO mutasi (id_mutasi ,nik, alamat_tujuan,alamat_sebelum, tanggal_mutasi, alasan) VALUES ('$id_mutasi','$nik',   '$alamat_tujuan', '$alamat_sebelum','$tanggal_mutasi','$alasan');";
$hasil = mysqli_query($db, $query);

	if ($hasil2 == true) {
  echo "<script>window.alert('Tambah warga berhasil'); window.location.href='../mutasi/'</script>";
} else {
  echo "<script>window.alert('Tambah warga gagal!'); window.location.href='../mutasi/'</script>";
}

// cek keberhasilan pendambahan data

