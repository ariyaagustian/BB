<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Terapi Tante &mdash; Terapi Germanium Dengan Service Maksimal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="QBOOTSTRAP.COM" />


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url();?>assets/medcare/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url();?>assets/medcare/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=base_url();?>assets/medcare/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?=base_url();?>assets/medcare/css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?=base_url();?>assets/medcare/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url();?>assets/medcare/css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?=base_url();?>assets/medcare/css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?=base_url();?>assets/medcare/css/style.css">


	<!-- Modernizr JS -->
	<script src="<?=base_url();?>assets/medcare/js/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,700"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="qbootstrap-loader"></div>

	<div id="page">
	<nav class="qbootstrap-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="top">
							<div class="row">
								<div class="col-md-4 col-md-push-4 text-center">
									<div id="qbootstrap-logo"><a href="index.html">
											<img src="<?=base_url()?>assets/medcare/images/logo2.png">
									 </a></div>
								</div>
								<div class="col-md-4 col-md-pull-4">
									<div class="num">
										<span class="icon"><i class="icon-phone"></i></span>
										<p>0857-2259-4082<br>0882-2922-7479</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="loc">
										<span class="icon"><i class="icon-location"></i></span>
										<p>Jalan Antapani Tarumasari No.60 RT 03/05 Antapani,Antapani Kulon,Bandung</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 text-center">
						<div class="menu-1">
							<ul>
								<li class="<?php if($pilih=='jadwalterapi') echo "active"; ?>">
									 <a href="<?=base_url()?>C_konten/jadwalterapi">Sewa Terapi</a>
								</li>
								<li class="<?php if($pilih=='riwayatterapi') echo "active"; ?>">
									<a href="<?=base_url()?>C_konten/riwayatterapi">Riwayat Terapi</a>
								</li>
								<li>
									<div class="btn-group dropup">
									  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <?=$this->session->userdata('nama'); ?>&ensp; ^</button>
									  <div class="dropdown-menu">
											<a href="#"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editprofil"><i class="material-icons">person</i>&ensp;Profil&ensp;</button></a><br>
											<a href="logout"><button type="button" class="btn btn-danger" ><i class="material-icons">exit_to_app</i>&ensp;Keluar</button></a>
									  </div>
									</div>
								</li>

						  </ul>
						</div>




					</div>
				</div>





							<!-- Modal login-->
	<div class="modal fade" id="LOGIN" tabindex="-1" role="dialog" aria-labelledby="LOGIN" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				   <h5 class="modal-title" id="LOGIN"><center><big><b> Silakan Login Disini</b></big></center></h5>
				   	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				      <span aria-hidden="true">&times;</span>
				    </button>
				</div>
				<div class="modal-body">
				  <form action="<?=base_url()?>C_auth/auth" method="post">
					<div class="form-group">
	 					<label for="exampleInputEmail1">Username</label>
	 					<input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
	 				</div>
					<div class="form-group">
	 					<label for="exampleInputEmail1">Password</label>
	 					<input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password">
	 				</div>
			  </div>
				<div class="modal-footer">
					<a href="<?=base_url()?>C_auth/register"><button type="button" class="btn btn-warning pull-left">Buat Akun Baru</button></a>
				  <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				  <button type="submit" class="btn btn-primary">Login</button>
				  </form>
				</div>
			</div>
		</div>
	</div>
				   <!-- akhir modal -->




				<!-- notif register sukses -->
				<div class="">
					<?php
						if($this->session->flashdata('registersukses')) { ?>
							<br>
							<div class="alert alert-success alert-dismissible fade in" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								Akun Anda <strong><?= $this->session->flashdata('registersukses'); ?></strong> ditambahkan. Silakan Login kembali menggunakan akun baru Anda
							</div>
						<?php } else if($this->session->flashdata('registergagal')) {?>
							<div class="alert alert-danger alert-dismissible fade in" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
									Akun Anda <strong><?= $this->session->flashdata('registersukses'); ?></strong> ditambahkan. Silakan Ulangi Pembuatan Akun Baru Anda
							</div>
							<?php } ?>
					</div>
					<!-- akhir notif register -->

					<!-- notif edit profil -->
					<div class="">
						<?php
							if($this->session->flashdata('editprofilsukses')) { ?>
								<br>
								<div class="alert alert-success alert-dismissible fade in" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
									Profil Anda <strong><?= $this->session->flashdata('editprofilsukses'); ?></strong> diupdate
								</div>
							<?php } else if($this->session->flashdata('editprofilgagal')) {?>
								<div class="alert alert-danger alert-dismissible fade in" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
										Profil Anda <strong><?= $this->session->flashdata('editprofilgagal'); ?></strong> diupdate
								</div>
								<?php } ?>
						</div>
						<!-- akhir notif edit profil -->


						<!-- Modal edit profil -->
				<div class="modal fade" id="editprofil" tabindex="-1" role="dialog" aria-labelledby="editprofil" aria-hidden="true">

				<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="editprofil"><center><big><b>Edit Profil</b></big></center></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">

					<?php
					foreach($daftar_user as $edit){
					if ($edit->id_user == $this->session->userdata('id_user')){
					?>
				<form action="<?=base_url()?>C_user/simpaneditprofil" method="post">
				<div class="form-group">
				<label for="exampleInputEmail1">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $edit->nama; ?>">
				</div>
				<div class="row form-group">
				<div class="col-md-6">
					<label>Tempat Lahir</label>
					<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="<?= $edit->tempat_lahir; ?>">
				</div>
				<div class="col-md-6">
					<label for="lname">Tanggal Lahir</label>
					<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?=$edit->tgl_lahir; ?>">
				</div>
				</div>
				<div class="row form-group">
				<div class="col-md-12">
				 <label>Alamat</label>
				 <textarea class="form-control" rows="5" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap"><?= $edit->alamat; ?></textarea>
				</div>
				</div>
				<div class="row form-group">
				<div class="col-md-6">
				<label>Nomor Telepon</label>
					<input type="number" id="tlp" name="tlp" class="form-control" value="<?=$edit->tlp; ?>">
				</div>
				<div class="col-md-6">
				<label>Email</label> <small> &ensp;*jika ada</small>
				<input type="email" id="email" name="email" class="form-control" value="<?=$edit->email; ?>">
				</div>
				</div>
				<br>
				<br>
				<div class="row form-group">
				<div class="col-md-6">
				<label>Username</label>
					<input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username Baru" value="<?=$edit->username; ?>">
				</div>
				<div class="col-md-6">
				<label>Password</label>
				<input type="password" id="password" name="password" class="form-control" value="<?=$edit->password; ?>">
				</div>
				</div>

				</div>
				<div class="modal-footer">
				<button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Update Profil</button>
				</form>
				<?php }} ?>
				</div>
				</div>
				</div>
				</div>
				<!-- akhir modal -->



</div>
</div>
</nav>
</div>
