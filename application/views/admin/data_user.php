<div class="right_col" role="main" style="min-height: 3621px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data User</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Data User<small></small></h2>
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
                  if($this->session->flashdata('tambahusersukses')) { ?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  User Baru <strong><?= $this->session->flashdata('tambahusersukses');  ?></strong> ditambahkan
                </div>
              <?php } else if($this->session->flashdata('tambahusergagal')) {?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                User Baru <strong><?= $this->session->flashdata('tambahusergagal');  ?></strong> ditambahkan
              </div>
              <?php } ?>
                  </div>


                  <div class="">
                  <?php
                  if($this->session->flashdata('hapususersukses')) { ?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  User <strong><?= $this->session->flashdata('hapususersukses');  ?></strong> dihapus
                </div>
              <?php } else if($this->session->flashdata('hapususergagal')) {?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                User <strong><?= $this->session->flashdata('hapususergagal');  ?></strong> dihapus
              </div>
              <?php } ?>
                  </div>


                  <div class="">
                  <?php
                  if($this->session->flashdata('editusersukses')) { ?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  User <strong><?= $this->session->flashdata('editusersukses');  ?></strong> diedit
                </div>
              <?php } else if($this->session->flashdata('editusergagal')) {?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                User <strong><?= $this->session->flashdata('editusergagal');  ?></strong> diedit
              </div>
              <?php } ?>
                  </div>


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambahuser"><i class="fa fa-plus-circle"></i>Tambah User Baru</button>
                      <div id="myTabContent" class="tab-content">
                        <!-- <?php echo base_url(); ?>User_controller/tambahtimeline/<?php echo $id_thread; ?>" -->



                        <table class="table table-striped table-bordered" id="example" width="100%">
                          <thead class=" text-primary" align="center">
                            <tr align="center">

                            <th>
                              <center>No</center>
                            </th>
                            <th align="center">
                              <center>Nama</center>
                            </th>
                            <th align="center">
                              <center>Tempat Lahir</center>
                            </th>
                            <th align="center">
                              <center>Tgl Lahir</center>
                            </th>
                            <th align="center">
                              <center>Gender</center>
                            </th>
                            <th align="center">
                              <center>Alamat</center>
                            </th>
                            <th align="center">
                              <center>No.Tlp</center>
                            </th>
                            <th align="center">
                              <center>Email</center>
                            </th>
                            <th align="center">
                              <center>Username</center>
                            </th>
                            <th align="center">
                            <center>Password</center>
                            </th>
                            <th align="center">
                            <center>Hak Akses</center>
                            </th>
                            <th align="center"><center>ACTION</center></th>
                          </tr>
                          </thead>
                          <tbody align="center">

                          <?php
                              $no = 1;
                              foreach($data_user as $user){
                          ?>

                            <tr align="center">
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $user->nama; ?></td>
                          <td><?php echo $user->tempat_lahir; ?></td>
                          <td><?php echo $user->tgl_lahir; ?></td>
                          <td><?php echo $user->gender; ?></td>
                          <td><?php echo $user->alamat; ?></td>
                          <td><?php echo $user->tlp; ?></td>
                          <td><?php echo $user->email; ?></td>
                          <td><?php echo $user->username; ?></td>
                          <td><?php echo $user->password; ?></td>
                          <td><?php echo $user->hak_akses; ?></td>
                          <td>
                            <center>
                            <a data-toggle="modal" data-target="#modal-edit<?=$user->id_user;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-edit"></i></a>

                            <a href="<?php echo base_url() ?>C_admin/hapus_user/<?= $user->id_user?>/"><button type="submit" class="btn btn-danger" id="hapususer" onclick="Swal('Hapus User','Yakin Ingin Menghapus User ?','error')" ><i class="fa fa-trash"></i></button></a>
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





        <!-- modal edit -->
  <?php $no=0; foreach($data_user as $user): $no++; ?>
        <div class="row">
          <div id="modal-edit<?=$user->id_user;?>" class="modal fade">
            <div class="modal-dialog">
              <form action="<?=base_url() ?>C_admin/saveedituser_admin" method="post">
              <div class="modal-content">
                <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Data</h4>
                </div>
                <div class="modal-body">
                  <div class="form-row">
                    <div class="col">
                      <label>Nama</label>
                      <input class="form-control" type="text" placeholder="Masukan Nama Lengkap" id="nama" name="nama" value="<?=$user->nama ?>">
                    </div>

                    <div class="row form-group">
                    <div class="col-md-6">
                      <label>Tempat Lahir</label>
                      <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="<?= $user->tempat_lahir; ?>">
                    </div>
                    <div class="col-md-6">
                      <label for="lname">Tanggal Lahir</label>
                      <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?=$user->tgl_lahir; ?>">
                    </div>
                    </div>

                    <div class="row form-group">
                    <div class="col-md-12">
                     <label>Alamat</label>
                     <textarea class="form-control" rows="5" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap"><?= $user->alamat; ?></textarea>
                    </div>
                    </div>

                    <div class="row form-group">
                    <div class="col-md-6">
                    <label>Nomor Telepon</label>
                      <input type="number" id="tlp" name="tlp" class="form-control" value="<?=$user->tlp; ?>">
                    </div>
                    <div class="col-md-6">
                    <label>Email</label> <small> &ensp;*jika ada</small>
                    <input type="email" id="email" name="email" class="form-control" value="<?=$user->email; ?>">
                    </div>
                    </div>

                    <div class="row form-group">
                    <div class="col-md-6">
                    <label>Username</label>
                      <input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username Baru" value="<?=$user->username; ?>">
                    </div>
                    <div class="col-md-6">
                    <label>Password</label>
                    <input type="password" id="password" name="password" class="form-control" value="<?=$user->password; ?>">
                    </div>
                    </div>

                    <input type="hidden" name="id_user" value="<?=$user->id_user ?>">
                    </div>
                    <br>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning"><i class="icon-pencil5"></i> Edit</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
</div>

<div class="clearfix"></div>

</div>
</div>


<!-- modal tambah user -->
<div class="row">
<div id="tambahuser" class="modal fade">
<div class="modal-dialog">
<form action="<?=base_url() ?>C_admin/saveuser_admin" method="post">
<div class="modal-content">
<div class="modal-header bg-primary">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h5 class="modal-title" id="exampleModalLongTitle"> <center> <b> Tambah User Baru </b> </center> </h5>
</div>
<div class="modal-body">
  <div class="row form-group">
    <div class="col-md-10">
      <label>Nama Lengkap</label>
      <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama">
    </div>
    <div class="col-md-2">
      <label for="subject">Gender</label>
      <select class="selectpicker form-control" name="gender">
         <option value="Pria">Pria</option>
         <option value="Wanita">Wanita</option>
      </select>
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-6">
      <label>Tempat Lahir</label>
      <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
    </div>
    <div class="col-md-6">
      <label for="lname">Tanggal Lahir</label>
      <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-12">
      <label>Alamat</label>
      <textarea class="form-control" rows="5" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap"></textarea>
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-6">
      <label>Nomor Telepon</label>
        <input type="number" id="tlp" name="tlp" class="form-control" placeholder="Masukan Nomor Telepon">
    </div>
    <div class="col-md-6">
      <label for="lname">Email</label> <small> &ensp;*jika ada</small>
      <input type="email" id="email" name="email" class="form-control" placeholder="Masukan Email">
    </div>
  </div>
  <br>
  <br>
  <div class="row form-group">
    <div class="col-md-6">
      <label>Username Baru</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username Baru">
    </div>
    <div class="col-md-6">
      <label>Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password Baru">
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
  <button type="submit" class="btn btn-warning">Tambah</button>
</div>
</form>
</div>
</div>
</div>


<!-- akhir modal -->

             <script src="<?= base_url();?>assets/sweet/sweetalert2.all.min.js">
             </script>
