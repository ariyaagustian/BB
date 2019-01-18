<div id="qbootstrap-doctor" class="qbootstrap-bg-section">
			<div class="row">
				<div class="col-md-3 sticky-parent">
					<div id="sticky_item">
						<h3>Buat Jadwal</h3>
						<div class="schedule">
							<center><a href="#">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Buat Jadwal</button>
							</a></center>
						</div>
						<div class="schedule">
							<center><a href="#">
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit">Edit Jadwal</button>
							</a></center>
						</div>
						<div class="schedule">
							<center><a href="#">
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Hapus Jadwal</button>
							</a></center>
						</div>
					</div>
				</div>
				<div class="col-md-9 image-content">
					<div class="doctor animate-box">
						<center>
						<h2>Jadwal Terapi</h2>
						<h3>Januari 2019</h3>
						<center>

						<div class="desc">
							<?php
               $tanggala = 1;
               $tanggalb = 31;
              echo "<table border='1' >";
              echo "<tr >
              <th><center>Senin</center></th>
              <th><center>Selasa</center></th>
              <th><center>Rabu</center></th>
              <th><center>Kamis</center></th>
              <th><center>Jumat</center></th>
              <th><center>Sabtu</center></th>
              <th><center>Minggu</center></th>
              </tr>";
               for($x=1;$x<=6;$x++){
                 echo "<tr width='500'>";
                 for($y=1;$y<=7;$y++){
                   if($tanggala<=$tanggalb){
                     if($x==1 && $y<3){
                         echo "<td><center> </center></td>";
                       } else {
                         echo "<td width='200' height='150'><center><big>".$tanggala."</big><br><br> <small><table width='200' >
                          <tr>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                          </tr>
                          <tr>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                          </tr>
                          <tr>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                            <td><a href=''><center>09.00-10.00</center></a></td>
                          <tr>
                          </table></center></td></small>";
                          echo "<div>

                          </div>";
                         $tanggala++;
                       }
                     } else {
                       echo "<td><center> </center></td>";
                     }

                   }
                   echo "</tr>";
                 echo "<br>";
               }



               echo "</table>"; ?>



						</div>

					</div>
				</div>
			</div>

	</div>


	<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="create"><center><big><b> Buat Jadwal Baru</b></big></center></h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="<?=base_url()?>C_admin/simpanjadwalterapi" method="post">
	<div class="row form-group">
			<div class="col-md-6">
					<label >Nama Bulan</label>&ensp;
							<select class="bulan" name="bulan">
								<option value="Januari">Januari</option>
								<option value="Februari">Februari</option>
								<option value="Maret">Maret</option>
								<option value="April">April</option>
								<option value="Mei">Mei</option>
								<option value="Juni">Juni</option>
								<option value="Juli">Juli</option>
								<option value="Agustus">Agustus</option>
								<option value="September">September</option>
								<option value="Oktober">Oktober</option>
								<option value="November">November</option>
								<option value="Desember">Desember</option>
							</select>
				</div>
				<div class="col-md-6">
					 <label for="lname">Hari di Tanggal 1</label>&ensp;
							<select class="haritgl1" name="haritgl1">
								<option value="1">Senin</option>
								<option value="2">Selasa</option>
								<option value="3">Rabu</option>
								<option value="4">Kamis</option>
								<option value="5">Jumat</option>
								<option value="6">Sabtu</option>
								<option value="7">Minggu</option>
							</select>
				</div>
		</div>
<div class="form-group">
<label for="exampleInputEmail1">Tahun</label>
<input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukan Tahun">
</div>
<div class="form-group">
	<label for="exampleInputEmail1">Total Tanggal Merah &emsp; <small>*selain hari Minggu</small></label>
<input type="number" class="form-control col-md-10" name="tanggalmerah" id="tanggalmerah" placeholder="Masukan Total Tanggal Merah">
</div>
</div>
<div class="modal-footer">
	<br>
<button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
</div>
</div>
<!-- akhir modal -->
