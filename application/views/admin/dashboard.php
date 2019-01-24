

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">14</div>
              <span class="count_bottom"><i class="green">1 Januari 2019 </i> Last Regist</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Post</span>
              <div class="count">2</div>
              <span class="count_bottom"><i class="green">2 Januari 2019 </i> Last Post</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-star"></i> Rating Tertinggi</span>
              <div class="count">3,2</div>
              <span class="count_bottom"><i class="green">2 Januari 2019 </i> Last Mentoring</span>
            </div>


          </div>
          <!-- /top tiles -->
          <div class="right_col" role="main" style="min-height: 3621px;">
                    <div class="">
                      <div class="page-title">
                        <div class="title_left">
                          <h3>Data Rating User Surabi</h3>
                        </div>
                        <div class="title_right">
                          <div class="col-md-3 col-sm-5 col-xs-12 form-group pull-right top_search">

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2><i class="fa fa-bars"></i> Data Komentar<small></small></h2>
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




                              <div class="" role="tabpanel" data-example-id="togglable-tabs">

                                <div id="myTabContent" class="tab-content">
                                  <!-- <?php echo base_url(); ?>User_controller/tambahtimeline/<?php echo $id_thread; ?>" -->
                                  <table class="table table-striped table-bordered" id="example" width="100%">
                                    <thead class=" text-primary" align="center">
                                      <th width="10%" align="center">
                                        <center>Rank</center>
                                      </th>
                                      <th width="40%" align="center">
                                        <center>Nama</center>
                                      </th>
                                      <th width="40%" align="center">
                                        <center>Jurusan</center>
                                      </th>
                                      <th width="10%">
                                        <img src="<?php echo base_url();?>assets/img/surabibintang.png" width="50%">
                                      </th>
                                    </thead>
                                    <tbody align="center">
                                      <tr align="center">
                                        <td >
                                        <center>1<center>
                                        </td>
                                        <td>
                                          <center>MEISSA EKA WARDANA</center>
                                        </td>
                                        <td>
                                          <center>Sistem Informasi</center>
                                        </td>
                                        <td>
                                          <center>3,2</center>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>



                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>


                <!-- awal modal -->
                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>

                      </div>
                      <div class="modal-body">
                        <center><h4><b>Tambah Komentar Baru</b></h4></center>
                          <form action="<?=base_url() ?>User_controller/savekomen_admin" method="post">

                            <div class="form-row">
                              <div class="col">
                                <label>Pilih Judul Post</label>
                                <select class="form-control"  name="id_timeline" >
                                  <?php
                                    foreach ($daftar_timeline as $d_tl) {
                                  ?>
                                      <option value="<?=$d_tl->id_timeline; ?>"><?=$d_tl->judul; ?></option>
                                    <?php } ?>
                               </select>
                              </div>
                              <div class="col">
                                <label>Isi Komentar</label>
                                <input class="form-control" type="text" placeholder="Masukan Komentar" id="isi" name="isi">
                              </div>


                              <input type="hidden" name="id_thread" value="<?=$d_tl->id_thread; ?>">
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>


                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>

                    <!-- akhir modal -->

                    <!-- awal modal -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>

                          </div>
                          <div class="modal-body">
                            <center><h4><b>Edit Komentar</b></h4></center>
                              <form action="<?=base_url() ?>User_controller/saveeditkomen_admin" method="post">

                                <div class="form-row">
                                  <div class="col">
                                    <label>Pilih Judul Post</label>
                                    <select class="form-control"  name="id_timeline" >
                                      <?php
                                        foreach ($daftar_timeline as $d_tl) {
                                      ?>
                                          <option <?php if($user->id_timeline==$d_tl->id_timeline){ echo $d_tl->isi; echo "selected"; } ?> value="<?=$d_tl->id_timeline; ?>"><?=$d_tl->judul; ?></option>
                                        <?php } ?>
                                   </select>
                                  </div>
                                  <div class="col">
                                    <label>Isi Komentar</label>
                                    <input class="form-control" type="text" placeholder="Masukan Komentar" id="isi" name="isi">
                                  </div>


                                  <input type="hidden" name="id_thread" value="<?=$user->id_komentar; ?>">
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>


                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>

                        <!-- akhir modal -->
                    <script src="<?= base_url();?>assets/sweet/sweetalert2.all.min.js">
                    </script>


                <!-- end of weather widget -->

        </div>
        <!-- /page content -->
