<?php
include('../../config/koneksi.php');

// ambil data dari form
$id_kelahiran = htmlspecialchars($_POST['id_kelahiran']);
$id_kla = htmlspecialchars($_POST['id_kla']);
$no_kk = htmlspecialchars($_POST['no_kk']); 
$namaibu = htmlspecialchars($_POST['namaibu']);
$namaayah = htmlspecialchars($_POST['namaayah']);
$nik = htmlspecialchars($_POST['nik']);
$nikanak = htmlspecialchars($_POST['nikanak']);
$status= htmlspecialchars($_POST['status']);
$nama_anak = htmlspecialchars($_POST['nama_anak']);
$anak_ke= htmlspecialchars($_POST['anak_ke']);
$jk_anak = htmlspecialchars($_POST['jk_anak']);
$tgl_kelahiran = htmlspecialchars($_POST['tgl_kelahiran']);
$tempat_kelahiran = htmlspecialchars($_POST['tempat_kelahiran']);
$rt= htmlspecialchars($_POST['rt']);
$rw= htmlspecialchars($_POST['rw']);
$dusun= htmlspecialchars($_POST['dusun']);
$alamat= htmlspecialchars($_POST['alamat']);
$agama = htmlspecialchars($_POST['agama']);
$status_perkawinan= htmlspecialchars($_POST['status_perkawinan']);
$pendidikan= htmlspecialchars($_POST['pendidikan']);
$pekerjaan= htmlspecialchars($_POST['pekerjaan']);
$kewarganegaraan= htmlspecialchars($_POST['kewarganegaraan']);
$status1 = '1';


// masukkan ke database
$query2 = "INSERT INTO penduduk (nik, nama, tempat_lahir, tanggal_lahir, dusun, rt, rw, jk, golongan_darah, alamat, status_keluarga, status_perkawinan, pekerjaan,pendidikan, kewarganegaraan, agama, ayah, ibu, status,status_cari) VALUES ('$nikanak', '$nama_anak',  '$tempat_kelahiran', '$tgl_kelahiran','$dusun', '$rt', '$rw', '$jk_anak', '', '$alamat', '$status', '$status_perkawinan', '$pekerjaan' , '$pendidikan', '$kewarganegaraan', '$agama', '$namaayah', '$namaibu' , '$status1','');";


$hasil2 = mysqli_query($db, $query2);
$query3 = "INSERT INTO klasifikasi_kk (id_kla, no_kk,nik,statuskk) VALUES ('$id_kla', '$no_kk','$nikanak', '$status');";
$hasil3 = mysqli_query($db, $query3);



$query = "INSERT INTO kelahiran (id_kelahiran, nik, nama_anak, anak_ke, jk_anak, tgl_kelahiran, tempat_kelahiran) VALUES ('$id_kelahiran', '$nik', '$nama_anak', '$anak_ke', '$jk_anak', '$tgl_kelahiran','$tempat_kelahiran');";


$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah Kelahiran berhasil'); window.location.href='../kelahiran/'</script>";
} else {
  echo "<script>window.alert('Tambah kelahiran gagal!'); window.location.href='../kelahiran/'</script>";
}
