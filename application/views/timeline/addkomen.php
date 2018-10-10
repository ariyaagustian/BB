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


<div class="col-md-8">
            <div class="card">
              <div class="card-header card-header-tabs card-header-primary">
                <h3 class="card-title">Fakultas Teknik dan Ilmu  Komputer</h3>
              </div>
              <div class="card-body">

                <form method="POST" action="<?php echo base_url() ?>home/saveComment">
                  <?php if(!empty($flashdata)) {echo '<div class="flashdata">'.$flashdata.'</div>';} ?>

                <input type="hidden" name="idthread" id="idthread" value="<?php echo $id ?>">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      Judul : <label class="judul"><?php if(!empty($judul)) {echo $judul;} ?></label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Isi Komentar</label>
                          <textarea class="form-control" rows="5" id="isi" name="isi"></textarea>
                        </div>
                      </div>
                  </div>
                </div>
                  <button type="submit" class="btn btn-primary pull-right" onclick="demo.showNotification">Submit</button>
                </form>
              </div>
            </div>
