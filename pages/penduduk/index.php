
 <?php include('../mode/top.php') ?>

<?php include('../mode/hitung.php') ?>
<?php include('data-index.php') ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <br>
              
               <a href="tambah.php"><button type="button" class="btn btn-primary">Tambah Penduduk</button></a>

               <a href="../mutasi/addpendatang.php"><button type="button" class="btn btn-primary">Tambah Pendatang</button></a>
               
              </div>

              <div class="title_right">
               
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Data Penduduk <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table class="table table-striped" id="datatable-buttons">
                      <thead>
                        <tr>
                          <th width="20px">No</th>
                          <th width="80px">Nik</th>
                          <th width="80px">Nama</th>
                          <th width="80px">Pendidikan</th>
                          <th width="80px">Pekerjaan</th>
                          <th width="20px">Tanggal Lahir</th>
                          <th>Kelamin</th>
                          <th>Status</th>
                          <th>Pengaturan</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $nomor = 1; ?>
                      <?php foreach ($data_warga as $warga) : ?>
                        <tr>
                          <td><?php echo $nomor++ ?>.</td>
                          <td><?php echo $warga['nik'] ?></td>
                          <td><?php echo $warga['nama'] ?></td>
                          <td><?php echo $warga['pendidikan'] ?></td>
                          <td><?php echo $warga['pekerjaan'] ?></td>
                          <td><?php echo $warga['tanggal_lahir'] ?></td>
                          <td><?php echo $warga['jk'] ?></td>
                          <td><?php if ($warga['status']==1){
                             echo "<span class='btn btn-success btn-xs'> Tetap</span>";
                          } elseif ($warga['status']==2){
                            echo "<span class='btn btn-info btn-xs'> Datang</span>";
                          } elseif ($warga['status']==3){
                            echo "<span class='btn btn-warning btn-xs'> Pindah</span>";
                          } elseif ($warga['status']==4){
                            echo "<span class='btn btn-danger btn-xs'> Meninggal</span>";
                          }

                          ?></td>
                          <td>
                            <a href="detail.php?nik=<?php echo $warga['nik'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="edit.php?nik=<?php echo $warga['nik'] ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="delete.php?nik=<?php echo $warga['nik'] ?>" onclick="return confirm('Yakin hapus data ini?')"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
    <dt>Total Penduduk</dt>
    <dd><?php echo $jumlah_penduduk['total'] ?> orang</dd>
  </dl>
</div>
        </div>
        <!-- /page content -->

<?php include('../mode/bottom.php') ?>
