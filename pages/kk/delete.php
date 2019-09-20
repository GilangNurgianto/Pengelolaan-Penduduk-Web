
<?php
include('../../config/koneksi.php');

// ambil data dari form
$id_warga = htmlspecialchars($_GET['no_kk']);

// delete database
$query = "DELETE FROM kk WHERE no_kk = $id_warga";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../kk/'</script>";
} else {
  echo "<script>window.alert('Data warga gagal dihapus!'); window.location.href='../kk/'</script>";
}