<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                        <ul class="dropdown-menu drop-menu-right" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <h4 class="page-title">Pegawai Bagian</h4>
                    <p class="text-muted page-title-alt">Selamat datang pada halaman Pegawai Bagian</p>
                </div>
            </div>

          <!-- row content -->
          <div class="row">
              <div class="col-sm-12">
                  <div class="card-box table-responsive">
                      <h4 class="m-t-0 header-title"><b>Daftar Pegawai Bagian</b></h4>
                      <p class="text-muted font-13 m-b-30">
                          Halaman ini memberikan informasi terkait Pegawai dan Staff yang terdapat pada tiap bagian dalam lingkup Direktorat Jendral Tanaman Pangan.
                      </p>

                      <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                          <tr>
                              <th>No.</th>
                              <th>Bagian</th>
                              <th>Kepala Bagian</th>
                              <th>Nama Kepala</th>
                              <th>Telepon</th>
                              <th>Aksi</th>
                          </tr>
                          </thead>

                          <tbody>
                          <?php
                          $query = mysqli_query($koneksi, "SELECT * FROM bagian");
                          $no = 1;
                          while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data['bagian_nama'];?></td>
                                <td><?php echo $data['bagian_nama'];?></td>
                                <td><?php echo $data['bagian_nama'];?></td>
                                <td><?php echo "(021) ".$data['bagian_telpon'];?></td>
                                <td>Detil</td>
                            </tr>
                            <?php
                          }
                          $no ++;
                          ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
          <!-- row content -->

        </div> <!-- container -->

    </div> <!-- content -->

    <?php require_once('../../controller/footer.php'); ?>

</div>
