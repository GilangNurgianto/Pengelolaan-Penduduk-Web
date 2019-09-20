
 <?php include('../mode/top.php') ?>

<?php include('../mode/hitung.php') ?>
<?php include('data-index.php') ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <br> 
              
               <a href="cari.php"><button type="button" class="btn btn-primary">Tambah KK</button></a>
               
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Data KK</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
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
                          <th width="70px">No kk</th>
                          <th width="70px">Kepala Keluarga</th>
                          <th width="70px">RT / RW</th>
                          <th width="70px">Dusun</th>
                          <th width="70px">Kodepos</th>
                          <th width="70px">Pengaturan</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $nomor = 1; ?>
                      <?php foreach ($data_warga as $warga) : ?>
                        <tr>
                          <td><?php echo $nomor++ ?>.</td>
                          <td><?php echo $warga['no_kk'] ?></td>
                          <td><?php echo $warga['nama'] ?></td>
                          <td><?php echo $warga['rt'] ?> / <?php echo $warga['rt'] ?></td>
                          <td><?php echo $warga['dusun'] ?></td>
                          <td><?php echo $warga['kodepos'] ?></td>
                          <td>
                            <a href="detailkk.php?no_kk=<?php echo $warga['no_kk'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                             <a href="update.php?no_kk=<?php echo $warga['no_kk'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Update</a>
                             <a href="delete.php?no_kk=<?php echo $warga['no_kk'] ?>" onclick="return confirm('Yakin hapus data ini?')"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
    <dt>Jumlah kk yang ada</dt>
    <dd><?php echo $jumlah_kk['total'] ?> kk</dd>
  </dl>
</div>
        </div>
        <!-- /page content -->

<?php include('../mode/bottom.php') ?>
