<!-- sidebar -->
      <body class="nav-md">
        <div class="container body">
          <div class="main_container">
            <div class="col-md-3 left_col">
              <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                  <center><br><a href="index.html" class="site_title"><img src="<?php echo base_url();?>assets/medcare/images/logo2.png" width="50%"> </a><center>
                </div>/

                <div class="clearfix"></div>



                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                  <div class="menu_section">
                    <ul class="nav side-menu">
                      <li><a href="<?=base_url();?>C_admin/dashboard"><i class="fa fa-home"></i>&ensp;Dashboard</a></li>
                      <li><a href="<?=base_url();?>C_admin/datauser"><i class="fa fa-user"></i>&ensp;Data User</a></li>
                      <li><a><i class="fa fa-clipboard"></i>&ensp;Data Terapi<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?=base_url();?>C_admin/datakalender">Data Kalender</a></li>
                          <li><a href="<?=base_url();?>C_admin/datasewa">Data Sewa</a></li>

                        </ul>
                      </li>

                    </ul>
                  </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                  <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                  </a>
                </div>
                <!-- /menu footer buttons -->
              </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
              <div class="nav_menu">
                <nav>
                  <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                  </div>

                  <ul class="nav navbar-nav navbar-right">
                    <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <b>Admin</b>
                        <span class=" fa fa-angle-down"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="<?php echo base_url();?>C_auth/logout"><i class="fa fa-sign-out"></i>&ensp;Keluar</a></li>
                      </ul>
                    </li>

                    <li role="presentation" class="dropdown">


                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- /top navigation -->
