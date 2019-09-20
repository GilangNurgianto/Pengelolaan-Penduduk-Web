<?php
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT");
header("content-disposition: attachment;filename=Laporan_data_penduduk_melahirkan_desa_pangkalan.doc");
?>
<?php include('../mode/hitung.php') ?>
<center><h2>Laporan Penduduk Melahirkan Desa Pangkalan</h2></center>
<table border='1' align="center">
<h3>
<thead><tr>
<td width=5 align="center">No.</td>
<td width=200 align="center">NIK</td>
<td width=200 align="center">Nama</td>
<td width=200 align="center">Nama anak</td>
<td width=200 align="center">Anak Ke</td>
<td width=200 align="center">tanggal lahir anak</td>
<td width=200 align="center">Jenis Kelamin anak</td>
<td width=200 align="center">Tempat Lahir</td>
</tr></thead>
</h3>
<h4>
<tbody> 

    <?php 
        mysql_connect("localhost","root","");
        mysql_select_db("desa_pangkalan");


        $query = "SELECT * FROM kelahiran JOIN penduduk ON penduduk.nik=kelahiran.nik ";
        $hasil = mysql_query($query);
        $no= 0;
        while ($data = mysql_fetch_array($hasil)) {
          $no++;
          echo "
        <tr>
          <th>".$no."</th>
          <th>".$data['nik']."</th>
          <th>".$data['nama']."</th>
          <th>".$data['nama_anak']."</th>
          <th>".$data['anak_ke']."</th>
          <th>".$data['tgl_kelahiran']."</th>
          <th>".$data['jk_anak']."</th>
          <th>".$data['tempat_kelahiran']."</th>
        </tr>";
        }
      ?>
</tbody></h4></table><br><br>
<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Penduduk Melahirkan <?php echo $jumlah_lahir['total'] ?> orang</dt>
  </dl>
  </div>
