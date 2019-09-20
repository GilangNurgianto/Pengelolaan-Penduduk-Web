
  <?php include('../mode/top.php') ?>
<?php include('../../config/koneksi.php') ?>
<?php include('showkk.php')

   ?>



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

                    <h2>Cari Data Nik </h2>
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
                 <div class="page-title">
                  <form id="form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="updateproses.php">
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_kk" >NO KK<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="no_kk" name="no_kk" value="<?php echo $data_warga[0]['no_kk'] ?>"  required="required" class="form-control col-md-7 col-xs-12" readonly  >
                          <input type="text" id="no_kkbaru" name="no_kkbaru"  required="required" class="form-control col-md-7 col-xs-12" placeholder="NO KK Baru" >
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="../kk/"><button class="btn btn-primary" type="button">Cancel</button></a>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                </div>
              </div>
            </div>
                   

                  </div></div></div></div>
            </div>
            </div>


<?php include('../mode/bottom.php') ?>