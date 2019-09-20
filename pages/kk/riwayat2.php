
 <?php include('../mode/top2.php') ?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <br>
              
               <a href="../kk/index2.php"><button type="button" class="btn btn-primary">Kembali</button></a>
               
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Riwayat Data Kartu Keluarga</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                   <div class="col-md-12">
      <table class="table table-bordered">
        <tr>
          <td>NO</td>
          <td>Nik</td>
          <td>Nama</td>
          <td>Tgl Lahir</td>
          <td>Status</td>
          <td>Pekerjaan</td>
          <td>agama</td>
        </tr>
        <?php 
        mysql_connect("localhost","root","");
        mysql_select_db("desa_pangkalan");
        $get = $_GET['no_kk'];


        $query = "SELECT * FROM klasifikasi_kk JOIN penduduk ON penduduk.nik=klasifikasi_kk.nik WHERE no_kk='$get'";
        $hasil = mysql_query($query);
        $no= 0;
        while ($data = mysql_fetch_array($hasil)) {
          $no++;
          echo "
        <tr>
          <th>".$no."</th>
          <th>".$data['nik']."</th>
          <th>".$data['nama']."</th>
          <th>".$data['tanggal_lahir']."</th>
          <th>".$data['statuskk']."</th>
          <th>".$data['pekerjaan']."</th>
          <th>".$data['agama']."</th>
        </tr>";
        }
      ?>
      </table>
    </div>
     </div>
</div>
</div>
</div>
</div>

<?php include('../mode/bottom.php') ?>