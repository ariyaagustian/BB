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
      <li class="nav-item active">
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
      <li class="nav-item ">
        <a class="nav-link" href="./tables.html">
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
<div class="main-panel">


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Upload Foto Profil</h4>
                </div>
              <div class="card-body">
                <?php echo $error;?>

  	             <?php echo form_open_multipart('upload/aksi_upload');?>
                 <input type="file" name="berkas" >
                 <br>
                 <center><button type="submit" class="btn btn-primary pull-right" value="upload">Update Foto Profil</button></center>
                 </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    <?php
    $this->load->view('template/v_footer');?>
