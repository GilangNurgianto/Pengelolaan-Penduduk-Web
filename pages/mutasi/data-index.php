
<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM mutasi JOIN penduduk ON penduduk.nik=mutasi.nik";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}