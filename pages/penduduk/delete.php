
<?php
include('../../config/koneksi.php');

// ambil data dari form
$id_warga = htmlspecialchars($_GET['nik']);

// delete database
$query = "DELETE FROM penduduk WHERE nik = $id_warga";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../penduduk'</script>";
} else {
  echo "<script>window.alert('Data warga gagal dihapus!'); window.location.href='../penduduk'</script>";
}