<?php


include('../../config/koneksi.php');

// ambil data dari form
$id_mati = htmlspecialchars($_GET['id_mati']);

$query2 = "UPDATE penduduk JOIN kematian ON kematian.nik=penduduk.nik SET status='1' WHERE kematian.nik=penduduk.nik;";
$hasil2 = mysqli_query($db, $query2);

$query = "DELETE FROM kematian WHERE id_mati = $id_mati"; 

$hasil = mysqli_query($db, $query);


// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../kematian/'</script>";
} else {
  echo "<script>window.alert('Data warga gagal dihapus!'); window.location.href='../kematian/'</script>";
}
 