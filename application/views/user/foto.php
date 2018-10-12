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
       <li class="nav-item ">
         <a class="nav-link" href=""> <!-- blm dirubah-->
           <i class="material-icons"></i>
           <i class="material-icons">dashboard</i>
           <p>Dashboard</p>
         </a>
       </li>
       <li class="nav-item  active ">
         <a class="nav-link" href=""> <!-- blm dirubah-->
           <i class="material-icons"></i>
           <i class="material-icons">people</i>
           <p>Profil</p>
         </a>
       </li>
       <li class="nav-item ">
         <a class="nav-link" href="">
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
         <a class="nav-link" href="../home/user_logout">
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
         <a class="navbar-brand" href="#pablo">Dashboard</a>
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