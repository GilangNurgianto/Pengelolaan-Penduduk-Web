<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM penduduk WHERE status = '1' or status='2' or status='3'";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}