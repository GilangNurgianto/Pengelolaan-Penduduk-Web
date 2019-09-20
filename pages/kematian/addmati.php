
 <?php include('../mode/top.php') ?>

<?php include('proses.php') ?>
<?php
$kode = mysqli_query ($db, "select max(id_mati) from kematian") or die (mysql_error());
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
                <h3>Form Data Kematian</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kematian <?php echo $data_warga[0]['nama'] ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="id.php">
                   	<div class="form-group" >
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="id_mati" name="id_mati" required="required" value="<?php echo $kode_otomatis ?>" class="form-control col-md-7 col-xs-12" readonly  >
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
                        <label for="tgl_mati" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Kematian</label>
                       <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-6 col-sm-6 col-xs-12" >
                                <input type="text" name="tgl_mati"  class="form-control has-feedback-left" id="single_cal2" aria-describedby="inputSuccess2Status2">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" ></span>
                                <span id="inputSuccess2Status2" class="sr-only" id="tgl_mati">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hari">Hari <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="hari" name="hari"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="waktu">Waktu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <select name="jam" id="jam"  required="required" class="form-control col-md-7 col-xs-12" style="width: 150px">
                          <option value="-" selected> JAM</option>
                            <?php
                            $i=1;
                            while ($i<13) {
                              echo "<option value=$i >$i</option>";
                              $i++;
                            }


                            ?>
                            

                          </select>.
                          <select name="menit" id="menit"  required="required" class="form-control col-md-7 col-xs-12" style="width: 150px">
                          <option value="-" selected> MENIT</option>
                            <?php
                            $i=0;
                            while ($i<59) {
                              echo "<option value=$i >$i</option>";
                              $i++;
                            }


                            ?>
                            

                          </select>
                           WIB
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Kematian</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="tempat_meninggal">
                            <option value="" ></option>
                            <option value="Rumah Pribadi">Rumah Pribadi</option>
                            <option value="Rumah Sakit">Rumah Sakit</option>
                            <option value="Jalan"> Jalan</option>
                            <option value="Tidak di Ketahuui">Tidak di Ketahui</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <div clas
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penyebab Kematian</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="penyebab">
                            <option value="" ></option>
                            <option value="Wajar">Wajar</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Kecelakaan"> Kecelakaan</option>
                            <option value="Bunuh Diri">Bunuh Diri</option>
                            <option value="Tidak di Ketahui">Tidak di Ketahui</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_makam">Tempat Pemakaman <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tempat_makam" name="tempat_makam"  required="required" class="form-control col-md-7 col-xs-12" >
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