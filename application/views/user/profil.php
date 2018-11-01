
<!-- Awal sidebar-->
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url();?>assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag

    SIDEBAR-->
    <br>
    <br>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>User_controller/dash"> <!-- blm dirubah-->
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href="<?php echo base_url();?>User_controller/tampil"> <!-- blm dirubah-->
          <i class="material-icons"></i>
          <i class="material-icons">people</i>
          <p>Profil</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>User_controller/thread">
          <i class="material-icons">timeline</i>
          <p>Timeline</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>User_controller/history">
          <i class="material-icons">content_paste</i>
          <p>History</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="logout">
          <i class="material-icons">logout</i>
          <p>Logout</p>
        </a>
      </li>
      <!-- <li class="nav-item "><a  class="nav-link" href="../home/user_login">
        <i class="material-icons">login</i>
        <p>Login</p>
      </a></li> -->
    </ul>
  </div>
</div>
<!-- AKHIR SIDEBAR -->

<div class="main-panel">

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <?php
                      foreach($daftar_user as $edit){
                      if ($edit->id == $this->session->userdata('id')){
                  ?>
                  <form action="<?php echo base_url() ?>User_controller/edit_user">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama</label>
                          <input type="text" class="form-control" value="<?php echo $edit->nama; ?>" id="nama" name="nama" disabled> <?php form_error('nama') ?>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">NIM</label>
                          <input  type="text" class="form-control" value="<?php echo $edit->nim?>" id="nim" name="nim" disable>
                        </div>
                      </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan" disable>
                                <option value="teknik informatika" $value="teknik informatika">Teknik Informatika</option>
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
                        </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Telepon</label>
                          <input type="text" class="form-control" value="<?php echo $edit->tlp?>" name="tlp" disable>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control" value="<?php echo $edit->email?>" id="email" name="email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" value="<?php echo $edit->username?>" id="username" name="username" disable>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" id="password" name="password" value="<?php echo $edit->password?>" disable>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Edit Biodata</button>
                    <div class="clearfix"></div>
                  <?php   ?>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Foto Profil</h4>
                </div>
              <div class="card-body">
                <form class="" action="<?php echo base_url() ?>upload/index" method="post"> <?php                             $id=$this->session->userdata('id') ?>
                  <center><img src="<?php echo base_url()?>gambar/<?php echo $id ?>.jpg" height="180px" weight="300px"><center>
                 <br>
                 <center><button type="submit" class="btn btn-primary pull-center">Ganti Foto Profil</button></center>
            </div>
          </form>





    <?php  } }
    $this->load->view('template/v_footer');?>
