<?php
// membaca data dari form


// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents('../../surat/kelahiran.rtf');
$data_nama = $_POST['nama'];
$data_ttl = $_POST['ttl'];
$data_alamat= $_POST['alamat'];
$data_ayah = $_POST['ayah'];
$data_ibu = $_POST['ibu'];
$data_surat = date('d-m-Y');
// document dokumen dinyatakan dalam bentuk string
	$document = str_replace('=nama=', $data_nama, $document);
	$document = str_replace('=ttl=', $data_ttl, $document);
	$document = str_replace('=alamat=', $data_alamat, $document);
	$document = str_replace('=ayah=', $data_ayah, $document);
	$document = str_replace('=ibu=', $data_ibu, $document);
	$document = str_replace('=tglsurat=', $data_surat, $document);
// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=Surat_Kelahiran.doc");
header("Content-length: ".strlen($document));
echo $document;
?>
