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
        <li class="nav-item active">
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
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>User_controller/tampil_thread">
            <i class="material-icons">content_paste</i>
            <p>Thread</p>
          </a>
        </li>
        <li class="nav-item">
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
  <p>Daftar Pengguna</p>
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <center><h4 class="card-title ">Daftar Pengguna</a></h4></center>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered " id="example" width="100%">
                      <thead class=" text-primary" align="center">
                        <th  align="center">
                          NO
                        </th>
                        <th align="center">
                          ID
                        </th>
                        <th align="center">
                          LEVEL
                        </th>
                        <th align="center">
                          NAMA
                        </th>
                        <th align="center">
                          USERNAME
                        </th>
                        <th align="center">
                          PASSWORD
                        </th>
                        <th align="center">
                          NIM
                        </th>
                        <th align="center">
                          JURUSAN
                        </th>
                        <th align="center">
                          EMAIL
                        </th>
                        <th align="center">
                          TELEPON
                        </th>
                        <th colspan="2" align="center">ACTION</th>
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
                      <td><?php echo '<a href="'.base_url().'User_controller/edit_timeline/'.$user->id.'"><i class="material-icons">border_color</i></a>'?></td>
                      <td><?php echo '<a href="'.base_url().'User_controller/delete_timeline/'.$user->id.'" onclick="return confirm(\'Anda yakin akan menghapus user '.$user->nama.'?\')"><i class="material-icons">restore_from_trash</i></a>'?></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


    </div>
    <script>
    var table;
    $(document).ready(function() {
    table = $('#example').DataTable();
    });
    </script>
  </div>
