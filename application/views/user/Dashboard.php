<?php
  $this->load->view('template/v_header');
?>
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
      <li class="nav-item active  ">
        <a class="nav-link" href="<?php echo base_url();?>User_controller/dash">
          <i class="material-icons"></i>
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>User_controller/tampil"> <!-- blm dirubah-->
          <i class="material-icons"></i>
          <i class="material-icons">people</i>
          <p>Profil</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>User_controller/timeline">
          <i class="material-icons">timeline</i>
          <p>Timeline</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="">
          <i class="material-icons">content_paste</i>
          <p>History</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="User_controller/logout">
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

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="#pablo">Profil</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <i class="material-icons">dashboard</i>
              <p class="d-lg-none d-md-block">
                Stats
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">notifications</i>
              <span class="notification">5</span>
              <p class="d-lg-none d-md-block">
                Some Actions
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Mike John responded to your email</a>
              <a class="dropdown-item" href="#">You have 5 new tasks</a>
              <a class="dropdown-item" href="#">You're now friend with Andrew</a>
              <a class="dropdown-item" href="#">Another Notification</a>
              <a class="dropdown-item" href="#">Another One</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <i class="material-icons">message</i>
              <p class="d-lg-none d-md-block">
                Account
              </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

<!-- Akhir sidebar-->
<tbody>
  <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <center><h4 class="card-title "> <a href='#'> <i class="fa fa-arrow-circle-left" style="font-size:24px"></i></a>&emsp;&emsp;      BULAN&emsp;&emsp;<a href='#'><i class="fa fa-arrow-circle-right" style="font-size:24px"></i></a></h4></center>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" >
                      <thead class=" text-primary" align="center">
                        <th width="10%" align="center">
                          Rank
                        </th>
                        <th width="40%" align="center">
                          Nama
                        </th>
                        <th width="10%">
                          <img src="<?php echo base_url();?>assets/dass/assets/img/5.png" width="50%">
                        </th>
                        <th width="10%">
                          <img src="<?php echo base_url();?>assets/dass/assets/img/4.png" width="50%">
                        </th>
                        <th width="10%">
                          <img src="<?php echo base_url();?>assets/dass/assets/img/3.png" width="50%">
                        </th>
                        <th width="10%">
                          <img src="<?php echo base_url();?>assets/dass/assets/img/2.png" width="50%">
                        </th>
                        <th width="10%">
                          <img src="<?php echo base_url();?>assets/dass/assets/img/1.png" width="50%">
                        </th>
                      </thead>
                      <tbody align="center">
                        <tr align="center">
                          <td >
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            1
                          </td>
                          <td class="text-primary">
                            2
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            3
                          </td>
                        </tr>
                        <tr>
                          <td >
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            1
                          </td>
                          <td class="text-primary">
                            2
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            3
                          </td>
                        </tr>
                        <tr>
                          <td >
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            1
                          </td>
                          <td class="text-primary">
                            2
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            3
                          </td>
                        </tr>
                        <tr>
                          <td >
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            1
                          </td>
                          <td class="text-primary">
                            2
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            3
                          </td>
                        </tr>
                        <tr>
                          <td >
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            1
                          </td>
                          <td class="text-primary">
                            2
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            3
                          </td>
                        </tr>
                        <tr>
                          <td >
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            1
                          </td>
                          <td class="text-primary">
                            2
                          </td>
                          <td>
                            9
                          </td>
                          <td>
                            3
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>

</tbody>
 <?php $this->load->view('template/v_footer');
 ?>
