
 <?php include('../mode/top.php') ?>

<?php include('show.php') ?>
<?php
$kode = mysqli_query ($db, "select max(id_mutasi) from mutasi") or die (mysql_error());
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
                <h3>Form Data Pindah Penduduk</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Penduduk Pindah <?php echo $data_warga[0]['nama'] ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="proses.php">
                   	<div class="form-group" >
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="id_mutasi" name="id_mutasi" required="required" value="<?php echo $kode_otomatis?>" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">NIK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nik" name="nik" required="required" value="<?php echo $data_warga[0]['nik'] ?>" class="form-control col-md-7 col-xs-12" readonly >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" name="nama" required="required" value="<?php echo $data_warga[0]['nama'] ?>"  class="form-control col-md-7 col-xs-12"readonly >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tgl_mati" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Mutasi</label>
                       <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-6 col-sm-6 col-xs-12" >
                                <input type="text" name="tanggal_mutasi"  class="form-control has-feedback-left" id="single_cal2" aria-describedby="inputSuccess2Status2">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" ></span>
                                <span id="inputSuccess2Status2" class="sr-only" id="tanggal_mutasi">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_sebelum">Alamat Sebelumya <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="alamat_sebelum" name="alamat_sebelum"  value="<?php echo $data_warga[0]['alamat'] ?> Rt/Rw <?php echo $data_warga[0]['rt'] ?> / <?php echo $data_warga[0]['rw'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat_tujuan">Alamat Tujuan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="alamat_tujuan" name="alamat_tujuan"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alasan">Alasan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="alasan" name="alasan"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
                        </label>
                        <div class="radio">
                            <label>
                              <input type="radio" class="flat" checked name="status" value="3">Pindah
                              </label>
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
          </div>
        </div>




<?php include('../mode/bottom.php') ?>