<?php
// membaca data dari form


// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents('../../surat/kematian.rtf');
$data_nama = $_POST['nama'];
$data_ttl = $_POST['ttl'];
$data_pekerjaan = $_POST['pekerjaan'];
$data_alamat = $_POST['alamat'];
$data_tanggal = $_POST['tanggal'];
$data_waktu= $_POST['waktu'];
$data_meninggal = $_POST['meninggal'];
$data_makam = $_POST['makam'];
$data_surat = date('d-m-Y');
// document dokumen dinyatakan dalam bentuk string
	$document = str_replace('data_nama', $data_nama, $document);
	$document = str_replace('data_ttl', $data_ttl, $document);
	$document = str_replace('data_pekerjaan', $data_pekerjaan, $document);
	$document = str_replace('data_alamat', $data_alamat, $document);
	$document = str_replace('data_tanggal', $data_tanggal, $document);
	$document = str_replace('data_waktu', $data_waktu, $document);
	$document = str_replace('data_meninggal', $data_meninggal, $document);
	$document = str_replace('data_makam', $data_makam, $document);
	$document = str_replace('data_surat', $data_surat, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=Surat_Kematian.doc");
header("Content-length: ".strlen($document));
echo $document;
?>
