
<?php
include('../../config/koneksi.php');

// ambil data dari form
$id_warga = htmlspecialchars($_GET['id_admin']);

// delete database
$query = "DELETE FROM admin WHERE id_admin = $id_warga";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../master/'</script>";
} else {
  echo "<script>window.alert('Data warga gagal dihapus!'); window.location.href='../master/'</script>";
}