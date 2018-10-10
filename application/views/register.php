<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/css/main.css">
<!--===============================================================================================-->
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url();?>assets/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

        <?php if(!empty($flashdata)) {echo $flashdata;} ?>


				<form class="login100-form validate-form" method="POST" name="frm" action="<?php echo base_url()?>home/adduser">
					<span class="login100-form-title p-b-49">
						Buat Akun Baru
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nama harus diisi !!">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" placeholder="Masukan Nama Lengkap" id="nama" name="nama">
						<span class="focus-input100" data-symbol="&#10065;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "NIM harus diisi !!">
						<span class="label-input100">NIM</span>
						<input class="input100" type="text" placeholder="Masukan NIM" id="nim" name="nim">
						<span class="focus-input100" data-symbol="&#9783;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Jurusan harus diisi !!">
						<span class="label-input100">Jurusan</span>
						<select class="form-control"  name="jurusan">
								<option value="teknik informatika">Teknik Informatika</option>
								<option value="Sistem Informasi">Sistem Informasi</option>
								<option value="Teknik Komputer">Teknik Komputer</option>
								<option value="Teknik Elektro">Teknik Elektro</option>
								<option value="Teknik Arsitektur">Teknik Arsitektur</option>
								<option value="Teknik Sipil">Teknik Sipil</option>
								<option value="Teknik Industri">Teknik Industri</option>
								<option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
								<option value="Akuntansi Komputerisasi">Akuntansi Komputerisasi</option>
								<option value="Akuntansi S1">Akuntansi S1</option>
								<option value="Akuntansi D3">Akuntansi D3</option>
								<option value="Manajemen S1">Manajemen S1</option>
								<option value="Manajemen D3">Manajemen D3</option>
								<option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
								<option value="Keuangan dan Perbankan">Keuangan dan Perbankan</option>
								<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
								<option value="Ilmu Pemerintahan">Ilmu Pemerintahan</option>
								<option value="Hubungan Internasional">Hubungan Internasional</option>
								<option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
								<option value="Desain Interior">Desain Interior</option>
								<option value="Sastra Inggris">Sastra Inggris</option>
								<option value="Sastra Jepang">Sastra Jepang</option>
								<option value="Hukum">Hukum</option>
					 </select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Telepon harus diisi !!">
						<span class="label-input100">Telepon</span>
						<input class="input100" type="text" placeholder="Masukan Nomor Telepon" id="tlp" name="tlp">
						<span class="focus-input100" data-symbol="&#9743;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email harus diisi !!">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" placeholder="Masukan Email" id="email" name="email">
						<span class="focus-input100" data-symbol="&#9993;"></span>
					</div>

					<br><br><br>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username harus diisi !!">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" placeholder="Masukan Username Baru" id="user" name="user">

						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" placeholder="Masukan Password Baru" id="pass" name="pass">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<br>
					<br>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Buat Akun
							</button>
						</div>
            </div>
            <br>
            <br>

            <div class="text-right p-t-8 p-b-31">Sudah punya akun? <br>
              <a href="<?php echo base_url();?>home/user_login">
              LOGIN</a>

					</div>

					</div>
				</form>
			</div>
		</div>
