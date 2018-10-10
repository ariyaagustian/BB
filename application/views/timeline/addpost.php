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

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">

									<?php if(!empty($flashdata)) {echo '<div class="flashdata">'.$flashdata.'</div>';} ?>

                  <h4 class="card-title">Buat Post Baru</h4>

                </div>
                <div class="card-body">
                  <form method="POST" action="<?php echo base_url() ?>home/saveThread">
                  <input type="hidden" name="idthread" id="idthread" value="<?php echo $id ?>">
                      <div class="col-md-12">
                        <div class="form-group">
                          <?php
              							if(!empty($forumDisplay)){
              								foreach($forumDisplay as $row){
              									if($row->id == $id){ ?>

													<label class="bmd-label-floating">Thread</label><label class="form-control">
                            <?php
                              echo $row->nama;
                                  }
                                }
                              }
                              ?></label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Judul Post</label>
                          <input type="text" class="form-control" name="tn" id="tn">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Type</label>
                          <select class="form-control"  name="type">
                            <option value="Jasa Mengajar">Jasa Mengajar</option>
                            <option value="Tugas Tulis">Tugas Tulis</option>
                            <option value="Makalah/Laporan">Makalah/Laporan</option>
                            <option value="Program/Aplikasi Software">Program/Aplikasi Software</option>
                            <option value="Desain/Animasi">Desain/Animasi</option>
                            <option value="other">other</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Matkul</label>
                          <input type="text" class="form-control" name="matkul" id="matkul">
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Batas Cari Mentor</label>
                          <input type="date" class="form-control" name="datementor" id="datementor">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Deadline Tugas</label>
                          <input type="date" class="form-control" name="deadline" id="deadline">
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fee Minimum (Rp)</label>
                          <input type="text" class="form-control" name="feemin" id="feemin" value="10000">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fee Maksimum (Rp)</label>
                          <input type="text" class="form-control" name="feemax" id="feemax" value="10000">
                        </div>
                      </div>
                    </div>
												<div class="col-md-12">
													<div class="form-group">
														<div class="form-group">
															<label class="bmd-label-floating">Deskripsi Tugas</label>
															<textarea class="form-control" rows="5" id="isi" name="isi"></textarea>
														</div>
													</div>
												</div>
													<button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
