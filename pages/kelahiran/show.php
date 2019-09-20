<?php
include('../../config/koneksi.php');

// ambil dari url
$get = $_GET['no_kk'];

// ambil dari database
$query ="select * from klasifikasi_kk JOIN penduduk ON penduduk.nik=klasifikasi_kk.nik where statuskk='ISTRI' AND no_kk like '%$get%'";
$query2 ="select * from klasifikasi_kk JOIN penduduk ON penduduk.nik=klasifikasi_kk.nik where statuskk='KEPALA_KELUARGA' AND no_kk like '%$get%'";
$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
$hasil2 = mysqli_query($db, $query2);

$data_warga2 = array();

while ($row2 = mysqli_fetch_assoc($hasil2)) {
  $data_warga2[] = $row2;
}
