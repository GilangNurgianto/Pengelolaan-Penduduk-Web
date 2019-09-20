
 <?php include('../mode/top2.php') ?>

<?php include('data-index.php') ?>
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <br>
              
               <a href="tambah.php"><button type="button" class="btn btn-primary">Tambah</button></a>
               
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
                          <th width="80px">username</th>
                          <th width="60px">akses</th>
                          <th width="80px">Pengaturan</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php $nomor = 1; ?>
                      <?php foreach ($data_warga as $warga) : ?>
                        <tr>
                          <td><?php echo $nomor++ ?>.</td>
                          <td width="80px"><?php echo $warga['username'] ?></td>
                          <td width="80px"><?php if ($warga['akses']==1){
                             echo "Super Admin";
                          } elseif ($warga['akses']==2){
                            echo "Admin";
                          }
                          ?></td>
                          <td width="80px">
                            <a href="delete.php?id_admin=<?php echo $warga['id_admin'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> hapus </a>
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
