<div id="qbootstrap-contact">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Riwayat Terapi</h2>
					<p>Anda dapat melihat riwayat terapi, maupun jadwal booking yang sudah Anda buat. Anda juga dapat melihat detail pesanan ataupun menghapus jadwal sewa tertentu</p>
				</div>


        <!-- notif edit profil -->
        <div class="">
          <?php
            if($this->session->flashdata('hapusbooksukses')) { ?>
              <br>
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                Jadwal Terapi Anda <strong><?= $this->session->flashdata('hapusbooksukses'); ?></strong> Dihapus
              </div>
            <?php } else if($this->session->flashdata('hapusbookgagal')) {?>
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  Jadwal Terapi Anda <strong><?= $this->session->flashdata('hapusbookgagal'); ?></strong> Dihapus
              </div>
              <?php } ?>
          </div>
          <!-- akhir notif edit profil -->


			</div>
			<div class="row">
        <table class="table table-bordered table-striped" id="example" width="100%">
            <thead>
              <tr>
                <th scope="row"><center>No</center></th>
                <th scope="row"><center>Tanggal Sewa</center></th>
                <th scope="row"><center>Hari</center></th>
                <th scope="row"><center>Pukul</center></th>
                <th scope="row"><center>Total Bayar</center></th>
                <th scope="row"><center>Aksi</center></th>
              </tr>

              </thead>
              <tbody>

                <?php
                $no=1;
                  if($daftar_sewa){
                    foreach($daftar_sewa as $data){

                ?>
                <tr>
                  <td><center><?=$no++; ?></center> </td>
                  <td><center><?=$data->tgl_sewa; ?></center></td>
                  <td><center> <?= $data->hari_sewa; ?></center></td>
                  <td><center> <?= $data->jam_sewa_awal;?>.00 - <?= $data->jam_sewa_akhir; ?>.00</center></td>
                  <td><center> Rp.<?= $data->total_bayar; ?></center></td>
                  <!-- <td><center> <?php if ($data->status=="Belum Lunas") { echo "<span class='badge badge-warning'>Belum Lunas</span>"; } else { echo "<span class='badge badge-success'>Lunas</span>"; } ?></center></td> -->
                  <td>
                    <center>
                      <?php
                        if ($data->status=="Belum Lunas") { ?>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusbook" >Hapus</button>
                        <?php } else {?>
                          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsewa" >Detail</button>
                        <?php } ?>
                    </center>
                  </td>
                  <!-- <td><center><a href="<?php echo base_url() ?>User_controller/detailthread/<?php echo $data->id_thread?>/<?php echo $data->id_timeline?>" role="button" text-align="right"  class="badge badge-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Post"><i class="material-icons">border_color</i></a> </center></td> -->
                </tr>

  							<?php
              }
  									} else { ?>
  										<tr>
  							<td colspan="3"><center> Anda Belum Melakukan Terapi </center>
  							</td>
  						</tr>
  					<?php }	?>

          </tbody>
            </table>

            <!-- Modal detail sewa -->
            <div class="modal fade" id="detailsewa" tabindex="-1" role="dialog" aria-labelledby="detailsewa" aria-hidden="true">

            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="detailsewa"><center><big><b>Rincian Terapi</b></big></center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
              <form class="disabled">
                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Sewa</label>
                  <input type="disabled" class="form-control" value="<?=$data->id_sewa; ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nomor Kwitansi</label>
                  <input type="disabled" class="form-control" value="<?=$data->no_kwitansi; ?>" disabled>
                </div>
                <div class="row form-group">
        				<div class="col-md-8">
        					<label>Hari/Tanggal Sewa</label>
        					<input type="text"  class="form-control" value="<?=$data->hari_sewa; ?> / <?=$data->tgl_sewa; ?>" disabled>
        				</div>
        				<div class="col-md-4">
        					<label for="lname">Waktu Sewa</label>
        					<input type="disabled"  class="form-control"  value="<?=$data->jam_sewa_awal; ?>.00 - <?=$data->jam_sewa_akhir; ?>.00" disabled>
        				</div>
        				</div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Total Pembayaran</label>
                  <input type="disabled" class="form-control" value="Rp. <?=$data->total_bayar; ?>" disabled>
                </div>

                <div class="row form-group">
        				<div class="col-md-8">
        					<label>Total Pembayaran</label>
        					<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="Rp. <?=$data->total_bayar; ?>" disabled >
        				</div>
        				<div class="col-md-4">
        					<label for="lname">Status</label>
        					<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"  value="<?=$data->status; ?>" disabled>
        				</div>
        				</div>
                  <br>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info" data-dismiss="modal">Tutup</button>
            </form>
            </div>
            </div>
            </div>
            </div>
            <!-- akhir modal -->

            <!-- Modal hapus booking -->
            <div class="modal fade" id="hapusbook" tabindex="-1" role="dialog" aria-labelledby="hapusbook" aria-hidden="true">

            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="hapusbook"><center><big><b>Hapus Jadwal Terapi</b></big></center></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
              <form class="" action="<?=base_url()?>C_konten/hapusbooking" method="post">
                <input type="hidden" name="id_sewa" value="<?=$data->id_sewa; ?>">

                <table class="table table-bordered table-striped" id="example" width="100%">
                    <thead>
                      <tr>
                        <th scope="row"><center>Tanggal Sewa</center></th>
                        <th scope="row"><center>Hari</center></th>
                        <th scope="row"><center>Pukul</center></th>
                        <th scope="row"><center>Total Bayar</center></th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td><center> <?= $data->tgl_sewa; ?></center></td>
                        <td><center> <?= $data->hari_sewa; ?></center></td>
                        <td><center> <?= $data->jam_sewa_awal;?>.00 - <?= $data->jam_sewa_akhir; ?>.00</center></td>
                        <td><center> Rp. <?= $data->total_bayar; ?></center></td>
                      </tr>
                      </tbody>
                    </table>
                  Apakah Anda yakin ingin menghapus jadwal booking terapi ini? Jika Anda ingin memesan kembali, silakan klik menu "sewa terapi" dan memilih jadwal terapi yang tersedia
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary" data-dismiss="modal">Tutup</button> &ensp;
              <button type="submit" class="btn btn-info">Hapus Jadwal</button>
            </form>
            </div>
            </div>
            </div>
            </div>
            <!-- akhir modal -->


			</div>
		</div>
	</div>
