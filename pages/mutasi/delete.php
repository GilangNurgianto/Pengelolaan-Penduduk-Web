<?php


include('../../config/koneksi.php');
include('data-index.php');

// ambil data dari form
$id_mutasi = htmlspecialchars($_GET['id_mutasi']);
$nik = $data_warga[0]['nik'];

$query2 = "UPDATE penduduk SET status='1' WHERE nik='$nik'";
$hasil2 = mysqli_query($db, $query2);

$query = "DELETE FROM mutasi WHERE id_mutasi = $id_mutasi"; 

$hasil = mysqli_query($db, $query);


// cek keberhasilan pendambahan data
if ($hasil2 == true) {
  echo "<script>window.location.href='../mutasi/'</script>";
} else {
  echo "<script>window.alert('Data warga gagal dihapus!'); window.location.href='../mutasi/'</script>";
}
 