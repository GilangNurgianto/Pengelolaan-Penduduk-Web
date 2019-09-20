
<?php include('../mode/top.php') ?>
<?php include('proses.php') ?>


<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form surat Mutasi Pindah</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Buat Surat Pindah <?php echo $data_warga[0]['nik'] ?></h2>
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
                    <br />
                    <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="prosessuratpindah.php">
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama" >NAMA<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" name="nama" value="<?php echo $data_warga[0]['nama'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik" >NIK<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nik" name="nik" value="<?php echo $data_warga[0]['nik'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ttl" >Tempat Tanggal Lahir<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ttl" name="ttl" value="Kuningan, <?php echo $data_warga[0]['tanggal_lahir'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat Sebelumnya<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="alamat" name="alamat" value="Dusun <?php echo $data_warga[0]['dusun'] ?>, Rt / Rw <?php echo $data_warga[0]['rw'] ?>/<?php echo $data_warga[0]['rw'] ?>, <?php echo $data_warga[0]['alamat'] ?> Kecamatan Ciawigebang Kabupaten Kuningan " required="required" class="form-control col-md-7 col-xs-12" readonly >
                        </div>
                      </div>
                      
                     
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="addres">Alamat Tujuan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="addres" name="addres" value="<?php echo $data_warga[0]['alamat_tujuan'] ?>" required="required" class="form-control col-md-7 col-xs-12"readonly >
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal Pindah<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tanggal" name="tanggal" value="<?php echo $data_warga[0]['tanggal_mutasi'] ?>" required="required" class="form-control col-md-7 col-xs-12"readonly >
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alasan">Alasan Pindah<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="alasan" name="alasan" value="<?php echo $data_warga[0]['alasan'] ?>" required="required" class="form-control col-md-7 col-xs-12"readonly >
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="index.php"><button class="btn btn-primary" type="button">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




<?php include('../mode/bottom.php') ?>