<?php


include('../../config/koneksi.php');

// ambil data dari form
$nik = htmlspecialchars($_POST['nik']);
$nik2 = htmlspecialchars($_POST['nik2']);
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

// masukkan ke database

$query = "UPDATE penduduk SET nik='$nik2', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', dusun='$dusun', rt='$rt',rw='$rw' ,jk='$jk', golongan_darah='$golongan_darah', alamat='$alamat', status_keluarga='$status_keluarga',status_perkawinan='$status_perkawinan', pekerjaan='$pekerjaan' ,pendidikan= '$pendidikan', kewarganegaraan='$kewarganegaraan',  agama='$agama', ayah= '$ayah', ibu='$ibu', status='$status' WHERE penduduk.nik = $nik;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah warga berhasil'); window.location.href='../penduduk/'</script>";
} else {
  echo "<script>window.alert('Tambah warga gagal!'); window.location.href='../penduduk/'</script>";
}
