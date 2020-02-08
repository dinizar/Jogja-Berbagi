<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/Logo-Jogja-Berbagi-putih.png')?>" />
	<title>Jogja Berbagi</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Bootstrap/dist/css/bootstrap-reboot.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Bootstrap/dist/css/bootstrap.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Bootstrap/dist/css/bootstrap-grid.css')?>">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.min.css')?>">

	<!-- Main Font -->
	<script src="<?php echo base_url('assets/js/webfontloader.min.js')?>"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>
	<style>
		.error { 
	             color: red;
	             font-style: italic;
                }
    </style>
</head>
<body class="footer--dark">

<section class="bg-badges">
	<div class="container">
		<div class="row">
			<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="crumina-module crumina-heading c-white custom-color">
					<h2 class="h1 heading-title">Login Admin</h2>
					<p class="heading-text">Pastikan username dan password benar!
					</p>
				</div>

				
				<!-- Subscribe Form  -->
				<?php if ($this->session->flashdata('error') == TRUE) { ?>
					<div class="alert alert-danger alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
						<strong>Gagal Login</strong> coba cek kembali username dan password anda
					</div>
				<?php }?>
				<form id="formlogin" class="content" method="post" action="<?php echo base_url().'admin/autentifikasi_admin/login';?>">
					<div class="form-group label-floating">
						<label class="control-label">Username</label>
						<input id="emailusername" class="form-control" placeholder="" name="username" >
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Password</label>
						<input id="passw" class="form-control" placeholder="" type="password" name="pasword">
						<span class="input-group-addon">
							<i class="fa fa-binoculars" aria-hidden="true" onmouseover="lihatpasword();" onmouseout="sembunyipasword ();"></i>
						</span>
					</div>
					<button class="btn btn-blue btn-lg" type="submit">Login</button>
				</form>
				
				<!-- ... end Subscribe Form  -->

			</div>
			<div class="col col-xl-6 col-lg-6 m-auto col-md-12 col-sm-12 col-12">
				<img src="<?php echo base_url('assets/img/image2.png')?>" alt="screen">
			</div>
		</div>

	</div>
</section>

<div class="footer footer--dark" id="footer">
	<div class="align-center">
		
			<div class="col col-lg-12 col-md-12 col-sm-12 col-12">
				<a href="<?php echo base_url('tentangkami/tentangkami'); ?>">
	                <img src="<?php echo base_url('assets/img/Logo-Jogja-Berbagi.png')?>" alt="Olympus">
					<div class="title-block">
						<h2 class="logo-title">Jogja Berbagi</h2>
						<h4 class="c-primary">Berbagi Barang dan Jasa</h4>
					</div>
				</a>
				<!-- Widget About -->
				
				<div class="widget w-about">
					<p>Adalah sarana untuk memberi dan meminta barang maupun jasa secara online.</p>
					<ul class="socials">
						<li>
							<a href="#">
								<i class="fab fa-facebook-square" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-youtube" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-google-plus-g" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
				
				<!-- ... end Widget About -->

			</div>

		
	</div>
</div>

<!-- JS Scripts -->
<script src="<?php echo base_url('assets/js/jquery-3.2.1.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/JQvalidation/jquery.validate.js')?>"></script>
<script src="<?php echo base_url('assets/js/JQvalidation/jquery.validate.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/JQvalidation/additional-methods.js')?>"></script>
<script src="<?php echo base_url('assets/js/JQvalidation/additional-methods.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/JQvalidation/messages_id.js')?>"></script>
<script src="<?php echo base_url('assets/js/JQvalidation/messages_id.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.appear.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.mousewheel.js')?>"></script>
<script src="<?php echo base_url('assets/js/perfect-scrollbar.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.matchHeight.js')?>"></script>
<script src="<?php echo base_url('assets/js/svgxuse.js')?>"></script>
<script src="<?php echo base_url('assets/js/imagesloaded.pkgd.js')?>"></script>
<script src="<?php echo base_url('assets/js/Headroom.js')?>"></script>
<script src="<?php echo base_url('assets/js/velocity.js')?>"></script>
<script src="<?php echo base_url('assets/js/ScrollMagic.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.waypoints.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.countTo.js')?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/material.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-select.js')?>"></script>
<script src="<?php echo base_url('assets/js/smooth-scroll.js')?>"></script>
<script src="<?php echo base_url('assets/js/selectize.js')?>"></script>
<script src="<?php echo base_url('assets/js/swiper.jquery.js')?>"></script>
<script src="<?php echo base_url('assets/js/moment-with-locales.js')?>"></script>
<script src="<?php echo base_url('assets/js/daterangepicker.js')?>"></script>
<script src="<?php echo base_url('assets/js/simplecalendar.js')?>"></script>
<script src="<?php echo base_url('assets/js/fullcalendar.js')?>"></script>
<script src="<?php echo base_url('assets/js/isotope.pkgd.js')?>"></script>
<script src="<?php echo base_url('assets/js/isotope.pkgd.init.js')?>"></script>
<script src="<?php echo base_url('assets/js/ajax-pagination.js')?>"></script>
<script src="<?php echo base_url('assets/js/Chart.js')?>"></script>
<script src="<?php echo base_url('assets/js/chartjs-plugin-deferred.js')?>"></script>
<script src="<?php echo base_url('assets/js/circle-progress.js')?>"></script>
<script src="<?php echo base_url('assets/js/loader.js')?>"></script>
<script src="<?php echo base_url('assets/js/run-chart.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.gifplayer.js')?>"></script>
<script src="<?php echo base_url('assets/js/mediaelement-and-player.js')?>"></script>
<script src="<?php echo base_url('assets/js/mediaelement-playlist-plugin.min.js')?>"></script>

<script src="<?php echo base_url('assets/js/base-init.js')?>"></script>
<script defer src="<?php echo base_url('assets/fonts/fontawesome-all.js')?>"></script>

<script src="<?php echo base_url('assets/Bootstrap/dist/js/bootstrap.bundle.js')?>"></script>

<script type="text/javascript">
	$().ready(function(){
          $("#formlogin").validate({
        rules: {
           emailusername: {
           	                required: true
                          },
           pasword: {
                     required: true
           }
          	
        }
     });
	});

	function lihatpasword() {
		var y = document.getElementById("passw");
		
		y.type = "text";
	}
	function sembunyipasword() {
		var y = document.getElementById("passw");
		
		y.type = "password";
	}
</script>


</body>
</html>
