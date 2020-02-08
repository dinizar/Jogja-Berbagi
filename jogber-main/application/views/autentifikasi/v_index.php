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
        .error input {
        	     border-color: red;
        }
        .valid input {
                 border-color: green;
        }
	</style>

</head>
<body >



<!-- Stunning header -->

<div class="main-header main-header-fullwidth main-header-has-header-standard">

	
	<!-- Header Standard Landing  -->
	
	<div class="header--standard header--standard-landing" id="header--standard">
		<div class="container">
			<div class="header--standard-wrap">

				<a href="#" class="logo">
					<div class="img-wrap">
						<img src="<?php echo base_url('assets/img/Logo-Jogja-Berbagi-putih.png')?>" alt="Olympus">
						<img src="<?php echo base_url('assets/img/Logo-Jogja-Berbagi.png')?>" alt="Olympus" class="logo-colored">
					</div>
					<div class="title-block">
						<h4 class="logo-title">JOGJA BERBAGI</h4>
						<h6 >Berbagi Barang Dan Jasa</h6> 
					</div>
				</a>

				<a href="#" class="open-responsive-menu js-open-responsive-menu">
					<svg class="olymp-menu-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-menu-icon')?>"></use></svg>
				</a>

				<div class="nav nav-pills nav1 header-menu">
					<div class="mCustomScrollbar">
						<ul>
							
							<li class="nav-item">
								<a href="<?php echo base_url('komunitas/komunitas'); ?>" class="nav-link">Komunitas</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('tentangkami/tentangkami'); ?>" class="nav-link">Tentang kami</a>
							</li>
							<li class="close-responsive-menu js-close-responsive-menu">
								<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
							</li>
							<li class="nav-item js-expanded-menu">
								<a href="#" class="nav-link">
									<svg class="olymp-menu-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-menu-icon')?>"></use></svg>
									<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
								</a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer header-spacer"></div>

	<div class="content-bg-wrap bg-section5"></div>

	<div class="container">
		<div class="row display-flex">
			<div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
				<div class="landing-content">
					<h1>Selamat Datang di Jogja Berbagi, Ayo Berbagi !</h1>
					<p>Untuk bisa berbagi tak perlu menunggu sampai anda berkecukupan, berbagilah mulai sekarang walaupun hanya sebuah senyuman. Karena esensi dari berbagi adalah ketika orang lain merasa bahagia dengan apa yang kita berikan.
					</p>
					<a href="#" class="btn btn-md btn-border c-white">Registrasi Sekarang Juga!</a>
				</div>
			</div>

			<div class="col col-xl-7 ml-auto col-lg-6 col-md-12 col-sm-12 col-12">

				<div class="ui-block">
					<!-- Login-Registration Form  -->

					<div class="news-feed-form">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link inline-items" data-toggle="tab" href="#register" role="tab">
									<svg class="olymp-register-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-register-icon')?>"></use></svg>
									<span>Registrasi</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active inline-items" data-toggle="tab" href="#login" role="tab">
									<svg class="olymp-login-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-login-icon')?>"></use></svg>
									<span>Login</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="registration-form">
						<!-- Tab panes -->
						<div class="ui-block-content">	
							<div class="tab-content">

								<div class="tab-pane" id="register" role="tabpanel" data-mh="log-tab">

									<form id="formregister" class="content" enctype="multipart/form-data"  multypart="upload/do_upload" method="post" action="<?php echo base_url().'/autentifikasi/register';?>">
										<div class="row">
											<div class="col col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12">
												<div class="form-group label-floating">
													<label class="control-label">Nama</label>
													<input id="nama" class="form-control" name="nama" type="text" value="">
												</div>
												
												<div class="form-group label-floating">
													<label class="control-label">Buat Password</label>
													<input id="pass" class="form-control" name="pasword" type="password" value="">
													<span class="input-group-addon">
													     <i class="fa fa-binoculars" aria-hidden="true" onmouseover="lihatpasword();" onmouseout="sembunyipasword ();"></i>
												    </span>
												</div>
												
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input id="email" class="form-control" name="email" value="" >
												</div>
												<div class="form-group date-time-picker label-floating">
													<label class="control-label">Tanggal Lahir</label>
													<input class="form-control" name="datetimepicker">
													<span class="input-group-addon">
														<svg class="olymp-calendar-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-calendar-icon')?>"></use></svg>
													</span>
												</div>
												<div class="form-group label-floating">
													<label class="control-label">Alamat</label>
													<input id="alamat" class="form-control" name="alamat" type="text" value="" >
												</div>

											</div>
											<div class="col col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12">  
												<div class="form-group label-floating">
													<label class="control-label">Username</label>
													<input id="username" class="form-control" name="username" type="text" value="" >
												</div>
												
												<div class="form-group label-floating">
													<label class="control-label">Ketik Ulang Password</label>
													<input id="confirmpass" class="form-control" name="confirmpass" type="password" value="" >
												</div>

												<label>Jenis Kelamin</label>
                                                <div class="radio">
                                                	<label>
									                     <input id="Laki-Laki" type="radio" name="optionsRadios"  value="Laki-Laki" >
									                     Laki-laki
								                    </label>
								                    <label>
									                     <input id="Perempuan" type="radio" name="optionsRadios"  value="Perempuan" >
									                     Perempuan
								                    </label>
								                    <label for="optionsRadios" class="error">Pilih Jenis Kelamin</label>
                                                </div>

												<div class="form-group">
													<label class="control-label">Unggah Foto Profil</label>
													<input value="Unggah Foto Profil" type="file" name="foto-profil" class="file-upload__label" id="File">
												</div>

												<input class="btn btn-primary btn-lg full-width" type="submit" name="submit-regis" value="Registrasi!" />
											</div>
										</div>
									</form>

								</div>

								<div class="tab-pane active" id="login" role="tabpanel" data-mh="log-tab">
									<?php if ($this->session->flashdata('error') == TRUE) { ?>
										<div class="alert alert-danger alert-dismissible">
											<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
											<strong>Gagal Login</strong> coba cek kembali email/username dan password anda
										</div>
									<?php }?>

									<form id="formlogin" class="content" method="post" action="<?php echo base_url().'/autentifikasi/login';?>">
										<div class="row">
											<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
												<div class="form-group label-floating">
													<label class="control-label">Username atau Email</label>
													<input id="emailusername" class="form-control" placeholder="" name="emailusername" >
												</div>
												<div class="form-group label-floating">
													<label class="control-label">Password</label>
													<input id="passw" class="form-control" placeholder="" type="password" name="pasword">
													<span class="input-group-addon">
													     <i class="fa fa-binoculars" aria-hidden="true" onmouseover="lihatpasword();" onmouseout="sembunyipasword ();"></i>
												    </span>
												</div>
											</div>
											<div class="col col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                <p>Belum punya akun? <a href="#">Register sekarang juga!</a> ini sangat sederhana dan Anda dapat mulai menjadi manusia yang bermanfaat!</p>
											</div>
                                            <div class="col col-12 col-xl-6 col-lg-12 col-md-12 col-sm-12">
												<input class="btn btn-lg btn-primary full-width" type="submit" value="Login" />

											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<!-- ... end Login-Registration Form  -->
			</div>
		</div>
	</div>
</div>

<!-- End Stunning header -->
<section class="negative-margin-top50">
	<div class="container">
		<div class="row">
			<div class="col col-xl-12 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				<div class="ui-block responsive-flex1200">
					<div class="ui-block-title">
						<div class="news-feed-form">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a id="barang" class="nav-link inline-items" data-toggle="tab" href="#" role="tab" aria-expanded="true">

										<svg class="olymp-shopping-bag-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-shopping-bag-icon')?>"></use></svg>

										<span>Barang</span>
									</a>
								</li>
								<li class="nav-item active">
									<a id="jasa" class="nav-link inline-items" data-toggle="tab" href="#" role="tab" aria-expanded="false">

										<svg class="olymp-happy-sticker-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon')?>"></use></svg>

										<span>Jasa</span>
									</a>
								</li>

							</ul>
						</div>
						<div id="filters" class="btn-group align-center" data-filter-group="keterangan">
							    <button type="button" data-filter="MEMINTA" class="btn btn-secondary btn-sm">Meminta</button>
							    <button type="button" data-filter="MEMBERI" class="btn btn-secondary btn-sm">Memberi</button>
							</div>
						<form class="quicksearch w-search">
							<div class="form-group with-button">
								<input id="quicksearch" class="form-control" type="text" placeholder="Search Posts......">
								<button>
									<svg class="olymp-magnifying-glass-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon')?>"></use></svg>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

        <div id="unggahan">
		         
		         <ul id="submenu_barang" style="display: none;" class="cat-list-bg-style align-center sorting-menu cat-list__item-bg-blue">
					<li class="cat-list__item active" data-filter="*"><a href="#" class="">Semua Kategori</a></li>
					<?php foreach($sub_menu_barang as $sm){ ?>
				    <li class="cat-list__item" data-filter=".sub-<?php echo $sm->id_submenu ?>"><a href="#" class=""><?php echo $sm->nama_submenu ?></a></li>
					<?php } ?>
				</ul>
				 <ul id="submenu_jasa" style="display: none;" class="cat-list-bg-style align-center sorting-menu cat-list__item-bg-blue">
					<li class="cat-list__item active" data-filter="*"><a href="#" class="">Semua Kategori</a></li>
					<?php foreach($sub_menu_jasa as $sm){ ?>
				    <li class="cat-list__item" data-filter=".sub-<?php echo $sm->id_submenu ?>"><a href="#" class=""><?php echo $sm->nama_submenu ?></a></li>
					<?php } ?>
				</ul> 

				<!-- Main Content Post Versions -->

				<div class="row sorting-container" id="clients-grid-1" data-layout="masonry">
					<?php foreach($unggahan as $key=>$p){ ?>
						<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 sorting-item ecommerce sub-<?php echo $p->id_submenu ?>">
                             
							<div class="ui-block">

								<!-- Post -->

								<article class="hentry post">

									<div class="post__author author vcard inline-items">
										<img src="<?php echo base_url().'Gambar/'.$p->foto_pengguna?>" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href=""><?php echo $p->nama ?></a>
											<div class="post__date">
												<time id="waktu_unggahan-<?php echo $p->id_unggahan ?>" class="published"> 

												</time>
											</div>
										</div>

										<div class="more">
											<div class="row">
												<div class="post-thumb">
													<span class="post-category bg-blue"><?php echo $p->status ?></span>
												</div>
												<div class="post-thumb">
													<span class="post-category bg-breez"><?php echo $p->keterangan_unggahan ?></span>
													<span class="post-category bg-bg-primary">------</span>
												</div>
											</div>
										</div>

									</div>

									<h4><?php echo $p->judul_unggahan ?></h4> 
									<p><?php echo $p->keterangan ?></p>

									<div class="post-block-photo js-zoom-gallery">
										<?php foreach($unggahan[$key]->gambar as $g){ ?>
											<a href="<?php echo base_url().'Gambar/unggahan/'.$g->nama_foto?>" class="half-width"><img src="<?php echo base_url().'Gambar/unggahan/'.$g->nama_foto?>" alt="photo"></a>
	       							<!-- <a href="img/post-photo2.jpg" class="half-width"><img src="img/post-photo2.jpg" alt="photo"></a>
	       							<a href="img/post-photo3.jpg" class="col col-3-width"><img src="img/post-photo3.jpg" alt="photo"></a>
	       							<a href="img/post-photo4.jpg" class="col col-3-width"><img src="img/post-photo4.jpg" alt="photo"></a>
	       							<a href="img/post-photo5.jpg" class="more-photos col-3-width">
	       								<img src="img/post-photo5.jpg" alt="photo">
	       								<span class="h2">+24</span>
	       							</a> -->
	       						         <?php }?>
	       					        </div>

			       					<div class="post-additional-info inline-items">
			       						<div class="post-add-icon inline-items">
			       							<svg class="olymp-add-a-place-icon">
			       								<use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon')?>"></use>
			       							</svg>
			       							<?php echo $p->nama_kecamatan?> <?php echo $p->nama_kabupaten?></br>
			       							<?php echo $p->detail_lokasi ?>
			       						</div>


			       						<div class="comments-shared">

			       							<a class="post-add-icon inline-items">
			       								<svg class="olymp-heart-icon">
			       									<use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon')?>"></use>
			       								</svg>
			       								<span><?php echo count($unggahan[$key]->jml_suka) ?></span>
			       							</a>

			       							<a class="post-add-icon inline-items"> 
			       								<svg class="olymp-speech-balloon-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon')?>"></use></svg>

			       								<span><?php echo count($unggahan[$key]->komentar) ?></span>
			       							</a>
			       							
			       						</div>
			       					</div>
	       				        </article>

	       				<!-- .. end Post -->


	       				<!-- Comments -->

			       				<ul class="comments-list style-2">
			       					<?php foreach($unggahan[$key]->komentar as $k){ ?>

			       						<li id="jumlah-<?php echo $k->id_komentar ?>" class="comment-item">
			       							<div class="post__author author vcard">
			       								<img src="<?php echo base_url().'Gambar/'.$k->foto_pengguna?>" alt="author">

			       								<div class="author-date">
			       									<p><a class="h6 post__author-name fn" href="#"><?php echo $k->nama ?></a>   <?php echo $k->detail_komentar ?></br>
			       									</p>

			       									<div class="post__date">
			       										<time id="waktu_komentar-<?php echo $k->id_komentar ?>" class="published"></time>
			       									</div>

			       								</div>
			       							</div>
			       						</li>
			       						<!-- ... end Comments -->
			       					<?php } ?>
			       				</ul>

 
	       			        </div>

	       		        </div>
	       	        <?php }?>
	            </div>
	    
         </div>

	</div>
</section>


    <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg></a>





<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
	<div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->


<!-- Footer Full Width -->

<div class="footer footer-full-width" id="footer">
	<div class="container align-center">
		
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
						<li>
							<a href="<?php echo base_url('admin/autentifikasi_admin'); ?>">
								<i class="fab fa-adn" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
				
				<!-- ... end Widget About -->

			</div>
			
			

			<div class="col col-lg-12 col-md-12 col-sm-12 col-12">

				
				<!-- SUB Footer -->
				
				<div class="sub-footer-copyright">
					<span>
						Copyright <a href="index.html">Olympus Buddypress + WP</a> All Rights Reserved 2017
					</span>
				</div>
				
				<!-- ... end SUB Footer -->

			</div>
		
	</div>
</div>

<!-- ... end Footer Full Width -->



<a class="back-to-top" href="#">
	<img src="<?php echo base_url('assets/svg-icons/back-to-top.svg')?>" alt="arrow" class="back-icon">
</a>



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

<script>

$().ready(function(){
     $("#formregister").validate({
        rules: {
           nama: {
           	      required: true,
           	      minlength: 5
           },	
           pasword: {
           	     required: true,
           	     minlength: 5,
           	     maxlength: 20
           },
           confirmpass: {
                 required: true,
                 minlength: 5,
           	     maxlength: 20,
           	     equalTo: "#pass"
           },
           email: {
                 required: true,
                 email: true
           },
           username: {
                 required:true,
                 minlength: 5,
                 remote: {url: '<?php echo base_url()?>autentifikasi/cek_username',
                          type: "post",
					      data: {
					             username: function() {
					                return $( "#username" ).val();
					             }
					            }
                         }      
           },
           datetimepicker: {
           	     required: true
           },
           optionsRadios: {
                 required: true
           },
           alamat: {
           	     required: true,
           	     minlength: 8
           }
        },
        messages: {
			username:{
				remote: "Username sudah terpakai, coba lagi",
			}
		},
        submitHandler: function(form) {
			form.submit();
		}
     });

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
  var x = document.getElementById("pass");
  var y = document.getElementById("passw");
    x.type = "text";
    y.type = "text";
}
function sembunyipasword() {
  var x = document.getElementById("pass");
  var y = document.getElementById("passw");
    x.type = "password";
    y.type = "password";
}
</script>

<script type="text/javascript">

    moment.locale('id');
    <?php foreach ($unggahan as $key=>$u){?>
	   
	$('#waktu_unggahan-<?php echo $u->id_unggahan ?>').html(moment("<?php echo $u->waktu_unggahan ?>").fromNow());   
        <?php foreach($unggahan[$key]->komentar as $c){ ?>
        
        $('#waktu_komentar-<?php echo $c->id_komentar ?>').html(moment("<?php echo $c->waktu_komentar ?>").fromNow());
        <?php }?>

   <?php }?> 

</script>

 <!-- Filter -->
<script type="text/javascript">
	$(document).ready(function(){
	  $("#jasa").click(function(){
       $("#submenu_jasa").show();
       $("#submenu_barang").hide();
      });
	});	
	$(document).ready(function(){
	  $("#barang").click(function(){
       $("#submenu_jasa").hide();
       $("#submenu_barang").show();
      });
	});	
</script>

<!-- Pencarian -->
<script type="text/javascript">
	$(document).ready(function(){

		// quick search regex
		    var qsRegex;
            var buttonFilter;

			// init Isotope
			var $grid = $('.sorting-container').isotope({
			  itemSelector: '.sorting-item',
			  filter: function() {
			    var $this = $(this);
			    var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
			    var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
			    return searchResult && buttonResult;
			  }
			});

			$('#filters').on( 'click', 'button', function() {
				  buttonFilter = $( this ).attr('data-filter');
				  $grid.isotope();
				});

			// use value of search field to filter
			var $quicksearch = $('#quicksearch').keyup( debounce( function() {
			  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
			  $grid.isotope();
			}, 200 ) );

			$('.btn-group').each( function( i, buttonGroup ) {
			  var $buttonGroup = $( buttonGroup );
			  $buttonGroup.on( 'click', 'btn', function() {
			    $buttonGroup.find('.active').removeClass('active');
			    $( this ).addClass('active');
			  });
			});

			// debounce so filtering doesn't happen every millisecond
			function debounce( fn, threshold ) {
			  var timeout;
			  threshold = threshold || 100;
			  return function debounced() {
			    clearTimeout( timeout );
			    var args = arguments;
			    var _this = this;
			    function delayed() {
			      fn.apply( _this, args );
			    }
			    timeout = setTimeout( delayed, threshold );
			  };
			}
    });
</script>

</body>
</html>
