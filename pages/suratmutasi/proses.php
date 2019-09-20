<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_warga = $_GET['id_mutasi'];

// ambil dari database
$query ="SELECT * FROM mutasi JOIN penduduk ON penduduk.nik=mutasi.nik WHERE id_mutasi = $get_id_warga";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
