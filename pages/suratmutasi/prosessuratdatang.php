<?php
// membaca data dari form


// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents('../../surat/datang.rtf');
$data_nama = $_POST['nama'];
$data_ttl = $_POST['ttl'];
$data_alamat = $_POST['alamat'];
$data_addres = $_POST['addres'];
$data_tanggal = $_POST['tanggal'];
$data_alasan = $_POST['alasan'];
$data_surat = date('d-m-Y');
// document dokumen dinyatakan dalam bentuk string
	$document = str_replace('data_nama', $data_nama, $document);
	$document = str_replace('data_ttl', $data_ttl, $document);
	$document = str_replace('DATA_ADDRES', $data_alamat, $document);
	$document = str_replace('Data_alamat', $data_addres, $document);
	$document = str_replace('DT_TANGGAL', $data_tanggal, $document);
	$document = str_replace('DTA_ALASAN', $data_alasan, $document);
	$document = str_replace('data_surat', $data_surat, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=Surat_Datang.doc");
header("Content-length: ".strlen($document));
echo $document;
?>
