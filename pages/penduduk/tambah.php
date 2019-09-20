
 <?php include('../mode/top.php') ?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Tambah Penduduk</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Isi dengan Cermat</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="prosespenduduk.php">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">NIK <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nik" name="nik" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" name="nama" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tanggal_lahir" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                       <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-6 col-sm-6 col-xs-12" >
                                <input type="text" name="tanggal_lahir" class="form-control has-feedback-left" id="single_cal2" aria-describedby="inputSuccess2Status2">
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
                          <input type="text" id="last-name" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dusun">Dusun <span class="required">*</span>
                        </label>
                        <div class="radio">
                            <label>
                              <input type="radio" class="flat" checked name="dusun" value="Manis">Manis
                              </label>
                              <label>
                              <input type="radio" class="flat" name="dusun" value="Pahing">Pahing
                            </label>
                            <label>
                              <input type="radio" class="flat" name="dusun" value="Puhun">Puhun
                            </label>
                            <label>
                              <input type="radio" class="flat" name="dusun" value="Wage">Wage
                            </label>
                            <label>
                              <input type="radio" class="flat" name="dusun" value="Kliwon">Kliwon
                            </label>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rt">Rt<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="rt" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rw">Rw<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="rw" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jk">Jenis Kelamin<span class="required">*</span>
                        </label>
                        <div class="radio">
                            <label>
                              <input type="radio" class="flat" checked name="jk" value="Laki-laki">Laki-laki
                              </label>
                              <label>
                              <input type="radio" class="flat" name="jk" value="Perempuan">Perempuan
                            </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Golongan Darah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="golongan_darah">
                            <option value="" ></option>
                            <option value="A"> A</option>
                            <option value="B"> B</option>
                            <option value="AB"> AB</option>
                            <option value="O"> O</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="alamat" value="Desa Cipetir" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Keluarga</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="status_keluarga">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Pekawinan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="status_perkawinan">
                             <option></option>
                              <option value="KAWIN">KAWIN</option>
                              <option value="BELUM KAWIN">BELUM KAWIN</option>
                              <option value="CERAI HIDUP">JANDA</option>
                              <option value="CERAI MATI">DUDA</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="pendidikan">
                             <option></option>
                              <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH</option>
                              <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                              <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                              <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                              <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                              <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                              <option value="AKADEMI/DIPLOMA III/SARJANA MUDA">AKADEMI/DIPLOMA III/SARJANA MUDA</option>
                              <option value="DIPLOMA IV/SASTRA I">DIPLOMA IV/SASTRA I</option>
                              <option value="SASTRA II">SASTRA II</option>
                              <option value="SASTRA III">SASTRA III</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan</label>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kewarganegaraan">Kewarganegaraan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="kewarganegaraan" value="WNI" required="required" class="form-control col-md-7 col-xs-12">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayah">Nama Ayah <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="ayah" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibu">Nama Ibu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="ibu" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <a href="../penduduk"> <button class="btn btn-primary" type="button">Cancel</button> </a>          
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