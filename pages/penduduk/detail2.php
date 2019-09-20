
 <?php include('../mode/top2.php') ?>

<?php include('show.php') ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <br>
              
               <a href="../penduduk/index2.php"><button type="button" class="btn btn-primary">Kembali</button></a>
               
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
                    <h2>Detail Data <?php echo $data_warga[0]['nama'] ?></h2>
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
              <th width="180">NIK</th>
              <td><?php echo $data_warga[0]['nik'] ?></td>
          </tr>
          <tr>
              <th>Nama</th>
              <td><?php echo $data_warga[0]['nama'] ?></td>
          </tr>
          <tr>
              <th>Tempat Lahir</th>
              <td><?php echo $data_warga[0]['tempat_lahir'] ?></td>
          </tr>
           <tr>
              <th>Tanggal Lahir</th>
              <td><?php echo $data_warga[0]['tanggal_lahir'] ?></td>
          </tr>
           <tr>
              <th>Jenis Kelamin</th>
              <td><?php echo $data_warga[0]['jk'] ?></td>
          </tr>
          <tr>
              <th>Golongan Darah</th>
              <td><?php echo $data_warga[0]['golongan_darah'] ?></td>
          </tr>
      </table>
    </div>
    <div class="col-md-6">
      <table class="table table-bordered">
          <tr>
              <th width="180">Alamat</th>
              <td><?php echo $data_warga[0]['alamat'] ?></td>
          </tr>
          <tr>
              <th width="180">Dusun</th>
              <td><?php echo $data_warga[0]['dusun'] ?></td>
          </tr>
          <tr>
              <th width="180">Rt / Rw</th>
              <td><?php echo $data_warga[0]['rt'] ?> / <?php echo $data_warga[0]['rw'] ?></td>
          </tr>
          <tr>
              <th>Pekerjaan</th>
              <td><?php echo $data_warga[0]['pekerjaan'] ?></td>
          </tr>
          <tr>
              <th>Kewarganegaraan</th>
              <td><?php echo $data_warga[0]['kewarganegaraan'] ?></td>
          </tr>
           <tr>
              <th>Agama</th>
              <td><?php echo $data_warga[0]['agama'] ?></td>
          </tr>
      </table>
    </div>
  </div>
<br>

<?php include('../mode/bottom.php') ?>