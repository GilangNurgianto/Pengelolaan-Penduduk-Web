<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_warga = $_GET['id_mati'];

// ambil dari database
$query = "SELECT * FROM kematian JOIN penduduk ON penduduk.nik=kematian.nik WHERE id_mati = $get_id_warga";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
