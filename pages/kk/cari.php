
  <?php include('../mode/top.php') ?>
<?php include('../../config/koneksi.php') ?>

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
                    <p class="text-muted font-13 m-b-30">
                    </p>
                 <div class="page-title">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search">
                <form method="post" action="hasilcari.php">
                  <div class="input-group">
                    <input type="text" class="form-control" name="nik" placeholder="Cari">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="submit" value="submit">CARI DATA</button>
                    </span>
                  </div>
                  </form>
                </div>
              </div>
            </div>
                   

                  </div></div></div></div>
            </div>
            </div>


<?php include('../mode/bottom.php') ?>