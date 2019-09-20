<?php
include('../../config/koneksi.php');
$query_pendatang = "SELECT COUNT(*) AS total FROM penduduk WHERE status = '2'";
$hasil_pendatang = mysqli_query($db, $query_pendatang);
$jumlah_pendatang = mysqli_fetch_assoc($hasil_pendatang);

$query_pindah = "SELECT COUNT(*) AS total FROM penduduk WHERE status = '3'";
$hasil_pindah= mysqli_query($db, $query_pindah);
$jumlah_pindah = mysqli_fetch_assoc($hasil_pindah);

$query_penduduk = "SELECT COUNT(*) AS total FROM penduduk WHERE status = '1' or status='2'";
$hasil_penduduk= mysqli_query($db, $query_penduduk);
$jumlah_penduduk = mysqli_fetch_assoc($hasil_penduduk);

$query_mati = "SELECT COUNT(*) AS total FROM penduduk WHERE status = '4'";
$hasil_mati= mysqli_query($db, $query_mati);
$jumlah_mati = mysqli_fetch_assoc($hasil_mati);

$query_kk = "SELECT COUNT(*) AS total FROM kk";
$hasil_kk= mysqli_query($db, $query_kk);
$jumlah_kk = mysqli_fetch_assoc($hasil_kk);

$query_kelahiran = "SELECT COUNT(*) AS total FROM kelahiran";
$hasil_kelahiran= mysqli_query($db, $query_kelahiran);
$jumlah_lahir = mysqli_fetch_assoc($hasil_kelahiran);





?>