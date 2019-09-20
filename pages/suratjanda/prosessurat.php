<?php
// membaca data dari form


// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents('../../surat/suratjanda.rtf');
$data_nama = $_POST['nama'];
$data_nama_suami = $_POST['namasuami'];
$data_ttl = $_POST['ttl'];
$data_alamat = $_POST['alamat'];
$datatanggal= $_POST['tanggals'];
$data_jk= $_POST['jk'];
$data_jks= $_POST['jks'];
$data_status = $_POST['status'];
$datapekerjaan = $_POST['pekerjaan'];
$data_surat = date('d-m-Y');
// document dokumen dinyatakan dalam bentuk string
	$document = str_replace('_namasuami_', $data_nama_suami, $document);
	$document = str_replace('data_nama', $data_nama, $document);
	$document = str_replace('data_ttl', $data_ttl, $document);
	$document = str_replace('=datapekerjaan=', $datapekerjaan, $document);
	$document = str_replace('-dates-', $datatanggal, $document);
	$document = str_replace('=datajks=', $data_jks, $document);
	$document = str_replace('data_jk', $data_jk, $document);
	$document = str_replace('data_alamat', $data_alamat, $document);
	$document = str_replace('data_status', $data_status, $document);
	$document = str_replace('data_surat', $data_surat, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=Surat_Penguburan.doc");
header("Content-length: ".strlen($document));
echo $document;
?>
