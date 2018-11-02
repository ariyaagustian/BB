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
        <li class="nav-item  ">
          <a class="nav-link" href="<?php echo base_url();?>User_controller/dash"> <!-- blm dirubah-->
            <i class="material-icons">dashboard</i>
            <p>Dashboard Admin</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url();?>User_controller/tampil"> <!-- blm dirubah-->
            <i class="material-icons"></i>
            <i class="material-icons">people</i>
            <p>Pengguna</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url();?>User_controller/tampil_timeline">
            <i class="material-icons">timeline</i>
            <p>Timeline</p>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url();?>User_controller/tampil_thread">
            <i class="material-icons">content_paste</i>
            <p>Thread</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo base_url();?>User_controller/tampil_komen">
            <i class="material-icons">record_voice_over</i>
            <p>Komentar</p>
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
  <p>Daftar Thread</p>
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <center><h4 class="card-title ">Daftar Thread</a></h4></center>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" >
                      <thead class=" text-primary" align="center">
                        <th  align="center">
                          NO
                        </th>
                        <th align="center">
                          ID THREAD
                        </th>
                        <th align="center">
                          NAMA THREAD
                        </th>

                        <th colspan="2" align="center">ACTION</th>
                      </thead>
                      <tbody align="center">

                        <?php
                          $no = 1;
                          foreach($daftar_thread as $user){
                  ?>

                        <tr align="center">
                          <td><?php echo $no++; ?></td>
                      <td><?php echo $user->id_thread; ?></td>
                      <td><?php echo $user->nama; ?></td>
                      <td><?php echo '<a href="'.base_url().'User_controller/edit_timeline/'.$user->id_thread.'"><i class="material-icons">border_color</i></a>'?></td>
                      <td><?php echo '<a href="'.base_url().'User_controller/delete_timeline/'.$user->id_thread.'" onclick="return confirm(\'Anda yakin akan menghapus komentar '.$user->nama.'?\')"><i class="material-icons">restore_from_trash</i></a>'?></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


    </div>
  </div>
