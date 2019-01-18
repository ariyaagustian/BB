<div id="qbootstrap-contact">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Buat Akun Baru</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form action="<?=base_url()?>C_auth/simpan_register" class="appointment-wrap animate-box" method="post">

						<div class="row form-group">
							<div class="col-md-10">
								<label>Nama Lengkap</label>
								<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama">
							</div>
							<div class="col-md-2">
								<label for="subject">Jenis Kelamin</label>
								<select class="selectpicker form-control" name="gender">
									 <option value="Pria">Pria</option>
								   <option value="Wanita">Wanita</option>
								</select>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<label>Tempat Lahir</label>
								<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
							</div>
							<div class="col-md-6">
								<label for="lname">Tanggal Lahir</label>
								<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label>Alamat</label>
								<textarea class="form-control" rows="5" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<label>Nomor Telepon</label>
						      <input type="number" id="tlp" name="tlp" class="form-control" placeholder="Masukan Nomor Telepon">
						  </div>
							<div class="col-md-6">
								<label for="lname">Email</label> <small> &ensp;*jika ada</small>
								<input type="email" id="email" name="email" class="form-control" placeholder="Masukan Email">
							</div>
						</div>
						<br>
						<br>
						<div class="row form-group">
							<div class="col-md-6">
								<label>Username Baru</label>
						      <input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username Baru">
						  </div>
							<div class="col-md-6">
								<label>Password</label>
								<input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password Baru">
							</div>
						</div>

						<div class="form-group">
							<input type="submit" value="Buat Akun Baru" class="btn btn-primary pull-right"></form>
						</div>
						<br>


				</div>
			</div>
	</div>
