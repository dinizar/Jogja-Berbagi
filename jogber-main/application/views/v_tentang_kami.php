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
</head>
<body>


<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">

	
	<!-- Header Standard Landing  -->
	
	<div class="header--standard header--standard-landing" id="header--standard">
		<div class="container">
			<div class="header--standard-wrap">
	
				<a href="<?php echo base_url('berbagi/index')?>" class="logo">
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
								<a href="<?php echo base_url('berbagi/index')?>" class="nav-link" class="nav-link">Beranda</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('komunitas/komunitas');?>" class="nav-link">Komunitas</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Tentang kami</a>
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
							<?php if ($this->session->userdata('status') == "login") {?>
                            <li class="shoping-cart more">
								<a href="#" class="nav-link">
									<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
									<span class="count-product"></span>
								</a>
								<div class="more-dropdown shop-popup-cart">
								
									<ul>
										<li class="cart-product-item">
											<div class="product-thumb">
												<img src="<?php echo base_url().'Gambar/'.$this->session->userdata("foto")?>" alt="product">
											</div>
											<div class="product-content">
												<h5 class="rait-stars">
													<?php echo $this->session->userdata("nama"); ?></h5>
												<h6 class="title">
													<?php echo $this->session->userdata("email"); ?></h6>
												<div class="counter">		
										         <a href="<?php echo base_url('akun/profil_timeline'); ?>" class="btn btn-primary btn-sm">Profil</a>
										         <a href="<?php echo base_url('autentifikasi/logout'); ?>" class="btn btn-blue btn-sm">Logout</a>        
												</div>
											</div>
										</li>
									  
										<h6 class="rait-stars">Notifikasi :</h6>
									<?php foreach($notifikasi as $n){ ?>
									  <?php if ($this->session->userdata("id_pengguna")==$n->id_pengguna) {?>
									  	<div id="notif-<?php echo $n->id_notifikasi?>">
									  		<li class="cart-product-item">
									  			<div class="product-content">
									  				<div class="counter">
									  					<?php echo $n->pengomentar?>
									  				</div>
									  				<div class="title">Mengomentari Postingan Anda</div>
									  			</div>
									  			<div class="product-price" id="waktu_notifikasi-<?php echo $n->id_notifikasi?>"></div>
									  			<div class="more">
									  				<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
									  			</div>
									  		</li>
									  	</div>
                                      <?php } ?>
                                    <?php }?> 
									</ul>
									
								</div>
							</li>
                            <?php }?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer"></div>
	<div class="stunning-header-content">
		<h1 class="container stunning-header-title">Tentang Jogja Berbagi</h1>		
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>
    
	
</div>

<!-- End Stunning header -->

<section class="">
	<div class="container">
		<div class="row">
			<div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12  m-auto">
				<div class="crumina-module crumina-heading">
					<div class="heading-sup-title row">
						<h4>Jembatan Kebaikan         </h4>
						<img src="<?php echo base_url('assets/img/Logo-Jogja-Berbagi.png')?>">
					</div>
					<h2 class="heading-title"> <span class="c-primary">Jogja Berbagi</span>, adalah sarana untuk memberi dan meminta barang maupun jasa secara online. </h2>
					<p class="heading-text">Kami yakin, di tengah kemajuan teknologi yang ada dapat dimanfaatkan untuk menyalurkan berjuta kebaikan baik dalam bentuk barang maupun jasa khususnya di Yogyakarta. Di Jogjaberbagi, masyarakat Yogyakarta dapat memberikan barang maupun jasa yang mereka punya. Selain itu di Jogja Berbagi juga dapat meminta barang dan jasa yang dibutuhkan oleh masyarakat Yogyakarta.
					</p>
				</div>
			</div>

			<div class="col col-xl-6 col-lg-6 ml-auto col-md-12 col-sm-12  align-right">
				<img src="<?php echo base_url('assets/img/screen.png" alt="screen')?>" class="negative-margin-right150">
			</div>
		</div>

	</div>
</section>

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
	<?php foreach ($notifikasi as $w) {?>
   	   $('#waktu_notifikasi-<?php echo $w->id_notifikasi ?>').html(moment("<?php echo $w->waktu_komentar ?>").fromNow());
   <?php }?>
      $('.count-product').html($("li div.product-price").length);

      function deleteNotif(id_notifikasi){		
        		$.ajax({
        			url : "<?php echo base_url('berbagi/delete_notifikasi');?>",
        			method : "POST",
        			data : {id: id_notifikasi},                  
        			dataType : 'json',
        			success: function(data){
        				if(data == 1){	
                	       $('#notif-'+id_notifikasi).html('');
                	      
                        }else{
                	       alert('gagal menghapus'); 
                        }
                    }

                });   	 
		}
</script>
</body>
</html>