  <?php
session_start();

// jika sudah login, alihkan ke halaman dasbor
if (isset($_SESSION['user'])) {
  header('Location: ../dasbor/index.php');
  exit();
}
?>
<?php include('../mode/top-login.php') ?>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="login_form" method="post" action="proses_login.php?op=in">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username_user" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password_user" required="" />
              </div>
              <div>
              <button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" class="btn btn-success">Login</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class=""></i> DESA PANGKALAN</h1>
                  <p>©2017 KERJA PRAKTEK KELOMPOK 12 </p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>

  <?php include('../mode/bottom-login.php') ;