<?php
include('../../config/koneksi.php');

// ambil data dari form
$nik = htmlspecialchars($_POST['nik']);
$nama = htmlspecialchars($_POST['nama']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
$dusun = htmlspecialchars($_POST['dusun']);

$rt = htmlspecialchars($_POST['rt']);
$rw = htmlspecialchars($_POST['rw']);
$jk = htmlspecialchars($_POST['jk']);
$golongan_darah = htmlspecialchars($_POST['golongan_darah']);
$alamat = htmlspecialchars($_POST['alamat']);
$status_keluarga = htmlspecialchars($_POST['status_keluarga']);
$status_perkawinan = htmlspecialchars($_POST['status_perkawinan']);
$pekerjaan = htmlspecialchars($_POST['pekerjaan']);
$pendidikan = htmlspecialchars($_POST['pendidikan']);
$kewarganegaraan = htmlspecialchars($_POST['kewarganegaraan']);

$agama = htmlspecialchars($_POST['agama']);
$ayah = htmlspecialchars($_POST['ayah']);
$ibu = htmlspecialchars($_POST['ibu']);
$status = '1' ;
$status_cari = '' ;

// masukkan ke database

$query = "INSERT INTO penduduk (nik, nama, tempat_lahir, tanggal_lahir, dusun, rt, rw, jk, golongan_darah, alamat, status_keluarga, status_perkawinan, pekerjaan,pendidikan, kewarganegaraan, agama, ayah, ibu, status,status_cari) VALUES ('$nik', '$nama',  '$tempat_lahir', '$tanggal_lahir','$dusun', '$rt', '$rw', '$jk', '$golongan_darah', '$alamat', '$status_keluarga', '$status_perkawinan', '$pekerjaan' , '$pendidikan', '$kewarganegaraan', '$agama', '$ayah', '$ibu' , '$status','$status_cari');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah warga berhasil'); window.location.href='../penduduk/'</script>";
} else {
  echo "<script>window.alert('Tambah warga gagal!'); window.location.href='../penduduk/'</script>";
}
