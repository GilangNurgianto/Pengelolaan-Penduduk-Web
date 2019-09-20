
 <?php include('../mode/top2.php') ?>

<?php include('data-index.php') ?>
<?php include('../mode/hitung.php') ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <br>
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Data Mutasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="20px">No</th>

                          <th width="80px">ID</th>
                          <th width="80px">Nik</th>
                          <th width="80px">Nama</th>
                          <th width="80px">Tanggal Mutasi</th>
                          <th width="80px">Alamat Tujuan</th>
                          <th width="80px">Alamat Sebelum</th>
                          <th>status</th>
                          <th></th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $nomor = 1; ?>
                      <?php foreach ($data_warga as $warga) : ?>
                        <tr>
                          <td><?php echo $nomor++ ?>.</td>
                          
                          <td><?php echo $warga['id_mutasi'] ?></td>

                          <td><?php echo $warga['nik'] ?></td>
                          <td><?php echo $warga['nama'] ?></td>
                          <td><?php echo $warga['tanggal_mutasi'] ?></td>
                          <td><?php echo $warga['alamat_tujuan'] ?></td>
                          <td><?php echo $warga['alamat_sebelum'] ?></td>
                          <td><?php if ($warga['status']==2){
                            echo "<span class='btn btn-info btn-xs'> Datang</span>";
                          } elseif ($warga['status']==3){
                            echo "<span class='btn btn-warning btn-xs'> Pindah</span>";
                          } 
                          ?></td>
                          <td>
                          </td>
                        </tr>
                      <?php endforeach ?>
                        
                      </tbody>
                    </table>
                    

                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="well">
  <dl class="dl-horizontal">
    <dt>Total Penduduk Datang</dt>
    <dd><?php echo $jumlah_pendatang['total'] ?> orang</dd>
    <dt>Total Penduduk Pindah</dt>
    <dd><?php echo $jumlah_pindah['total'] ?> orang</dd>
  </dl>
</div>
        </div>
        <!-- /page content -->


<?php include('../mode/bottom.php') ?>
