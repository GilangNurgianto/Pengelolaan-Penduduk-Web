<?php
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT");
header("content-disposition: attachment;filename=Laporan_data_penduduk_desa_pangkalan.doc");
?>

<?php include('../mode/hitung.php') ?>

<center><h2>Laporan Data Penduduk Desa Pangkalan</h2></center>
<table border='1'>
<h3>
<thead><tr>
<td width=5 align="center">No.</td>
<td width=150 align="center">NIK</td>
<td width=200 align="center">Nama</td>
<td width=100 align="center">Tempat Tanggal Lahir</td>
<td width=70 align="center">Dusun</td>
<td width=80 align="center">RT / RW</td>
<td width=100 align="center">Jenis Kelamin</td>
<td width=70 align="center">Darah</td>
<td width=100 align="center">Pendidikan</td>
<td width=150 align="center">Pekerjaan</td>
<td width=100 align="center">Agama</td> 
<td width=100 align="center">Status</td>
</tr></thead>
</h3> 
<h4>
<tbody>

 		<?php 
        mysql_connect("localhost","root","");
        mysql_select_db("desa_pangkalan");


        $query = "SELECT * FROM penduduk WHERE status='1' or status='2' ";
        $hasil = mysql_query($query);
        $no= 0;
        while ($data = mysql_fetch_array($hasil)) {
          $no++;
          echo "
        <tr>
          <th>".$no."</th>
          <th>".$data['nik']."</th>
          <th>".$data['nama']."</th>
          <th>".$data['tempat_lahir'].",".$data['tanggal_lahir']."</th>
          <th>".$data['dusun']."</th>
          <th>".$data['rt']." / ".$data['rw']."</th>
          <th>".$data['jk']."</th>
          <th>".$data['golongan_darah']."</th>
          <th>".$data['pendidikan']."</th>
          <th>".$data['pekerjaan']."</th>
          <th>".$data['agama']."</th>
          <th>".$data['status_keluarga']."</th>
        </tr>";
        }
      ?>
</tbody></h4></table><br><br>
<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Penduduk <?php echo $jumlah_penduduk['total'] ?> orang</dt>
  </dl>
  </div>