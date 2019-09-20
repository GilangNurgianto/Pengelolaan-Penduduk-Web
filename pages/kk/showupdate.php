<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_warga = $_GET['no_kk'];

// ambil dari database
$query ="SELECT * FROM kk WHERE no_kk = $get_id_warga";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
