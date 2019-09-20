
<?php
include('../../config/koneksi.php');

// ambil dari url

// ambil dari database
$query = "SELECT * FROM kk JOIN klasifikasi_kk ON klasifikasi_kk.no_kk=kk.no_kk JOIN penduduk ON penduduk.nik=klasifikasi_kk.nik WHERE statuskk='KEPALA_KELUARGA'";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
