
 <?php include('../mode/top2.php') ?>

<?php include('show.php') ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <br>
              
             
               
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Data Kartu Keluarga <?php echo $data_warga[0]['no_kk'] ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-6">

      <table class="table table-bordered">
          <tr>
              <th width="180">No KK</th>
              <td><?php echo $data_warga[0]['no_kk'] ?></td>
          </tr>
          <tr>
              <th>Dusun</th>
              <td><?php echo $data_warga[0]['dusun'] ?></td>
          </tr>
          <tr>
              <th>RT / RW</th>
              <td><?php echo $data_warga[0]['rt'] ?> / <?php echo $data_warga[0]['rw'] ?></td>
          </tr>
           <tr>
              <th>Desa</th>
              <td><?php echo $data_warga[0]['alamat'] ?></td>
          </tr>
           
      </table>
    </div>
    <div class="col-md-6">
    
      <table class="table table-bordered">

      <?php
      mysql_connect("localhost","root","");
        mysql_select_db("desa_pangkalan");
    $get = $_GET['no_kk'];

// ambil dari database
$query ="SELECT * FROM kk  WHERE no_kk = '$get'";

   $hasil = mysql_query($query);
        while ($data = mysql_fetch_array($hasil)) {
          echo
          "<tr>
              <th>Kecamatan</th>
              <td>".$data['kec']."</td>
          </tr>
          <tr>
              <th>Kabupaten</th>
              <td>".$data['kab']."</td>
          </tr>
          <tr>
              <th>Provinsi</th>
              <td>".$data['provinsi']."</td>
          </tr>
          <tr>
              <th>Kodepos</th>
              <td>".$data['kodepos']."</td>
          </tr>
          
          </tr>";
        }
          ?>
      </table>
      
    </div>


    <div class="col-md-12">
    <a href="riwayat2.php?no_kk=<?php echo $data_warga[0]['no_kk']; ?>"><button type="button" class="btn btn-primary">riwayat kk</button></a>
      <table class="table table-bordered">
        <tr>
          <td>NO</td>
          <td>Nik</td>
          <td>Nama</td>
          <td>Tgl Lahir</td>
          <td>Status</td>
          <td>Pekerjaan</td>
          <td>agama</td>
        </tr>
        <?php 
        mysql_connect("localhost","root","");
        mysql_select_db("desa_pangkalan");
        $get = $_GET['no_kk'];


        $query = "SELECT * FROM klasifikasi_kk JOIN penduduk ON penduduk.nik=klasifikasi_kk.nik WHERE no_kk='$get' AND status='1' OR status='2'";
        $hasil = mysql_query($query);
        $no= 0;
        while ($data = mysql_fetch_array($hasil)) {
          $no++;
          echo "
        <tr>
          <th>".$no."</th>
          <th>".$data['nik']."</th>
          <th>".$data['nama']."</th>
          <th>".$data['tanggal_lahir']."</th>
          <th>".$data['statuskk']."</th>
          <th>".$data['pekerjaan']."</th>
          <th>".$data['agama']."</th>
        </tr>";
        }
      ?>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>

<?php include('../mode/bottom.php') ?>