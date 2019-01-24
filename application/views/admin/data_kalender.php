  <div class="right_col" role="main" style="min-height: 3621px;">
    <div class="bd-example bd-example-tabs">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Kalender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Data Tanggal Libur</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Kalender Terapi</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Data Kalender<small></small></h2>
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

            <!-- notifikasi tambah kalender  -->
                    <div class="">
                    <?php
                    if($this->session->flashdata('tambahkalendersukses')) { ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data Kalender Baru <strong><?= $this->session->flashdata('tambahkalendersukses');  ?></strong> ditambahkan
                  </div>
                <?php } else if($this->session->flashdata('tambahkalendergagal')) {?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  Data Kalender Baru <strong><?= $this->session->flashdata('tambahkalendergagal');  ?></strong> ditambahkan
                </div>
                <?php } ?>
                    </div>

            <!-- notifikasi hapus kalender -->
                    <div class="">
                    <?php
                    if($this->session->flashdata('hapuskalendersukses')) { ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data Kalender <strong><?= $this->session->flashdata('hapuskalendersukses');  ?></strong> dihapus
                  </div>
                <?php } else if($this->session->flashdata('hapuskalendergagal')) {?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  Data Kalender <strong><?= $this->session->flashdata('hapuskalendergagal');  ?></strong> dihapus
                </div>
                <?php } ?>
                    </div>

          <!-- notifikasi edit kalender -->
                  <div class="">
                    <?php
                    if($this->session->flashdata('editkalendersukses')) { ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data Kalender <strong><?= $this->session->flashdata('editkalendersukses');  ?></strong> diedit
                  </div>
                <?php } else if($this->session->flashdata('editkalendergagal')) {?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  Data Kalender <strong><?= $this->session->flashdata('editkalendergagal');  ?></strong> diedit
                </div>
                <?php } ?>
                    </div>


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambahkalender"><i class="fa fa-plus-circle"></i>Tambah Data Baru</button>
                      <div id="myTabContent" class="tab-content">
                        <table class="table table-striped table-bordered" id="example" width="100%">
                          <thead class=" text-primary" align="center">
                            <tr align="center">
                            <th>
                              <center>No</center>
                            </th>
                            <th align="center">
                              <center>Id Kalender</center>
                            </th>
                            <th align="center">
                              <center>Bulan</center>
                            </th>
                            <th align="center">
                              <center>Hari Tanggal 1</center>
                            </th>
                            <th align="center">
                              <center>Tahun</center>
                            </th>
                            <th align="center">
                              <center>Total Tanggal</center>
                            </th>
                            <th align="center"><center>ACTION</center></th>
                          </tr>
                          </thead>
                          <tbody align="center">

                          <?php
                              $no = 1;
                              foreach($data_kalender as $user){
                          ?>

                            <tr align="center">
                          <td><?=$no++; ?></td>
                          <td><?=$user->id_kalender; ?></td>
                          <td><?=$user->bulan; ?></td>
                          <td>
                            <?php if($user->haritgl1==1)
                                echo "Senin";
                              else if($user->haritgl1==2)
                                echo "Selasa";
                              else if($user->haritgl1==3)
                                echo "Rabu";
                              else if($user->haritgl1==4)
                                echo "Kamis";
                              else if($user->haritgl1==5)
                                echo "Jumat";
                              else if($user->haritgl1==6)
                                echo "Sabtu";
                              else if($user->haritgl1==7)
                                echo "Minggu";
                            ?>
                          </td>
                          <td><?=$user->tahun; ?></td>
                          <td><?=$user->totaltanggal; ?></td>
                          <td>
                            <center>
                            <a data-toggle="modal" data-target="#modaleditkalender<?=$user->id_kalender;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>

                            <a href="<?php echo base_url() ?>C_admin/hapus_kalender/<?= $user->id_kalender?>"><button type="submit" class="btn btn-danger" id="hapususer" onclick="Swal('Hapus User','Yakin Ingin Menghapus User ?','error')" ><i class="fa fa-trash"></i></button></a>
                            </center>
                          </td>
                            </tr>
                          <?php } ?>
                          </tbody>
                        </table>
                        <br>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            <div class="clearfix"></div>
          </div>
          </div>
        </div>

        <!-- modal tambah data kalender-->
        <div class="row">
        <div id="tambahkalender" class="modal fade">
        <div class="modal-dialog">
        <form action="<?=base_url() ?>C_admin/savekalender_admin" method="post">
        <div class="modal-content">
        <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" id="exampleModalLongTitle"> <center> <b> Tambah Data Kalender</b> </center> </h5>
        </div>
        <div class="modal-body">
          <div class="row form-group">
            <div class="form-group col-md-8">
              <label>Bulan</label>
              <select id="bulan" name="bulan" class="form-control">
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label>Hari Tanggal 1</label>
              <select id="haritgl1" name="haritgl1" class="form-control">
                <option value="1">Senin</option>
                <option value="2">Selasa</option>
                <option value="3">Rabu</option>
                <option value="4">Kamis</option>
                <option value="5">Jumat</option>
                <option value="6">Sabtu</option>
                <option value="7">Minggu</option>
              </select>
            </div>
            </div>
            <div class="form-group">
              <label>Tahun</label>
              <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Masukan Tahun">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Tambah</button>
        </div>
        </form>
        </div>
        </div>
        </div>
      </div>
        <!-- akhir modal -->

        <!-- modal edit kalender-->
        <?php foreach($data_kalender as $user) : ?>
        <div class="row">
          <div id="modaleditkalender<?=$user->id_kalender;?>" class="modal fade">
            <div class="modal-dialog">
              <form action="<?=base_url() ?>C_admin/saveedit_kalender" method="post">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Data Kalender</h4>
                </div>
                <div class="modal-body">
                  <div class="row form-group">
                    <input type="hidden" name="id_kalender" value="<?=$user->id_kalender;?>">
                    <div class="form-group col-md-8">
                      <label>Bulan</label>
                      <select id="bulan" name="bulan" class="form-control">
                        <option <?php if($user->bulan =="Januari") echo "selected"; ?> value="Januari">Januari</option>
                        <option <?php if($user->bulan =="Februari") echo "selected"; ?> value="Februari">Februari</option>
                        <option <?php if($user->bulan =="Maret") echo "selected"; ?> value="Maret">Maret</option>
                        <option <?php if($user->bulan =="April") echo "selected"; ?> value="April">April</option>
                        <option <?php if($user->bulan =="Mei") echo "selected"; ?> value="Mei">Mei</option>
                        <option <?php if($user->bulan =="Juni") echo "selected"; ?> value="Juni">Juni</option>
                        <option <?php if($user->bulan =="Juli") echo "selected"; ?> value="Juli">Juli</option>
                        <option <?php if($user->bulan =="Agustus") echo "selected"; ?> value="Agustus">Agustus</option>
                        <option <?php if($user->bulan =="September") echo "selected"; ?> value="September">September</option>
                        <option <?php if($user->bulan =="Oktober") echo "selected"; ?> value="Oktober">Oktober</option>
                        <option <?php if($user->bulan =="November") echo "selected"; ?> value="November">November</option>
                        <option <?php if($user->bulan =="Desember") echo "selected"; ?> value="Desember">Desember</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Hari Tanggal 1</label>
                      <select id="haritgl1" name="haritgl1" class="form-control">
                        <option <?php if($user->haritgl1 =="1") echo "selected"; ?> value="1">Senin</option>
                        <option <?php if($user->haritgl1 =="2") echo "selected"; ?> value="2">Selasa</option>
                        <option <?php if($user->haritgl1 =="3") echo "selected"; ?> value="3">Rabu</option>
                        <option <?php if($user->haritgl1 =="4") echo "selected"; ?> value="4">Kamis</option>
                        <option <?php if($user->haritgl1 =="5") echo "selected"; ?> value="5">Jumat</option>
                        <option <?php if($user->haritgl1 =="6") echo "selected"; ?> value="6">Sabtu</option>
                        <option <?php if($user->haritgl1 =="7") echo "selected"; ?> value="7">Minggu</option>
                      </select>
                    </div>
                    </div>
                    <div class="form-group">
                      <label>Tahun</label>
                      <input type="number" class="form-control" id="tahun" name="tahun" value="<?=$user->tahun;?>">
                    </div>
                    <br>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success"><i class="icon-pencil5"></i> Edit</button>
                  </div>
                </form>
                <?php endforeach; ?>
            </div>
          </div>
        </div>
        </div>
        <!-- akhir modal -->

        <!-- akhir kalender -->

        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Tanggal Libur<br> <small>*selain hari minggu</small> </h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> &ensp;Kalender <?=$user->bulan?>  <?=$user->tahun?></b> </center></h2>
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

            <!-- notifikasi tambah tgl merah  -->
                    <div class="">
                    <?php
                    if($this->session->flashdata('savetglsukses')) { ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data Tanggal Libur <strong><?= $this->session->flashdata('savetglsukses');  ?></strong> ditambahkan
                  </div>
                <?php } else if($this->session->flashdata('savetglgagal')) {?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  Data Tanggal Libur <strong><?= $this->session->flashdata('savetglgagal');  ?></strong> ditambahkan
                </div>
                <?php } ?>
                    </div>

            <!-- notifikasi hapus tgl merah -->
                    <div class="">
                    <?php
                    if($this->session->flashdata('hapustglsukses')) { ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data Tanggal Libur <strong><?= $this->session->flashdata('hapustglsukses');  ?></strong> dihapus
                  </div>
                <?php } else if($this->session->flashdata('hapustglgagal')) {?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  Data Tanggal Libur <strong><?= $this->session->flashdata('hapustglgagal');  ?></strong> dihapus
                </div>
                <?php } ?>
                    </div>

          <!-- notifikasi edit tgl merah -->
                  <div class="">
                    <?php
                    if($this->session->flashdata('edittglsukses')) { ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data Tanggal Libur <strong><?= $this->session->flashdata('edittglsukses');  ?></strong> diedit
                  </div>
                <?php } else if($this->session->flashdata('edittglgagal')) {?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  Data Tanggal Libur <strong><?= $this->session->flashdata('edittglgagal');  ?></strong> diedit
                </div>
                <?php } ?>
                    </div>

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambahtglmerah"><i class="fa fa-plus-circle"></i>Tambah Tanggal Libur</button> <br>
                      <div id="myTabContent" class="tab-content">
                        <table class="table table-striped table-bordered" id="example" width="100%">
                          <thead class=" text-primary" align="center">
                            <tr align="center">
                            <th>
                              <center>No</center>
                            </th>
                            <th align="center">
                              <center>Id Tgl Libur</center>
                            </th>
                            <th align="center">
                              <center>Bulan</center>
                            </th>
                            <th align="center">
                              <center>Tahun</center>
                            </th>
                            <th align="center">
                              <center>Tanggal Merah</center>
                            </th>
                            <th align="center">
                              <center>Keterangan</center>
                            </th>
                            <th align="center"><center>ACTION</center></th>
                          </tr>
                          </thead>
                          <tbody align="center">
                            <?php
                            $nom=1;
                            foreach ($data_tgl_merah as $key) {
                              if($user->id_kalender == $key->id_kalender){ ?>
                                <tr align="center">
                                  <td><?=$nom++; ?></td>
                                  <td><?=$key->id_tgl; ?></td>
                                  <td><?=$key->bulan; ?></td>
                                  <td><?=$key->tahun; ?></td>
                                  <td><?=$key->tgl_libur; ?></td>
                                  <td><?=$key->keterangan; ?></td>
                                  <td>
                                    <center>
                                      <a data-toggle="modal" data-target="#modaledit<?=$key->id_tgl;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>

                                      <a href="<?php echo base_url() ?>C_admin/hapus_tgl/<?= $key->id_tgl?>/"><button type="submit" class="btn btn-danger" id="hapustgl" onclick="Swal('Hapus Data Tanggal Libur','Yakin Ingin Menghapus Tanggal Ini ?','error')" ><i class="fa fa-trash"></i></button></a>
                            </center>
                          </td>
                            </tr>
                          <?php } }?>
                          </tbody>
                        </table>

                        <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="clearfix"></div>
          </div>
          </div>


          <!-- modal tambah tanggal merah -->
          <div class="row">
          <div id="tambahtglmerah" class="modal fade">
          <div class="modal-dialog">
          <form action="<?=base_url() ?>C_admin/savetglmerah" method="post">
          <div class="modal-content">
          <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title" id="exampleModalLongTitle"> <center> <b> Tambah Data Tanggal Libur</b> </center> </h5>
          </div>
          <div class="modal-body">
            <div class="row form-group">
              <div class="col-md-8">
                <input type="hidden" name="id_kalender" value="<?=$key->id_kalender; ?>">
                <label>Bulan</label>
                <input disabled id="bulan" name="bulan" class="form-control" value="<?=$key->bulan; ?>">
              </div>
              <div class="col-md-4">
                <label for="subject">Tahun</label>
                <input disabled id="tahun" name="tahun" class="form-control" value="<?=$key->tahun; ?>">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-4">
                <label>Tanggal Libur <small>*selain minggu</small> </label>
                <input type="number" id="tgl_libur" name="tgl_libur" class="form-control" placeholder="Masukan Tanggal">
              </div>
              <div class="col-md-8">
                <label for="lname">Keterangan</label>
                <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Masukan Keterangan Libur">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
          </form>
          </div>
          </div>
          </div>
          </div>
          <!-- akhir modal -->

          <!-- modal edit tgl merah-->
          <?php foreach ($data_tgl_merah as $key) : ?>
          <div class="row">
            <div id="modaledit<?=$key->id_tgl;?>" class="modal fade">
              <div class="modal-dialog">
                <form action="<?=base_url() ?>C_admin/saveedit_tglmerah" method="post">
                <div class="modal-content">
                  <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Tanggal Libur</h4>
                  </div>
                  <div class="modal-body">
                    <div class="row form-group">
                      <div class="col-md-8">
                        <input type="hidden" name="id_tgl" value="<?=$key->id_tgl; ?>">
                        <input type="hidden" name="id_kalender" value="<?=$key->id_kalender; ?>">
                        <label>Bulan</label>
                        <input type="text" disabled id="bulan" name="bulan" class="form-control" value="<?=$key->bulan; ?>">
                      </div>
                      <div class="col-md-4">
                        <label for="subject">Tahun</label>
                        <input type="text" disabled id="tahun" name="tahun" class="form-control" value="<?=$key->tahun; ?>">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-4">
                        <label>Tanggal Libur <small>*selain minggu</small> </label>
                        <input type="number" id="tgl_libur" name="tgl_libur" class="form-control" value="<?=$key->tgl_libur; ?>">
                      </div>
                      <div class="col-md-8">
                        <label for="lname">Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control" value="<?=$key->keterangan; ?>">
                      </div>
                    </div>
                      <br>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success"><i class="icon-pencil5"></i> Edit</button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          </div>

          <!-- akhir modal -->



        </div>
        <!-- akhir tgl merah -->
      </div>
    </div>















      <!-- modal tambah tanggal merah -->
      <!-- <div class="row">
      <div id="tambahtglmerah" class="modal fade">
      <div class="modal-dialog">
      <form action="<?=base_url() ?>C_admin/savetglmerah" method="post">
      <div class="modal-content">
      <div class="modal-header bg-primary">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h5 class="modal-title" id="exampleModalLongTitle"> <center> <b> Tambah Data Tanggal Libur</b> </center> </h5>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <div class="col-md-8">
            <input type="hidden" name="id_kalender" value="<?=$key->id_kalender; ?>">
            <label>Bulan</label>
            <input disabled id="bulan" name="bulan" class="form-control" value="<?=$key->bulan; ?>">
          </div>
          <div class="col-md-4">
            <label for="subject">Tahun</label>
            <input disabled id="tahun" name="tahun" class="form-control" value="<?=$key->tahun; ?>">
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-4">
            <label>Tanggal Libur <small>*selain minggu</small> </label>
            <input type="number" id="tgl_libur" name="tgl_libur" class="form-control" placeholder="Masukan Tempat Libur">
          </div>
          <div class="col-md-8">
            <label for="lname">Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Masukan Keterangan Libur">
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
      </form>
      </div>
      </div>
      </div>
    </div> -->
      <!-- akhir modal -->

      <!-- modal edit tgl merah-->
<!-- <?php foreach ($data_tgl_merah as $key) : ?>
      <div class="row">
        <div id="modaledit<?=$key->id_tgl;?>" class="modal fade">
          <div class="modal-dialog">
            <form action="<?=base_url() ?>C_admin/saveedit_tglmerah" method="post">
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Data Tanggal Libur</h4>
              </div>
              <div class="modal-body">
                <div class="row form-group">
                  <div class="col-md-8">
                    <input type="hidden" name="id_kalender" value="<?=$key->id_kalender; ?>">
                    <label>Bulan</label>
                    <input disabled id="bulan" name="bulan" class="form-control" value="<?=$key->bulan; ?>">
                  </div>
                  <div class="col-md-4">
                    <label for="subject">Tahun</label>
                    <input disabled id="tahun" name="tahun" class="form-control" value="<?=$key->tahun; ?>">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-4">
                    <label>Tanggal Libur <small>*selain minggu</small> </label>
                    <input type="number" id="tgl_libur" name="tgl_libur" class="form-control" value="<?=$key->tgl_libur; ?>">
                  </div>
                  <div class="col-md-8">
                    <label for="lname">Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control" value="<?=$key->keterangan; ?>">
                  </div>
                </div>
                  <br>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success"><i class="icon-pencil5"></i> Edit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div> -->
<!-- akhir modal -->




<script src="<?= base_url();?>assets/sweet/sweetalert2.all.min.js"></script>
