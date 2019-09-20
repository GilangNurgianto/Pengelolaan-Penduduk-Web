
<?php include('../mode/top.php') ?>
<?php include('showaddkeluarga.php') ?>
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
                <h3>Form Data Kartu Keluargan</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Data Ke Kartu Keluarga</h2>
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
            
                    <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="prosesaddkeluarga.php">
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
                          <input type="text" id="no_kk" name="no_kk" value="<?php echo $data_warga[0]['no_kk'] ?>" required="required" class="form-control col-md-7 col-xs-12" readonly >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kodepos">NIK<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="nikbaru" name="nikbaru">
                          <?php 
                          $query4 = "SELECT * FROM penduduk where status_cari=''";

                          $hasil4 = mysqli_query($db, $query4);

                          $data_warga4 = array();

                          while ($row4 = mysqli_fetch_array($hasil4)) {
                            echo "<option value=$row4[nik]>$row4[nik]  :  $row4[nama]</option>";


                          }
                          ?>
                          </select>
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Keluarga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="statuskk">
                             <option></option>
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
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="../kk/index.php"><button class="btn btn-primary" type="button">Kembali</button></a>
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