
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
      <li class="nav-item  active">
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

<!-- awal header thread -->
<div class="main-panel">

  <br>
  <br>
  <br>
  <div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-2 ml-auto mr-auto">
      <div class="row">
        <div class="col-md-2">
          <a href="<?php echo base_url();?>User_controller/thread/1">
  					<button class="alert alert-info btn btn-primary btn-block" onclick="demo.showNotification('top','left')"><i class="material-icons">laptop_mac</i><br>TIK</button>
  				</a>
        </div>
  			<div class="col-md-2">
          <a href="<?php echo base_url();?>User_controller/thread/2">
  					<button class="alert alert-success btn btn-primary btn-block" onclick="demo.showNotification('top','left')"><i class="material-icons">attach_money</i><br>Ekonomi</button>
  				</a>
        </div>
        <div class="col-md-2">
          <a href="<?php echo base_url();?>User_controller/thread/3">
  					<button class="alert alert-warning btn btn-primary btn-block" onclick="demo.showNotification('top','center')"><i class="material-icons">translate</i><br>Sastra</button>
  				</a>
        </div>
  			<div class="col-md-2">
          <a href="<?php echo base_url();?>User_controller/thread/4">
  					<button class="alert alert-primary btn btn-primary btn-block" onclick="demo.showNotification('top','center')"><i class="material-icons" color_lens="white">wc</i><br>FISIP</button>
  				</a>
        </div>
        <div class="col-md-2">
  				<a href="<?php echo base_url();?>User_controller/thread/5">
  					<button class=" alert alert-danger btn btn-primary btn-block" onclick="demo.showNotification('top','right')"><i class="material-icons">color_lens</i><br>Desain</button>
  				</a>
        </div>
  			<div class="col-md-2">
  				<a href="<?php echo base_url();?>User_controller/thread/6">
  					<button class="alert alert-info btn btn-primary btn-block" onclick="demo.showNotification('top','right')"><i class="material-icons">people</i><br>Hukum</button>
  				</a>
        </div>
        </div>
        </div>
        </div>

        </div>
<!-- akhir header thread -->
 <div class="col-md-12">
 <br>
 	<div class="card">
     <div class="card-header card-header-tabs card-header-primary">
 			<div class="row">
 				<div class="col-md-5">
 					<h3 class="card-title">
            <?php
							if(!empty($thread)){
								foreach($thread as $row){
									if($row->id_thread == $id_thread){
										echo $row->nama;
									}
                    		}
											}
											?>
 					</h3>
 				</div>
        <div class="col-md-5">
            <a class="btn btn-warning btn-round pull-right"  href="<?php echo base_url(); ?>User_controller/tambahtimeline/<?= $id_thread ?>"> Buat Thread </a>
        </div>
 			</div>
     </div>
 		<div class="card-body table-responsive">
       <table class="table table-hover">
 				<tbody>
 					<?php
 						if(!empty($forumDisplayFill)){
 							foreach($forumDisplayFill as $data){ ?>
 								<tr>
 									<td colspan="3">
 									Judul : <label class="judul"><a href="<?php echo base_url() ?>User_controller\detailThread\<?php echo $data->id_timeline?>" ><?php echo $data->judul?></a></label>
 									<br>
 									<label class="user"> Oleh <?php echo $data->nama ?></label> |   <label class="tanggal">  Di Post Tanggal <?php echo $data->tanggal?> </label>  <br> <br>
                  Batas Cari Mentor : <label><?php echo $data->datementor ?></label><br>
                  Type Tugas &emsp; &nbsp; &emsp;: <label><?php echo $data->type ?></label><br>
 									Deadline Tugas &emsp;: <label><?php echo $data->deadline ?></label><br>
 									Matkul&emsp;&emsp;&emsp;&emsp;&emsp;: <label><?php echo $data->matkul ?></label><br>
 									Fee &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;: <label>Rp. <?php echo $data->feemin ?></label> - <label>Rp. <?php echo $data->feemax ?></label><br>
 									Deskripsi &emsp; &emsp;&emsp;&ensp;: <label><?php echo $data->isi?></label>
 									</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td>
 										<a href="<?php echo base_url(); ?>User_controller/reqComment/<?php echo $id_thread; ?>/<?php echo $id_timeline; ?>"><button type="submit" class="btn btn-primary pull-right" onclick="demo.showNotification">Komentar</button></a>
 										&emsp;
 										<!-- <a href="<?php echo base_url();?>User_controller/siap/<?php echo $siap=1;?>/<?php echo $id_thread;?>/<?php echo $id_timeline;?>"> -->





                    <button type="button" class="btn btn-primary btn-danger pull-right" id="check" class="btn btn-success">Saya Siap!!! &emsp; <span id="ht" >0</span></button>
                    <input type="hidden" name="id_timeline" value="<?= $id_timeline; ?>">
                    <input type="hidden" name="id" value="<?= $this->session->id; ?>">

      </button>
    </p>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?= base_url("assets/main.js") ?>" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          counter();
          function counter() {
            as = get("<?= base_url("User_controller/counter") ?>");
            $("#ht").html(as.hitung);
          }
          $("#check").on('click',function(event) {
            event.preventDefault();
            id = $("#id").val();
            id_timeline = $("#id_timeline").val();
            a = post("<?= base_url("User_controller/sayasiap") ?>",{id:id},{id_timeline:id_timeline});
            if (a.status == 1) {
              counter();

            }else {
              new PNotify({
                  title: 'Gagal Check',
                  text: 'tidak tercheck',
                  type: 'error'
              });
            }
          });
        });
    </script>



                      <!-- <button type="submit" class="btn btn-primary btn-danger pull-right" id=siap onclick="demo.showNotification('top','right')">Saya Siap!!! &emsp; <?php echo $siap; ?></button></a> -->
 									</td>
 									<tr>
 										<td></td>
 										<td colspan="2">Komentar</td>
 									</tr>
 								</tr>

 								<?php
 								if(!empty($forumDisplayFillComment)){
 									foreach($forumDisplayFillComment as $data2){ ?>
 								<tr>
 									<td></td>

 									<td colspan="2">
 											<label class="text-primary judul"> <?php echo $data2->nama ?></label> |
 											<label class="text-primary"><?php echo $data2->tanggal?></label><br>
 											&emsp;&emsp;<label class="isi"><?php echo $data2->isi?></label></td>

 												<?php }
 												} else { ?>
 													<tr>
 														<td colspan="2"><center> Tidak Ada Komentar</center></td>
 													</tr>
 												<?php } ?>
 									<td>

 									</td>
 								</tr>
 									<?php }
 										} else { ?>
 								<tr>
 									<td colspan="2"><center> No Spesific Thread</center></td>
 								</tr>
 					<?php } ?>
 				</tbody>
 			</table>
 		</div>
 	</div>
 </div>
