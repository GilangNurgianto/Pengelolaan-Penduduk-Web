
<?php include('../mode/top.php') ?>
<?php include('proses.php') ?>


<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form surat Janda</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Buat Surat Janda </h2>
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
                    <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="prosessurat.php">
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama" >NAMA<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" name="nama" value="<?php echo $data_warga[0]['nama'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ttl" >Tempat Tanggal Lahir<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ttl" name="ttl" value="<?php echo $data_warga[0]['tanggal_lahir'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="alamat" name="alamat" value="Dusun <?php echo $data_warga[0]['dusun'] ?>, Rt / Rw <?php echo $data_warga[0]['rw'] ?>/<?php echo $data_warga[0]['rw'] ?>, <?php echo $data_warga[0]['alamat'] ?> " required="required" class="form-control col-md-7 col-xs-12" readonly >
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jk">Jenis Kelamin<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="jk" name="jk" value="<?php echo $data_warga[0]['jk'] ?>" required="required" class="form-control col-md-7 col-xs-12"readonly >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status Perkawinan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="status" name="status" value="<?php echo $data_warga[0]['status_perkawinan'] ?>" class="form-control col-md-7 col-xs-12" readonly >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namasuami">Nama Suami<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="namasuami" name="namasuami" class="form-control col-md-7 col-xs-12"  >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Suami</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="pekerjaan">
                              <option></option>
                              <option value="BELUM / TIDAK BEKERJA">BELUM / TIDAK BEKERJA</option>
                              <option value="KARYAWAN SWASTA">KARYAWAN SWASTA</option>
                              <option value="MENGURUS RUMAH TANGGA">MENGURUS RUMAH TANGGA</option>
                              <option value="PELAJAR / MAHASISWA">PELAJAR / MAHASISWA</option>
                              <option value="PETANI">PETANI</option>
                              <option value="PETERNAK">PETERNAK</option>
                              <option value="PEDAGANG">PEDAGANG</option>
                              <option value="PNS">PNS</option>
                              <option value="WIRASWASTA">WIRASWASTA</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="tanggals" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir Suami</label>
                       <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-6 col-sm-6 col-xs-12" >
                                <input type="text" name="tanggals" class="form-control has-feedback-left" id="single_cal2" aria-describedby="inputSuccess2Status2">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" ></span>
                                <span id="inputSuccess2Status2" class="sr-only" id="tanggals">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jks">Jenis Kelamin Suami<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="jks" name="jks" value="Laki-laki" required="required" class="form-control col-md-7 col-xs-12"readonly >
                        </div>
                      </div>
                       
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="index.php"><button class="btn btn-primary" type="button">Cancel</button></a>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div></div>





<?php include('../mode/bottom.php') ?>