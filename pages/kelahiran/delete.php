
<?php
include('../../config/koneksi.php');

// ambil data dari form
$id_warga = htmlspecialchars($_GET['id_kelahiran']);

// delete database
$query = "DELETE FROM kelahiran WHERE id_kelahiran = $id_warga";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../kelahiran/'</script>";
} else {
  echo "<script>window.alert('Data warga gagal dihapus!'); window.location.href='../kelahiran/'</script>";
}