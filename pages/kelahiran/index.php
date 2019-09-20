
 <?php include('../mode/top.php') ?>

<?php include('data-index.php') ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">

              <br>
              <a href="cari.php"><button type="button" class="btn btn-primary">Tambah</button></a>
              </div>

              <div class="title_right">
               
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Data Kelahiran</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        
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
                          <th width="80px">ID</th>
                          <th width="80px">Nik Ibu</th>
                          <th width="80px">Nama Ibu</th>
                          <th width="80px">Nama Anak</th>
                          <th width="80px">Anak Ke</th>
                          <th width="80px">Jk Anak</th>
                          <th>Tanggal Kelahiran</th>
                          <th>Pengaturan</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $nomor = 1; ?>
                      <?php foreach ($data_warga as $warga) : ?>
                        <tr>
                          <td><?php echo $nomor++ ?>.</td>
                          
                          <td><?php echo $warga['id_kelahiran'] ?></td>

                          <td><?php echo $warga['nik'] ?></td>
                          <td><?php echo $warga['nama'] ?></td>
                          <td><?php echo $warga['nama_anak'] ?></td>
                          <td><?php echo $warga['anak_ke'] ?></td>
                          <td><?php echo $warga['jk_anak'] ?></td>
                          <td><?php echo $warga['tgl_kelahiran'] ?></td>
                          <td>
                            <a href="delete.php?id_kelahiran=<?php echo $warga['id_kelahiran'] ?>" onclick="return confirm('Yakin hapus data ini?')"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
        </div>
        <!-- /page content -->

<?php include('../mode/bottom.php') ?>
