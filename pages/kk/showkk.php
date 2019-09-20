
<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * , klasifikasi_kk.nik as A FROM kk JOIN klasifikasi_kk ON klasifikasi_kk.no_kk=kk.no_kk AND klasifikasi_kk.statuskk='KEPALA_KELUARGA'";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
$hasil3=mysqli_fetch_array($hasil);
$query3 = "SELECT * FROM penduduk where nik='$hasil3[A]'";

$hasil2 = mysqli_query($db, $query3);

$data_warga2 = array();

while ($row2 = mysqli_fetch_assoc($hasil2)) {
  $data_warga2[] = $row2;

}
}
