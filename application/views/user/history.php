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
      <li class="nav-item ">
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
      <li class="nav-item active">
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

  <div class="col-md-12">
  <br>
  	<div class="card">
      <div class="card-header card-header-tabs card-header-primary">
  			<div class="row">
  				<div class="col-md-5">
  					<h3 class="card-title">
  						History
  					</h3>
  				</div>
  			</div>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
  				<tbody>
                    <?php
                      if(!empty($history)){
                        foreach($history as $data){
                          ?>
            <tr>
  						<td>
                Anda Telah membuat suatu post dengan judul <?php echo $data->judul; ?> ( <?php  echo  $data->tanggal; ?> )
                <br>
                <a href="<?php echo base_url() ?>User_controller/detailthread/<?php echo $data->id_thread?>/<?php echo $data->id_timeline?>" text-align="right">Lihat Detail Disini</a>
              </td>
  						</tr>
  							<?php
  								}
  									} else { ?>
  										<tr>
  							<td colspan="2"><center> Thread Belum TersediaAnda Belum Memiliki History Apapun </center>
  							</td>
  						</tr>
  					<?php }	?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
