<?php
include('../../config/koneksi.php');
     $query ="SELECT * FROM penduduk JOIN kk ON kk.nik=penduduk.nik WHERE kk.nik=penduduk.nik";

      $hasil = mysqli_query($db, $query);

      $data_warga = array();

      while ($row = mysqli_fetch_assoc($hasil)) {
      $data[]= $row;
      }