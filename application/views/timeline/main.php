
<br>
<br>
<br>
<div class="container">
<div class="row">
  <div class="col-lg-10 col-md-2 ml-auto mr-auto">
    <div class="row">
      <div class="col-md-2">
        <a href="<?php echo base_url();?>home/mforum/1">
					<button class="alert alert-info btn btn-primary btn-block" onclick="demo.showNotification('top','left')"><i class="material-icons">laptop_mac</i><br>TIK</button>
				</a>
      </div>
			<div class="col-md-2">
        <a href="<?php echo base_url();?>home/mforum/2">
					<button class="alert alert-success btn btn-primary btn-block" onclick="demo.showNotification('top','left')"><i class="material-icons">attach_money</i><br>Ekonomi</button>
				</a>
      </div>
      <div class="col-md-2">
        <a href="<?php echo base_url();?>home/mforum/3">
					<button class="alert alert-warning btn btn-primary btn-block" onclick="demo.showNotification('top','center')"><i class="material-icons">translate</i><br>Sastra</button>
				</a>
      </div>
			<div class="col-md-2">
        <a href="<?php echo base_url();?>home/mforum/4">
					<button class="alert alert-primary btn btn-primary btn-block" onclick="demo.showNotification('top','center')"><i class="material-icons" color_lens="white">wc</i><br>FISIP</button>
				</a>
      </div>
      <div class="col-md-2">
				<a href="<?php echo base_url();?>home/mforum/5">
					<button class=" alert alert-danger btn btn-primary btn-block" onclick="demo.showNotification('top','right')"><i class="material-icons">color_lens</i><br>Desain</button>
				</a>
      </div>
			<div class="col-md-2">
				<a href="<?php echo base_url();?>home/mforum/6">
					<button class="alert alert-info btn btn-primary btn-block" onclick="demo.showNotification('top','right')"><i class="material-icons">people</i><br>Hukum</button>
				</a>
      </div>
      </div>
      </div>
      </div>
      </div>

<div class="col-md-12">
<br>
	<div class="card">
    <div class="card-header card-header-tabs card-header-primary">
			<div class="row">
				<div class="col-md-5">
					<h3 class="card-title">
						<?php
							if(!empty($forumDisplay)){
								foreach($forumDisplay as $row){
									if($row->id == $id){
										echo $row->nama;
									}
                    		}
											}
											?>
					</h3>
				</div>
				<div class="col-md-5">
					<a class="btn btn-warning btn-round pull-right"  href="<?php echo base_url(); ?>home/createThread/<?php echo $id; ?>"> Buat Thread </a>
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
						<td>
							Judul : <label class="judul"><a href="<?php echo base_url() ?>home\detailThread\<?php echo $data->idforum?>"><?php echo $data->judul?></a></label>
							<br>
							Oleh &ensp;: <label class="user"><?php echo $data->nama ?></label> |   <label><?php echo $data->tanggal?> </label>  <br>
							Batas Cari Mentor :<label class="tanggal"><?php echo $data->datementor?> </label>  <br><br>
						</td>
						</tr>
							<?php
								}
									} else { ?>
										<tr>
							<td colspan="2"><center> Thread Belum Tersedia </center>
							</td>
						</tr>
					<?php }	?>
        </tbody>
      </table>
    </div>
  </div>
</div>
