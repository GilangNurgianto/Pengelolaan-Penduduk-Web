
<?php include('../mode/top.php') ?>
<?php include('proses.php') ?>
<?php
$kode = mysqli_query ($db, "select max(id_kla) from klasifikasi_kk") or die (mysql_error());
$datakode = mysqli_fetch_array($kode);
if($datakode){
  $nilaikode = substr($datakode[0], 1);
  $ikode = (int) $nilaikode;
  $ikode = $ikode + 1;
  $kode_otomatis = "0".str_pad($ikode, 4, "0" , STR_PAD_LEFT);
}else{
  $kode_otomatis = "00001";
}

?>


        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Data Kartu Keluarga</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kartu Keluarga</h2>
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
                    <br />
                    <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="prosesaddkk.php">
                    <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_kla" >ID Klasifikasi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_kla" name="id_kla" required="required" value="<?php echo $kode_otomatis ?>" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_kk" >NO KK<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="no_kk" name="no_kk" required="required" class="form-control col-md-7 col-xs-12"   >
                        </div>
                      </div>
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik" >NIK kepala Keluarga<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nik" name="nik" value="<?php echo $data_warga[0]['nik'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Keluarga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="status">
                             <option></option>
                              <option value="KEPALA_KELUARGA">KEPALA KELUARGA</option>
                              <option value="SUAMI">SUAMI</option>
                              <option value="ISTRI">ISTRI</option>
                              <option value="MENANTU">MENANTU</option>
                              <option value="ANAK">ANAK</option>
                              <option value="CUCU">CUCU</option>
                              <option value="ORANG TUA">ORANG TUA</option>
                              <option value="MERTUA">MERTUA</option>
                              <option value="FAMILI LAIN">FAMILI LAIN</option>
                              <option value="PEMBANTU">PEMBANTU</option>
                              <option value="LAINNYA">LAINNYA</option>
                          </select>
                        </div>
                      </div>
                     
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kecamatan">Kecamatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kecamatan" name="kecamatan" value="Ciawigebang" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kabupaten">Kabupaten <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kabupaten" name="kabupaten" value="Kuningan" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provinsi">Provinsi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="provinsi" name="provinsi" value="Jawa Barat" required="required" class="form-control col-md-7 col-xs-12">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodepos">Kode Pos<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="kodepos" name="kodepos" value="45591"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <a href="../penduduk/index.php"><button class="btn btn-primary" type="reset">Reset</button></a>
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