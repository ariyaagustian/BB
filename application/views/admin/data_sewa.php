<div class="right_col" role="main" style="min-height: 3621px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data User Surabi</h3>
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
                      <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-plus-circle"></i>Tambah User Baru</button>
                      <!-- <button type="button" class="btn btn-primary pull-right" data-toggle="modal tooltip" data-target=".bs-example-modal-lg" data-placement="left" title="Tambah Data"><i class="fa fa-plus-circle"></i> Tambah User Baru</button><br><br> -->



                      <div id="myTabContent" class="tab-content">
                        <!-- <?php echo base_url(); ?>User_controller/tambahtimeline/<?php echo $id_thread; ?>" -->



                        <table class="table table-striped table-bordered" id="example" width="100%">
                          <thead class=" text-primary" align="center">
                            <tr align="center">

                            <th>
                              <center>NO</center>
                            </th>
                            <th align="center">
                              <center>ID</center>
                            </th>
                            <th align="center">
                              <center>LEVEL</center>
                            </th>
                            <th align="center">
                              <center>NAMA</center>
                            </th>
                            <th align="center">
                              <center>USERNAME</center>
                            </th>
                            <th align="center">
                              <center>PASSWORD</center>
                            </th>
                            <th align="center">
                              <center>NIM</center>
                            </th>
                            <th align="center">
                              <center>JURUSAN</center>
                            </th>
                            <th align="center">
                              <center>EMAIL</center>
                            </th>
                            <th align="center">
                              <center>TELEPON</center>
                            </th>
                            <th align="center"><center>ACTION</center></th>
                          </tr>
                          </thead>
                          <tbody align="center">

                          <?php
                              $no = 1;
                              foreach($daftar_user as $user){
                          ?>

                            <tr align="center">
                              <td><?php echo $no++; ?></td>
                          <td><?php echo $user->id; ?></td>
                          <td><?php echo $user->level; ?></td>
                          <td><?php echo $user->nama; ?></td>
                          <td><?php echo $user->username; ?></td>
                          <td><?php echo $user->password; ?></td>
                          <td><?php echo $user->nim; ?></td>
                          <td><?php echo $user->jurusan; ?></td>
                          <td><?php echo $user->email; ?></td>
                          <td><?php echo $user->tlp; ?></td>

                          <td>
                            <center>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-edit"></i></button>
                            <a href="<?php echo base_url() ?>User_controller/hapus_user/<?= $user->id?>/"><button type="submit" class="btn btn-danger pull-right" id="hapustl" onclick="Swal('Hapus Post','Yakin Ingin Menghapus Post?','error')" ><i class="fa fa-trash"></i></button></a>
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


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Foto Profil<small></small></h2>
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
                      <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content33" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a>
                        </li>
                      </ul>
                      <div id="myTabContent2" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">
                          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content22" aria-labelledby="profile-tab">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content33" aria-labelledby="profile-tab">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="clearfix"></div>




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
                <center><h4><b>Tambah User Baru</b></h4></center>
                  <form action="<?=base_url() ?>User_controller/saveuser_admin" method="post">

                    <div class="form-row">
                      <div class="col">
                        <label>Nama</label>
                        <input class="form-control" type="text" placeholder="Masukan Nama Lengkap" id="nama" name="nama">
                      </div>
                      <div class="col">
                        <label>NIM</label>
                      <input class="form-control" type="text" placeholder="Masukan NIM" id="nim" name="nim" >
                      </div>

                      <div class="col">
                        <label>Jurusan</label>
                        <select class="select2_multiple form-control" multiple="multiple"  name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
                            <option value="Akuntansi Komputerisasi">Akuntansi Komputerisasi</option>
                            <option value="Akuntansi S1">Akuntansi S1</option>
                            <option value="Akuntansi D3">Akuntansi D3</option>
                            <option value="Manajemen S1">Manajemen S1</option>
                            <option value="Manajemen D3">Manajemen D3</option>
                            <option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
                            <option value="Keuangan dan Perbankan">Keuangan dan Perbankan</option>
                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                            <option value="Ilmu Pemerintahan">Ilmu Pemerintahan</option>
                            <option value="Hubungan Internasional">Hubungan Internasional</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Desain Interior">Desain Interior</option>
                            <option value="Sastra Inggris">Sastra Inggris</option>
                            <option value="Sastra Jepang">Sastra Jepang</option>
                            <option value="Hukum">Hukum</option>
                       </select>
                      </div>

                      <div class="col">
                        <label >Telepon</label>
                        <input class="form-control" type="text" placeholder="Masukan Nomor Telepon" id="tlp" name="tlp">
                      </div>

                      <div class="col">
                        <label for="exampleFormControlInput1">Email</label>
                        <input  class="form-control" type="email" placeholder="Masukan Email" id="email" name="email" >
                      </div>

                      <div class="col">
                        <label >Username</label>
                        <input class="form-control" type="text" placeholder="Masukan Username Baru" id="username" name="username">
                      </div>
                      <div class="col">
                        <label>Password</label>
                        <input class="form-control" type="password" placeholder="Masukan Password Baru" id="password" name="password">
                      </div>
                      <div class="col">
                        <label>Level</label> &emsp;

                        <input class="flat form-check-input" type="radio" id="level" name="level" value="1">
                        <label class="flat form-check-label" for="inlineCheckbox1">1 (Admin)</label> &ensp;
                        <input class="flat form-check-input" type="radio" id="level" name="level" value="2">
                        <label class="form-check-label" for="inlineCheckbox1">2 (User)</label>

                    </div>
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
                    <center><h4><b>Edit User</b></h4></center>
                      <form action="<?=base_url() ?>User_controller/saveedituser_admin" method="post">

                        <div class="form-row">
                          <div class="col">
                            <label>Nama</label>
                            <input class="form-control" type="text" placeholder="Masukan Nama Lengkap" id="nama" name="nama" value="<?=$user->id ?>">
                          </div>
                          <div class="col">
                            <label>NIM</label>
                          <input class="form-control" type="text" placeholder="Masukan NIM" id="nim" name="nim" value="<?=$user->nim?>">
                          </div>

                          <div class="col">
                            <label>Jurusan</label>
                            <select class="select2_multiple form-control" multiple="multiple"  name="jurusan" >
                                <option <?php if( $user->jurusan =='Teknik Informatika'){ echo "selected";} ?> value="Teknik Informatika">Teknik Informatika</option>
                                <option <?php if( $user->jurusan =='Sistem Informasi'){ echo "selected"; }?> value="Sistem Informasi">Sistem Informasi</option>
                                <option <?php if( $user->jurusan =='Teknik Komputer'){ echo "selected"; }?> value="Teknik Komputer">Teknik Komputer</option>
                                <option <?php if( $user->jurusan =='Teknik Elektro'){ echo "selected";} ?> value="Teknik Elektro">Teknik Elektro</option>
                                <option <?php if( $user->jurusan =='Teknik Arsitektur'){ echo "selected"; }?> value="Teknik Arsitektur">Teknik Arsitektur</option>
                                <option <?php if( $user->jurusan =='Teknik Sipil'){echo "selected"; } ?> value="Teknik Sipil">Teknik Sipil</option>
                                <option <?php if( $user->jurusan =='Teknik Industri'){echo "selected"; } ?> value="Teknik Industri">Teknik Industri</option>
                                <option <?php if( $user->jurusan =='Perencanaan Wilayah dan Kota'){echo "selected"; } ?> value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
                                <option <?php if( $user->jurusan =='Akuntansi Komputerisasi'){echo "selected"; } ?> value="Akuntansi Komputerisasi">Akuntansi Komputerisasi</option>
                                <option <?php if( $user->jurusan =='Akuntansi S1'){echo "selected"; } ?> value="Akuntansi S1">Akuntansi S1</option>
                                <option <?php if( $user->jurusan =='Akuntansi D3'){echo "selected"; } ?> value="Akuntansi D3">Akuntansi D3</option>
                                <option <?php if( $user->jurusan =='Manajemen S1'){echo "selected"; } ?> value="Manajemen S1">Manajemen S1</option>
                                <option <?php if( $user->jurusan =='Manajemen D3'){echo "selected"; } ?> value="Manajemen D3">Manajemen D3</option>
                                <option <?php if( $user->jurusan =='Manajemen Pemasaran'){echo "selected"; } ?> value="Manajemen Pemasaran">Manajemen Pemasaran</option>
                                <option <?php if( $user->jurusan=='Keuangan dan Perbankan'){echo "selected"; } ?> value="Keuangan dan Perbankan">Keuangan dan Perbankan</option>
                                <option <?php if($user->jurusan=='Ilmu Komunikasi'){echo "selected"; } ?> value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                <option <?php if($user->jurusan=='Ilmu Pemerintahan'){echo "selected"; } ?> value="Ilmu Pemerintahan">Ilmu Pemerintahan</option>
                                <option <?php if( $user->jurusan =='Hubungan Internasional'){echo "selected"; } ?> value="Hubungan Internasional">Hubungan Internasional</option>
                                <option <?php if( $user->jurusan =='Desain Komunikasi Visual'){echo "selected"; } ?> value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                <option <?php if( $user->jurusan =='Desain Interior'){echo "selected"; } ?> value="Desain Interior">Desain Interior</option>
                                <option <?php if( $user->jurusan =='Sastra Inggris'){echo "selected"; } ?> value="Sastra Inggris">Sastra Inggris</option>
                                <option <?php if( $user->jurusan =='Sastra Jepang'){echo "selected"; } ?> value="Sastra Jepang">Sastra Jepang</option>
                                <option <?php if( $user->jurusan =='Hukum'){echo "selected"; } ?> value="Hukum">Hukum</option>
                           </select>
                          </div>

                          <div class="col">
                            <label >Telepon</label>
                            <input class="form-control" type="text" placeholder="Masukan Nomor Telepon" id="tlp" name="tlp" value="<?=$user->email ?>" >
                          </div>

                          <div class="col">
                            <label for="exampleFormControlInput1">Email</label>
                            <input  class="form-control" type="email" placeholder="Masukan Email" id="email" name="email" value="<?=$user->email ?>" >
                          </div>

                          <div class="col">
                            <label >Username</label>
                            <input class="form-control" type="text" placeholder="Masukan Username Baru" id="username" name="username" value="<?=$user->email ?>">
                          </div>
                          <div class="col">
                            <label>Password</label>
                            <input class="form-control" type="password" placeholder="Masukan Password Baru" id="password" name="password" value="<?=$user->password ?>">
                          </div>
                          <div class="col">
                            <label>Level</label> &emsp;

                            <input checked="<?php if($user->level=='1'){ echo "checked"; } ?>" class="flat form-check-input" type="radio" id="level" name="level" value="1">
                            <label class="flat form-check-label" for="inlineCheckbox1">1 (Admin)</label> &ensp;

                            <input checked="<?php if($user->level=='2'){ echo "checked"; } ?>" class="flat form-check-input" type="radio" id="level" name="level" value="2">
                            <label class="form-check-label" for="inlineCheckbox1">2 (User)</label>

                        </div>
                        <input type="hidden" name="id" value="<?=$user->id ?>">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>

                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

                <!-- akhir modal -->

             <script src="<?= base_url();?>assets/sweet/sweetalert2.all.min.js">
             </script>
