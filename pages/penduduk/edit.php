
 <?php include('../mode/top.php') ?>

<?php include('show.php') ?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Edit Penduduk</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nama <?php echo $data_warga[0]['nama'] ?></small></h2>
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
                    <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="ubah.php">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">NIK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nik2" name="nik2" required="required" value="<?php echo $data_warga[0]['nik'] ?>" class="form-control col-md-7 col-xs-12" >
                           <input type="hidden" id="nik" name="nik" required="required" value="<?php echo $data_warga[0]['nik'] ?>" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" name="nama" required="required" value="<?php echo $data_warga[0]['nama'] ?>"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tanggal_lahir" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                       <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-6 col-sm-6 col-xs-12" >
                                <input type="text" name="tanggal_lahir" value="<?php echo $data_warga[0]['tanggal_lahir'] ?>"  class="form-control has-feedback-left" id="single_cal2" aria-describedby="inputSuccess2Status2">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" ></span>
                                <span id="inputSuccess2Status2" class="sr-only" id="tanggal_lahir">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="tempat_lahir" value="<?php echo $data_warga[0]['tempat_lahir'] ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dusun">Dusun <span class="required">*</span>
                        </label>
                        <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="dusun" value="Manis" <?php if($data_warga[0]['dusun']=='Manis'){echo "checked";} ?>>Manis
                              </label>
                              <label>
                              <input type="radio" class="flat" name="dusun" value="Pahing" <?php if($data_warga[0]['dusun']=='Pahing'){echo "checked";} ?>>Pahing
                            </label>
                            <label>
                              <input type="radio" class="flat" name="dusun" value="Puhun" <?php if($data_warga[0]['dusun']=='Puhun'){echo "checked";} ?>>Puhun
                            </label>
                            <label>
                              <input type="radio" class="flat" name="dusun" value="Wage" <?php if($data_warga[0]['dusun']=='Wage'){echo "checked";} ?>>Wage
                            </label>
                            <label>
                              <input type="radio" class="flat" name="dusun" value="Kliwon" <?php if($data_warga[0]['dusun']=='Kliwon'){echo "checked";} ?>>Kliwon
                            </label>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rt">Rt<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="rt" value="<?php echo $data_warga[0]['rt'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rw">Rw<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="rw" value="<?php echo $data_warga[0]['rw'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jk">Jenis Kelamin<span class="required">*</span>
                        </label>
                        <div class="radio">
                            <label>
                              <input type="radio" class="flat"  name="jk" value="Laki-laki" <?php if($data_warga[0]['jk']=='Laki-laki'){echo "checked";} ?>>Laki-laki
                              </label>
                              <label>
                              <input type="radio" class="flat" name="jk" value="Perempuan" <?php if($data_warga[0]['jk']=='Perempuan'){echo "checked";} ?>>Perempuan
                            </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Golongan Darah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="golongan_darah">
                            <option value=""  ></option>
                            <option value="A" <?php if($data_warga[0]['golongan_darah']=='A'){echo "selected";} ?>> A</option>
                            <option value="B" <?php if($data_warga[0]['golongan_darah']=='B'){echo "selected";} ?>> B</option>
                            <option value="AB" <?php if($data_warga[0]['golongan_darah']=='AB'){echo "selected";} ?>> AB</option>
                            <option value="O" <?php if($data_warga[0]['golongan_darah']=='O'){echo "selected";} ?>> O</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="alamat" value="<?php echo $data_warga[0]['alamat'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Keluarga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="status_keluarga">
                             <option></option>
                              <option value="KEPALA_KELUARGA" <?php if($data_warga[0]['status_keluarga']=='KEPALA_KELUARGA'){echo "selected";} ?>>KEPALA_KELUARGA</option>
                              <option value="SUAMI" <?php if($data_warga[0]['status_keluarga']=='SUAMI'){echo "selected";} ?>>SUAMI</option>
                              <option value="ISTRI"<?php if($data_warga[0]['status_keluarga']=='ISTRI'){echo "selected";} ?>>ISTRI</option>
                              <option value="MENANTU" <?php if($data_warga[0]['status_keluarga']=='MENANTU'){echo "selected";} ?>>MENANTU</option>
                              <option value="ANAK" <?php if($data_warga[0]['status_keluarga']=='ANAK'){echo "selected";} ?>>ANAK</option>
                              <option value="CUCU" <?php if($data_warga[0]['status_keluarga']=='CUCU'){echo "selected";} ?>>CUCU</option>
                              <option value="ORANG TUA" <?php if($data_warga[0]['status_keluarga']=='ORANG TUA'){echo "selected";} ?>>ORANG TUA</option>
                              <option value="MERTUA" <?php if($data_warga[0]['status_keluarga']=='MERTUA'){echo "selected";} ?>>MERTUA</option>
                              <option value="FAMILI LAIN" <?php if($data_warga[0]['status_keluarga']=='FAMILI LAIN'){echo "selected";} ?>>FAMILI LAIN</option>
                              <option value="PEMBANTU" <?php if($data_warga[0]['status_keluarga']=='PEMBANTU'){echo "selected";} ?>>PEMBANTU</option>
                              <option value="LAINNYA" <?php if($data_warga[0]['status_keluarga']=='LAINNYA'){echo "selected";} ?>>LAINNYA</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Pekawinan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="status_perkawinan">
                             <option></option>
                              <option value="KAWIN" <?php if($data_warga[0]['status_perkawinan']=='KAWIN'){echo "selected";} ?>>KAWIN</option>
                              <option value="BELUM KAWIN" <?php if($data_warga[0]['status_perkawinan']=='BELUM KAWIN'){echo "selected";} ?>>BELUM KAWIN</option>
                              <option value="JANDA" <?php if($data_warga[0]['status_perkawinan']=='JANDA'){echo "selected";} ?>>JANDA</option>
                              <option value="DUDA" <?php if($data_warga[0]['status_perkawinan']=='DUDA'){echo "selected";} ?>>DUDA</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="pendidikan">
                             <option></option>
                              <option value="TIDAK / BELUM SEKOLAH" <?php if($data_warga[0]['pendidikan']=='TIDAK / BELUM SEKOLAH'){echo "selected";} ?>>TIDAK / BELUM SEKOLAH</option>
                              <option value="BELUM TAMAT SD/SEDERAJAT" <?php if($data_warga[0]['pendidikan']=='BELUM TAMAT SD/SEDERAJAT'){echo "selected";} ?>>BELUM TAMAT SD/SEDERAJAT</option>
                              <option value="TAMAT SD/SEDERAJAT" <?php if($data_warga[0]['pendidikan']=='TAMAT SD/SEDERAJAT'){echo "selected";} ?>>TAMAT SD/SEDERAJAT</option>
                              <option value="SLTP/SEDERAJAT" <?php if($data_warga[0]['pendidikan']=='SLTP/SEDERAJAT'){echo "selected";} ?>>SLTP/SEDERAJAT</option>
                              <option value="SLTA/SEDERAJAT" <?php if($data_warga[0]['pendidikan']=='SLTA/SEDERAJAT'){echo "selected";} ?>>SLTA/SEDERAJAT</option>
                              <option value="DIPLOMA I/II" <?php if($data_warga[0]['pendidikan']=='DIPLOMA I/II'){echo "selected";} ?>>DIPLOMA I/II</option>
                              <option value="AKADEMI/DIPLOMA III/SARJANA MUDA" <?php if($data_warga[0]['pendidikan']=='AKADEMI/DIPLOMA III/SARJANA MUDA'){echo "selected";} ?>>AKADEMI/DIPLOMA III/SARJANA MUDA</option>
                              <option value="DIPLOMA IV/SASTRA I" <?php if($data_warga[0]['pendidikan']=='DIPLOMA IV/SASTRA I'){echo "selected";} ?>>DIPLOMA IV/SASTRA I</option>
                              <option value="SASTRA II" <?php if($data_warga[0]['pendidikan']=='SASTRA II'){echo "selected";} ?>>SASTRA II</option>
                              <option value="SASTRA III" <?php if($data_warga[0]['pendidikan']=='SASTRA III'){echo "selected";} ?>>SASTRA III</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="pekerjaan">
                              <option></option>
                              <option value="BELUM / TIDAK BEKERJA" <?php if($data_warga[0]['pekerjaan']=='BELUM / TIDAK BEKERJA'){echo "selected";} ?>>BELUM / TIDAK BEKERJA</option>
                              <option value="KARYAWAN SWASTA" <?php if($data_warga[0]['pekerjaan']=='KARYAWAN SWASTA'){echo "selected";} ?>>KARYAWAN SWASTA</option>
                              <option value="MENGURUS RUMAH TANGGA" <?php if($data_warga[0]['pekerjaan']=='MENGURUS RUMAH TANGGA'){echo "selected";} ?>>MENGURUS RUMAH TANGGA</option>
                              <option value="PELAJAR / MAHASISWA" <?php if($data_warga[0]['pekerjaan']=='PELAJAR / MAHASISWA'){echo "selected";} ?>>PELAJAR / MAHASISWA</option>
                              <option value="PETANI" <?php if($data_warga[0]['pekerjaan']=='PETANI'){echo "selected";} ?>>PETANI</option>
                              <option value="PETERNAK" <?php if($data_warga[0]['pekerjaan']=='PETERNAK'){echo "selected";} ?>>PETERNAK</option>
                              <option value="PEDAGANG" <?php if($data_warga[0]['pekerjaan']=='PEDAGANG'){echo "selected";} ?>>PEDAGANG</option>
                              <option value="PNS" <?php if($data_warga[0]['pekerjaan']=='PNS'){echo "selected";} ?>>PNS</option>
                              <option value="WIRASWASTA" <?php if($data_warga[0]['pekerjaan']=='WIRASWASTA'){echo "selected";} ?>>WIRASWASTA</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kewarganegaraan">Kewarganegaraan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="kewarganegaraan" value="<?php echo $data_warga[0]['kewarganegaraan'] ?>"" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="agama">
                               <option></option>
                                <option value="Islam" <?php if($data_warga[0]['agama']=='Islam'){echo "selected";} ?>>Islam</option>
                                <option value="Kristen" <?php if($data_warga[0]['agama']=='Kristen'){echo "selected";} ?>>Kristen</option>
                                <option value="Budha" <?php if($data_warga[0]['agama']=='Budha'){echo "selected";} ?>>Budha</option>
                                <option value="Khatolik"<?php if($data_warga[0]['agama']=='Khatolik'){echo "selected";} ?>>Khatolik</option>
                                <option value="Hindu"<?php if($data_warga[0]['agama']=='Hindu'){echo "selected";} ?>>Hindu</option>
                                <option value="Konghucu"<?php if($data_warga[0]['agama']=='Konghucu'){echo "selected";} ?>>Konghucu</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayah">Nama Ayah <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="ayah" value="<?php echo $data_warga[0]['ayah'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibu">Nama Ibu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="ibu" value="<?php echo $data_warga[0]['ibu'] ?>" required="required" class="form-control col-md-7 col-xs-12">
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