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
<body class="footer--dark">

<div class="header--standard header--standard-dark" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">
			<a href="02-ProfilePage.html" class="logo">
				<div class="img-wrap">
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
							<a href="<?php echo base_url('admin/manage/postingan'); ?>" class="nav-link active">POSTINGAN</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/manage/komunitas'); ?>" class="nav-link">KOMUNITAS</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/manage/pengguna'); ?>" class="nav-link">PENGGUNA</a>
						</li>
						
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
										         <a href="<?php echo base_url('admin/autentifikasi_admin/logout_admin'); ?>" class="btn btn-blue btn-sm">Logout</a>        
												</div>
											</div>
										</li>
									</ul>
									
								</div>
							</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="header-spacer header-spacer-standart"></div>
<div class="header-spacer header-spacer-small"></div>

<div class="container">
	<div class="row">

		<div class="col col-xl-4 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Total Postingan
								</span>
							</div>
							<div class="count-stat"><?php echo count($unggahan)?>
								
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col col-xl-4 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Total Pengguna
								</span>
							</div>
							<div class="count-stat"><?php echo count($pengguna)?>
								
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col col-xl-4 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-content">
					<ul class="statistics-list-count">
						<li>
							<div class="points">
								<span>
									Total Komunitas
								</span>
							</div>
							<div class="count-stat"><?php echo count($komunitas)?>
								
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>

<section>
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
					

						<div class="btn-group align-center" data-filter-group="keterngan">
							    <button type="button" data-filter="" class="btn btn-secondary btn-sm">Meminta</button>
							    <button type="button" data-filter="" class="btn btn-secondary btn-sm">Memberi</button>
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
					<?php foreach($sub_menu_barang as $smp){ ?>
				    <li class="cat-list__item" data-filter=".sub-<?php echo $smp->id_submenu ?>"><a href="#" class=""><?php echo $smp->nama_submenu ?></a></li>
					<?php } ?>
				</ul>
				 <ul id="submenu_jasa" style="display: none;" class="cat-list-bg-style align-center sorting-menu cat-list__item-bg-blue">
					<li class="cat-list__item active" data-filter="*"><a href="#" class="">Semua Kategori</a></li>
					<?php foreach($sub_menu_jasa as $smp){ ?>
				    <li class="cat-list__item" data-filter=".sub-<?php echo $smp->id_submenu ?>"><a href="#" class=""><?php echo $smp->nama_submenu ?></a></li><a href="#"><i class="fa fa-times" aria-hidden="true"data-toggle="modal" data-target="#hapus_submenu<?php echo $smp->id_submenu ?>"></i></a>
					<?php } ?>
					<li class="cat-list__item"><a href="#" class="" data-toggle="modal" data-target="#tambah_kategori"><i class="fa fa-plus" aria-hidden="true"></i>Tambah</a></li>
				</ul> 
	       <!-- Main Content Post Versions -->
	       
	       	<div class="row sorting-container" id="clients-grid-1" data-layout="masonry">
					<?php foreach($unggahan as $key=>$p){ ?>
						<div id="post-<?php echo $p->id_unggahan ?>" class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 sorting-item ecommerce sub-<?php echo $p->id_submenu ?>">

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
	       									
	       										<svg class="olymp-three-dots-icon">
	       											<use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use>
	       										</svg>
	       										<ul class="more-dropdown">
	       											<li>
	       												<a data-toggle="modal" data-target="#hapus_postingan<?php echo $p->id_unggahan ?>" href="#">Delete Post</a>
	       											</li>
	       										</ul>
	       									
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

	       								<a href="#" class="post-add-icon inline-items">
	       									<svg class="olymp-heart-icon">
	       										<use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon')?>"></use>
	       									</svg>
	       									<span><?php echo count($unggahan[$key]->jml_suka) ?></span>
	       								</a>

	       								<a class="post-add-icon inline-items"> 
	       									<svg class="olymp-speech-balloon-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon')?>"></use></svg>

	       									<span><?php echo count($unggahan[$key]->komentar) ?></span>
	       								</a>
                                         
	       								<a href="https://wa.me/<?php echo $p->nomorwa?>?text=Saya%20tertarik%20dengan%20%20postingan%20anda" target="_blank">      <img src="<?php echo base_url('assets/svg-icons/wa-ijo.png')?>">
			       						</a>
	       							</div>
	       						</div>
	       					</article>

	       					<!-- .. end Post -->


	       					<!-- Comments -->
	                        <?php foreach($unggahan[$key]->komentar as $k){ ?>
	       					<ul class="comments-list style-2" id="komen-<?php echo $k->id_komentar ?>">
	       							<li  class="comment-item">
	       								<div class="post__author author vcard">
	       									<img src="<?php echo base_url().'Gambar/'.$k->foto_pengguna?>" alt="author">

	       									<div class="author-date">
	       										<p><a class="h6 post__author-name fn" href="#"><?php echo $k->nama ?></a>   <?php echo $k->detail_komentar ?></br>
	       										</p>
	       										<div class="post__date">
	       											<time id="waktu_komentar-<?php echo $k->id_komentar ?>" class="published"></time>
	       										</div>
                                                
	       											<a data-toggle="modal" data-target="#hapus_komentar<?php echo $k->id_komentar ?>"  href="#" class="reply"><i class="fa fa-window-close"></i> hapus</a>
	       									    
	       									</div>
	       								</div>
	       							</li>
	       							<!-- ... end Comments -->  						
	       					</ul>
	       					<?php } ?>



	       				</div>

	       			</div>

	       		<?php }?>
	       	</div>
	       
	    </div>

	</div>
</section>

<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg></a>


<div class="modal fade" id="tambah_kategori" tabindex="-1" role="dialog" aria-labelledby="edit-widget-blog-post" aria-hidden="true">
	<div class="modal-dialog window-popup edit-widget edit-widget-blog-post" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url()?>assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Tambah Kategori</h6>
			</div>

			<div class="modal-body">
				<form id="insert_submenu" class="content">
					<div class="form-group label-floating is-select">
						<label class="control-label">Pilih bidang</label>
						<select class="selectpicker form-control" name="menu">
							<option value="1">Barang</option>
							<option value="2">Jasa</option>
						</select>
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Kategori</label>
						<input class="form-control" placeholder="" type="text" value="" name="sub_menu">
					</div>
				</form>
			

			<a onclick="insertSubmenu();" class="btn btn-primary btn-lg full-width">Tambahkan</a>
		</div>
		</div>
	</div>
</div>

<?php foreach($sub_menu as $sub){ ?>
<div class="modal fade" id="hapus_submenu<?php echo $sub->id_submenu ?>" tabindex="-1" role="dialog" aria-labelledby="edit-widget-pool" aria-hidden="true">
	<div class="modal-dialog window-popup edit-widget edit-widget-pool" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="title">Hapus Kategori</h6>
			</div>

			<div class="modal-body">
				<h4>Yakin ingin menghapus kategori ini ini?</h4>
				<div class="row">
					<div class="col col-lg-6 col-sm-12 col-12">
						<a href="#" data-dismiss="modal" class="btn bg-twitter btn-md full-width">Cancel</a>
					</div>

					<div class="col col-lg-6 col-sm-12 col-12">
						<a onclick="deleteSubmenu(<?php echo $sub->id_submenu ?>);" href="javascript:location.reload(true)" class="btn btn-primary btn-md full-width">Hapus</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>


<!-- ... Window-popup hapus postingan -->
<?php foreach($unggahan as $key=>$h){ ?>
<div class="modal fade" id="hapus_postingan<?php echo $h->id_unggahan ?>" tabindex="-1" role="dialog" aria-labelledby="edit-widget-pool" aria-hidden="true">
	<div class="modal-dialog window-popup edit-widget edit-widget-pool" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h6 class="title">Hapus Postingan</h6>
			</div>

			<div class="modal-body">
			    <h4>Yakin ingin menghapus postingan ini?</h4>
				<div class="row">
					<div class="col col-lg-6 col-sm-12 col-12">
						<a href="#" data-dismiss="modal" class="btn bg-twitter btn-md full-width">Cancel</a>
					</div>

					<div class="col col-lg-6 col-sm-12 col-12">
						<a onclick="deletePost(<?php echo $h->id_unggahan ?>);" href="javascript:location.reload(true)" class="btn btn-primary btn-md full-width">Hapus</a>
					</div>
				</div>
		    </div>
		</div>
	</div>
</div>
  <?php foreach($unggahan[$key]->komentar as $kh){ ?>
  	<div class="modal fade" id="hapus_komentar<?php echo $kh->id_komentar ?>" tabindex="-1" role="dialog" aria-labelledby="edit-widget-pool" aria-hidden="true">
  		<div class="modal-dialog window-popup edit-widget edit-widget-pool" role="document">
  			<div class="modal-content">

  				<div class="modal-header">
  					<h6 class="title">Hapus Komentar</h6>
  				</div>

  				<div class="modal-body">
  					<h4>Yakin ingin menghapus komentar ini?</h4>
  					<div class="row">
  						<div class="col col-lg-6 col-sm-12 col-12">
  							<a href="#" data-dismiss="modal" class="btn bg-twitter btn-md full-width">Cancel</a>
  						</div>

  						<div class="col col-lg-6 col-sm-12 col-12">
  							<a onclick="deleteKomen(<?php echo $kh->id_komentar ?>);" href="javascript:location.reload(true)" class="btn btn-primary btn-md full-width">Hapus</a>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  <?php }?>
<?php }?>

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
	function insertSubmenu() {

		$.ajax({
			url: '<?php echo base_url('admin/manage/tambah_submenu')?>', 
			method: 'post',
			data: $('#insert_submenu').serialize(),
			dataType: 'json',
			success: function(data){
				if(data == 1){	
					window.location.reload();
				}
			}
		});

	}

	function deleteSubmenu(id_submenu){		
        		$.ajax({
        			url : "<?php echo base_url('admin/manage/hapus_submenu');?>",
        			method : "POST",
        			data : {id: id_submenu},                  
        			dataType : 'json',
        			success: function(data){
        				if(data == 1){	
                	       $('.modal').modal('hide');     
                        }else{
                	       alert('gagal menghapus'); 
                        }
                    }

                });   	 
		}	
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

<!-- waktu -->
<script type="text/javascript">
	
    moment.locale('id');
    <?php foreach ($unggahan as $key=>$u){?>
	   
	$('#waktu_unggahan-<?php echo $u->id_unggahan ?>').html(moment("<?php echo $u->waktu_unggahan ?>").fromNow());   
        <?php foreach($unggahan[$key]->komentar as $c){ ?>
        
        $('#waktu_komentar-<?php echo $c->id_komentar ?>').html(moment("<?php echo $c->waktu_komentar ?>").fromNow());
        <?php }?>

   <?php }?> 
      
</script>


<!-- hapus js -->
<script type="text/javascript">

	    function deletePost(id_unggahan){		
        		$.ajax({
        			url : "<?php echo base_url('berbagi/delete_post');?>",
        			method : "POST",
        			data : {id: id_unggahan},                  
        			dataType : 'json',
        			success: function(data){
        				if(data == 1){	
                	       $('.modal').modal('hide');     
                        }else{
                	       alert('gagal menghapus'); 
                        }
                    }

                });   	 
		}

        function deleteKomen(id_komentar){		
        		$.ajax({
        			url : "<?php echo base_url('berbagi/delete_komen');?>",
        			method : "POST",
        			data : {id: id_komentar},                  
        			dataType : 'json',
        			success: function(data){
        				if(data == 1){	
                	       $('#komen-'+id_komentar).http('');
                	       $('.modal').modal('hide');
                	       
                        }else{
                	       alert('gagal menghapus'); 
                        }
                    }

                });   	 
		}
</script>

</body>
</html>


