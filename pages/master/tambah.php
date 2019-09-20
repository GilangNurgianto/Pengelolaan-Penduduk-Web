
 <?php include('../mode/top2.php') ?>
  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <br>
               
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Pengguna<small>Users</small></h2>
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
<form action="prosesadd.php" method="post">
<h3>Tambah</h3>
<table class="table table-striped table-middle">
  <tr>
    <th>Username</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="username_user" required></td>
  </tr>
  <tr>
    <th>Password</th>
    <td>:</td>
    <td><input type="password" class="form-control" name="password_user" required></td>
  </tr>
  <tr>
    <th>Status</th>
    <td>:</td>
    <td>
      <select class="form-control selectpicker" name="akses" required>
        <option value="" selected disabled>- pilih -</option>
        <option value="2">Operator</option>
        <option value="1">Super Admin</option>
      </select>
    </td>
  </tr>
</table>


<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>
</form>
</div></div></div></div></div></div>


  <?php include('../mode/bottom.php') ;
