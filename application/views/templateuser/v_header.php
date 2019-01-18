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

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by QBOOTSTRAP.COM

	Website: 		http://qbootstrap.com/
	Email: 			info@qbootstrap.com
	Twitter: 		http://twitter.com/Q_bootstrap
	Facebook: 		https://www.facebook.com/Qbootstrap
	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
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
								<li class="active" >
										<a href="<?=base_url()?>C_auth/index">Beranda</a>
								</li>
								<li>
										<a href="<?=base_url()?>C_konten/jadwalterapi">Jadwal Terapi</a>
								</li>
								<li class="btn-cta">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#LOGIN">Login</button>
								</li>
							</ul>
						</div>
					</div>
				</div>

							<!-- Modal -->
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

			</div>
		</div>
	</nav>

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

					<div class="">
						<?php
							if($this->session->flashdata('logingagal')) { ?>
								<br>
								<div class="alert alert-danger alert-dismissible fade in" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
									Username atau Password Anda <strong><?= $this->session->flashdata('logingagal'); ?></strong> Silakan Ulangi Login, atau Register Akun Baru
								</div>
							<?php } ?>
						</div>
