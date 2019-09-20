
 <?php include('../mode/top.php') ?>


<?php include('show.php') ?>
<?php
$kode = mysqli_query ($db, "select max(id_kelahiran) from kelahiran") or die (mysql_error());
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
<?php
$kode = mysqli_query ($db, "select max(id_kla) from klasifikasi_kk") or die (mysql_error());
$datakode = mysqli_fetch_array($kode);
if($datakode){
  $nilaikode = substr($datakode[0], 1);
  $ikode = (int) $nilaikode;
  $ikode = $ikode + 1;
  $kode_otomatis3 = "0".str_pad($ikode, 4, "0" , STR_PAD_LEFT);
}else{
  $kode_otomatis3 = "00001";
}


?>
<?php
$kode = mysqli_query ($db, "select max(id_kelahiran) from kelahiran") or die (mysql_error());
$datakode = mysqli_fetch_array($kode);
if($datakode){
  $nilaikode = substr($datakode[0], 1);
  $ikode = (int) $nilaikode;
  $ikode = $ikode + 1;
  $kode_otomatis2 = "0".str_pad($ikode, 9, "0" , STR_PAD_LEFT);
}else{
  $kode_otomatis2 = "000001";
}

?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Kelahiran Penduduk</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nama Ibu <?php echo $data_warga[0]['nama'] ?></small></h2>
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
                    <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="prosesaddkelahiran.php">
                      <div class="form-group" >
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="id_kla" name="id_kla" required="required" value="<?php echo $kode_otomatis3 ?>" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>
                    <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_kelahiran" >ID Lahir<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_kelahiran" name="id_kelahiran" required="required" value="<?php echo $kode_otomatis ?>" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>
                      <div class="form-group" >
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="no_kk" name="no_kk" required="required" value="<?php echo $data_warga[0]['no_kk'] ?>" class="form-control col-md-7 col-xs-12" readonly  >
                        </div>
                      </div>
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik" >Nik Ibu<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nik" name="nik" value="<?php echo $data_warga[0]['nik'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                        </div>
                      </div>
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaibu" >Nama Ibu<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="namaibu" name="namaibu" value="<?php echo $data_warga[0]['nama'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                        </div>
                      </div>
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaayah" >Nama Ayah<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="namaayah" name="namaayah" value="<?php echo $data_warga2[0]['nama'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                          <input type="hidden" id="rt" name="rt" value="<?php echo $data_warga2[0]['rt'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                          <input type="hidden" id="rw" name="rw" value="<?php echo $data_warga2[0]['rw'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                          <input type="hidden" id="dusun" name="dusun" value="<?php echo $data_warga2[0]['dusun'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                          <input type="hidden" id="alamat" name="alamat" value="<?php echo $data_warga2[0]['alamat'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                          <input type="hidden" id="status_perkawinan" name="status_perkawinan" value="<?php echo $data_warga2[0]['status_perkawinan'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                          <input type="hidden" id="pendidikan" name="pendidikan" value="TIDAK SEKOLAH" required="required" class="form-control col-md-7 col-xs-12" readonly >
                          <input type="hidden" id="pekerjaan" name="pekerjaan" value="TIDAK BEKERJA" required="required" class="form-control col-md-7 col-xs-12" readonly >
                          <input type="hidden" id="kewarganegaraan" name="kewarganegaraan" value="<?php echo $data_warga2[0]['kewarganegaraan'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                        </div>
                      </div>
                       <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nikanak" >Nik Anak Sementara<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nikanak" name="nikanak" value="<?php echo $kode_otomatis2 ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                        </div>
                      </div> 
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_anak" >Nama Anak<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_anak" name="nama_anak" required="required" class="form-control col-md-7 col-xs-12"  >
                        </div>
                      </div>


                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status" >Status Keluarga<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="status" name="status" value='ANAK' required="required" class="form-control col-md-7 col-xs-12"  >
                        </div>
                      </div>
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="anak_ke" >Anak Ke<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="anak_ke" name="anak_ke"  required="required" class="form-control col-md-7 col-xs-12"   >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jk_anak">Jenis Kelamin Anak<span class="required">*</span>
                        </label>
                        <div class="radio">
                            <label>
                              <input type="radio" class="flat" checked name="jk_anak" value="Laki-laki">Laki-laki
                              </label>
                              <label>
                              <input type="radio" class="flat" name="jk_anak" value="Perempuan">Perempuan
                            </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="agama">
                               <option></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Khatolik">Khatolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghucu">Konghucu</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="tgl_kelahiran" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir Anak</label>
                       <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-6 col-sm-6 col-xs-12" >
                                <input type="text" name="tgl_kelahiran" class="form-control has-feedback-left" id="single_cal2" aria-describedby="inputSuccess2Status2">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" ></span>
                                <span id="inputSuccess2Status2" class="sr-only" id="tgl_kelahiran">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_kelahiran">Tempat Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tempat_kelahiran" name="tempat_kelahiran" value="Kuningan" required="required" class="form-control col-md-7 col-xs-12">
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