<aside id="qbootstrap-hero">
    <div class="flexslider">
      <ul class="slides">
        <li style="background-image: url(images/img_bg_5.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center slider-text">
                <div class="slider-text-inner">
                  <h1>Dr. <strong> Mary Smith</strong></h1>
                  <h2 class="doc-holder">Dr. Mary Smith's Plastic Surgery Clinic Welcomes You!</h2>
                  <h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
                  <p><a class="btn btn-primary btn-lg" href="appointment.html">Make an Appointment</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(images/img_bg_1.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center slider-text">
                <div class="slider-text-inner">
                  <h1>Dr. <strong> Mark Bowman</strong></h1>
                  <h2 class="doc-holder">Dr. Mark Bowman's Dental Clinic Welcomes You!</h2>
                  <h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
                  <p><a class="btn btn-primary btn-lg" href="appointment.html">Make an Appointment</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(images/img_bg_2.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center slider-text">
                <div class="slider-text-inner">
                  <h1>Have an Access to <strong>a Health Professional at any time</strong></h1>
                  <h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
                  <p><a class="btn btn-primary btn-lg btn-learn" href="appointment.html">Make an Appointment</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(images/img_bg_3.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center slider-text">
                <div class="slider-text-inner">
                  <h1>Special offer! <strong>Free Consultation</strong> this month only</h1>
                  <h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
                  <p><a class="btn btn-primary btn-lg btn-learn" href="appointment.html">Make an Appointment</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
        </ul>
      </div>
  </aside>

<!-- sidebar -->
      <body class="nav-md">
        <div class="container body">
          <div class="main_container">
            <div class="col-md-3 left_col">
              <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                  <center><br><a href="index.html" class="site_title"><img src="<?php echo base_url();?>assets/img/logoo.png" width="50%"> </a><center>
                </div>/

                <div class="clearfix"></div>



                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                  <div class="menu_section">
                    <ul class="nav side-menu">
                      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?=base_url();?>User_controller/dashadmin">Dashboard</a></li>
                        </ul>
                      </li>

                      <li><a><i class="fa fa-user"></i>User<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?=base_url();?>User_controller/tampil">Data User</a></li>

                        </ul>
                      </li>

                      <li><a><i class="fa fa-clipboard"></i>Post & Timeline<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="<?=base_url();?>User_controller/tampil_thread">Thread</a></li>
                          <li><a href="<?=base_url();?>User_controller/tampil_timeline">Timeline</a></li>
                          <li><a href="<?=base_url();?>User_controller/tampil_komen">Komentar</a></li>
                          <!-- <li><a href="icons.html">Cari Mentor</a></li> -->
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
                        <b> Admin</b>
                        <span class=" fa fa-angle-down"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="<?php echo base_url();?>User_controller/logout">Log Out</a></li>
                      </ul>
                    </li>

                    <li role="presentation" class="dropdown">

                      <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <a>
                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                            <span>
                              <span>John Smith</span>
                              <span class="time">3 mins ago</span>
                            </span>
                            <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                          </a>
                        </li>
                        <li>
                          <div class="text-center">
                            <a>
                              <strong>See All Alerts</strong>
                              <i class="fa fa-angle-right"></i>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- /top navigation -->
