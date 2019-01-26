<div class="right_col" role="main" style="min-height: 3621px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Sewa Terapi</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Data Sewa<small></small></h2>
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


                    <div class="">
                    <?php
                    if($this->session->flashdata('tambahsewasukses')) { ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data Sewa Baru <strong><?= $this->session->flashdata('tambahsewasukses');  ?></strong> ditambahkan
                  </div>
                <?php } else if($this->session->flashdata('tambahsewagagal')) {?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                    Data Sewa Baru <strong><?= $this->session->flashdata('tambahsewagagal');  ?></strong> ditambahkan
                </div>
                <?php } ?>
                    </div>


                  <div class="">
                  <?php
                  if($this->session->flashdata('hapusewasukses')) { ?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                    Data Sewa <strong><?= $this->session->flashdata('hapussewasukses');  ?></strong> dihapus
                </div>
              <?php } else if($this->session->flashdata('hapussewagagal')) {?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                  Data Sewa <strong><?= $this->session->flashdata('hapussewagagal');  ?></strong> dihapus
              </div>
              <?php } ?>
                  </div>


                  <div class="">
                  <?php
                  if($this->session->flashdata('editsewasukses')) { ?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  Data Sewa <strong><?= $this->session->flashdata('editsewasukses');  ?></strong> diedit
                </div>
              <?php } else if($this->session->flashdata('editsewagagal')) {?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                Data Sewa <strong><?= $this->session->flashdata('editsewagagal');  ?></strong> diedit
              </div>
              <?php } ?>
                  </div>


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambahsewa"><i class="fa fa-plus-circle"></i>&ensp;Tambah Sewa Baru</button>
                      <div id="myTabContent" class="tab-content">
                        <!-- <?php echo base_url(); ?>User_controller/tambahtimeline/<?php echo $id_thread; ?>" -->



                        <table class="table table-striped table-bordered" id="example" width="100%">
                          <thead class=" text-primary" align="center">
                            <tr align="center">

                              <th>
                                <center>No</center>
                              </th>
                              <th align="center">
                                <center>Nama Pelanggan</center>
                              </th>
                              <th align="center">
                                <center>Tgl Sewa</center>
                              </th>
                              <th align="center">
                                <center>Sesi Jam</center>
                              </th>
                              <th align="center">
                                <center>Total Bayar</center>
                              </th>
                              <th align="center">
                                <center>Status</center>
                              </th>
                              <th align="center">
                                <center>Action
                                </center>
                              </th>
                          </tr>
                          </thead>
                          <tbody align="center">
                              <?php
                                  $no = 1;
                                  foreach($data_sewa as $user){
                              ?>
                            <tr align="center">
                            <td><?=$no++; ?></td>
                            <td><?=$user->nama; ?></td>
                            <td><?=$user->tgl_sewa; ?></td>
                            <td><?=$user->jam; ?></td>
                            <td><?=$user->total_bayar; ?></td>
                            <td><button type="button" <?php if($user->status=="Lunas"){?> class="btn btn-success" <?php } else { ?> class="btn btn-warning" <?php } ?>><?=$user->status; ?></button></td>
                            <td>
                              <center>
                              <a data-toggle="modal" data-target="#modalinfo<?=$user->id_sewa;?>" class="btn btn-info btn-circle" data-popup="tooltip" data-placement="top" title="Detail"><i class="fa fa-info-circle"></i></a>

                              <a data-toggle="modal" data-target="#modal-edit<?=$user->id_sewa;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>

                              <a href="<?php echo base_url() ?>C_admin/hapus_sewa/<?= $user->id_sewa?>/"><button type="submit" class="btn btn-danger" id="hapussewa" onclick="Swal('Hapus Sewa','Yakin Ingin Menghapus Jadwal Sewa ?','error')" ><i class="fa fa-trash"></i></button></a>
                              </center>
                            </td>
                            </tr>
                          <?php } ?>
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





        <!-- modal detail -->
        <?php $no=0; foreach($data_sewa as $user): $no++; ?>
        <div class="row">
          <div id="modalinfo<?=$user->id_sewa;?>" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Detail Data Terapi</h4>
                </div>
                <div class="modal-body">
                  <div class="form-row">
                    <div class="col">
                      <label>Id Sewa</label>
                      <input class="form-control" type="text" id="tgl_sewa" value="<?=$user->id_sewa;?>" name="nama"readonly>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col">
                      <label>Nomor Kwitansi</label>
                      <input class="form-control" type="text" id="tgl_sewa" value="<?=$user->no_kwitansi;?>" name="nama"readonly>
                    </div>
                  </div>

                    <?php foreach($data_user as $key){
                      if($user->id_user==$key->id_user){ ?>
                    <div class="row form-group">
                    <div class="col-md-6">
                      <label>Nama User</label>
                      <input type="text" class="form-control" value="<?=$key->nama;?>" readonly>
                    </div>
                  <?php }} ?>
                    <div class="col-md-6">
                      <label for="lname">Tanggal Sewa</label>
                      <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?=$user->tgl_sewa; ?>" readonly>
                    </div>
                    </div>

                    <div class="form-row">
                      <div class="col md-8">
                        <label>Total Bayar</label>
                        <input class="form-control" type="text"  value="<?=$user->total_bayar;?>" name="nama"readonly
                        >
                      </div>
                    </div>


                    <div class="row form-group">
                    <div class="col-md-8">
                      <label>Total Bayar</label>
                      <input type="text" class="form-control" value="<?=$user->total_bayar;?>" readonly>
                    </div>
                    <div class="col-md-4">
                      <label >Status</label> <br>
                      <button type="button" <?php if($user->status=="Lunas"){?> class="btn btn-success" <?php } else { ?> class="btn btn-warning" <?php } ?>><?=$user->status; ?></button>
                    </div>
                    </div>
                    <br>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
        <!-- akhir modal -->


        <!-- modal tambah -->
        <div class="row">
          <div id="tambahsewa" class="modal fade">
            <div class="modal-dialog">
              <form action="<?=base_url() ?>C_admin/savesewa" method="post">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Data Sewa</h4>
                </div>
                <div class="modal-body">
                  <div class="form-row">
                    <div class="col">
                      <label>Nomor Kwitansi</label>
                      <input class="form-control" type="text" id="no_kwitansi" name="no_kwitansi" placeholder="Masukan Nomor Kwitansi">
                    </div>


                    <div class="row form-group">
                    <div class="col-md-8">
                      <label>Nama User</label>
                      <select class="selectpicker form-control" name="id_user">
                        <?php foreach ($data_user as $key) { ?>
                         <option value="<?=$key->id_user; ?>"><?=$key->nama; ?></option>
                       <?php } ?>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <label for="lname">Pilihan Sesi</label>
                      <select class="selectpicker form-control" name="id_jadwal">
                        <?php foreach ($data_sesi as $key) { ?>
                         <option value="<?=$key->id_jadwal; ?>"><?=$key->jam; ?></option>
                       <?php } ?>
                      </select>
                    </div>
                  </div>

                    <div class="row form-group">
                    <div class="col-md-6">
                    <label>Tanggal Sewa</label>
                      <input type="number" id="tgl_sewa" name="tgl_sewa" class="form-control">
                    </div>
                    <div class="col-md-6">
                    <label>Bulan,Tahun</label>
                    <select class="selectpicker form-control" name="id_kalender">
                      <?php foreach ($data_kalender as $kal) { ?>
                       <option value="<?=$kal->id_kalender; ?>"><?=$kal->bulan;?>/<?=$kal->tahun;?></option>
                     <?php } ?>
                    </select>
                    </div>
                    </div>

                    <div class="row form-group">
                    <div class="col-md-8">
                    <label>Total Bayar</label>
                      <input type="number" id="total_bayar" name="total_bayar" class="form-control">
                    </div>
                    <div class="col-md-4">
                    <label>Status</label>
                    <select class="selectpicker form-control" name="status">
                       <option value="Lunas">Lunas</option>
                       <option value="Belum Lunas">Belum Lunas</option>
                    </select>
                    </div>
                    </div>

                    </div>
                    <br>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
