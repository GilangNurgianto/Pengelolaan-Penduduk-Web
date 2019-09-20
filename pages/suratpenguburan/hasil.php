
  <?php include('../mode/top.php') ?>
<?php include('../../config/koneksi.php') ?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

            <div class="clearfix"></div>
            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hasil Pencarian Data NIM atau Nama </h2>
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
                  <table id="" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="20px">No</th>
                          <th width="500px">Nik</th>
                          <th width="100">Pilih</th>
                        </tr>
                      </thead>
                       <tbody>
                      <?php if(isset($_POST['nik'])){
                      $no = 1; //buat urutan nomer
                      $submit = $_POST['nik'];
                      $sql = "select * from kematian where nik like '%$submit%'";
                      $query = mysqli_query($db ,$sql);
                      while ($data = mysqli_fetch_array($query)){
                      ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $data['nik'];?></td>
                          <td>
                            <a href="../suratpenguburan/form.php?id_mati=<?php echo $data['id_mati'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Pilih </a>
                          </td>
                        </tr>
                      <?php
                      $no++; 
                      }}
                      ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div></li></ul></div></div></div></div></div></div></div>
        <!-- /page content -->



<?php include('../mode/bottom.php') ?>