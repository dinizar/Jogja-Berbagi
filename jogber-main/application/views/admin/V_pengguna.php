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
							<a href="<?php echo base_url('admin/manage/postingan'); ?>" class="nav-link">POSTINGAN</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/manage/komunitas'); ?>" class="nav-link">KOMUNITAS</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url('admin/manage/pengguna'); ?>" class="nav-link active">PENGGUNA</a>
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

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title"><a href="#">Pengguna</a></div>
					
					<div class="align-right">
						<form class="w-search">
							<div class="form-group with-button">
								<input class="form-control" type="text" placeholder="Search Pengguna...">
								<button>
									<svg class="olymp-magnifying-glass-icon"><use xlink:href="<?php echo base_url()?>assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<?php foreach($pengguna as $p){ ?>
			<div class="col col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="ui-block" data-mh="friend-groups-item">


					<div class="friend-item friend-groups">
						

						<div class="friend-item-content">

							<div class="more">
								<a data-toggle="modal" data-target="#hapus_pengguna<?php echo $p->id_pengguna?>" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>	
							</div>
							<div class="friend-avatar">
								<div class="author-thumb">
								     <img src="<?php echo base_url().'Gambar/'.$p->foto_pengguna?>" alt="photo" style="width: 120px; height: 120px;">
							    </div>
								<div class="author-content">
									<a href="#" class="h5 author-name"><?php echo $p->nama ?></a>
									<div class="country">email :</div>
									<div class="h6"><?php echo $p->email ?></div>
									<div class="country">username :</div>
									<div class="h6"><?php echo $p->username ?></div>
									<div class="country">jenis Kelamin :</div>
									<div class="h6"><?php echo $p->jenis_kelamin ?></div>
									<div class="country">nomor HP :</div>
									<div class="h6"><?php echo $p->nomor_hp ?></div>
									<div class="country">alamat :</div>
									<div class="h6"><?php echo $p->alamat ?></div>
									<div class="country">tanggal lahir :</div>
									<div class="h6"><?php echo $p->tgl_lahir ?></div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="modal fade" id="hapus_pengguna<?php echo $p->id_pengguna ?>" tabindex="-1" role="dialog" aria-labelledby="edit-widget-pool" aria-hidden="true">
				<div class="modal-dialog window-popup edit-widget edit-widget-pool" role="document">
					<div class="modal-content">

						<div class="modal-header">
							<h6 class="title">Hapus Pengguna</h6>
						</div>

						<div class="modal-body">
							<h4>Yakin ingin menghapus pengguna ini?</h4>
							<div class="row">
								<div class="col col-lg-6 col-sm-12 col-12">
									<a href="#" data-dismiss="modal" class="btn bg-twitter btn-md full-width">Cancel</a>
								</div>

								<div class="col col-lg-6 col-sm-12 col-12">
									<a onclick="deletePengguna(<?php echo $p->id_pengguna ?>)" href="javascript:location.reload(true)" class="btn btn-primary btn-md full-width">Hapus</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	    <?php }?>
	</div>
</div>
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
	function deletePengguna(id_pengguna){		
		$.ajax({
			url : "<?php echo base_url('admin/manage/hapus_pengguna');?>",
			method : "POST",
			data : {id: id_pengguna},                  
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



<!-- foto preview -->
<script type="text/javascript">

	$(document).ready(function(){
	<?php foreach ($unggahan as $key=>$egm){?>
	$('#File-edit<?php echo $egm->id_unggahan?>').on('change', function(){ //on file input change
		if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
		{

			$('#foto-preview-edit<?php echo $egm->id_unggahan?>').html(''); //clear html of output element
			var data = $(this)[0].files; //this file data
			
			$.each(data, function(index, file){ //loop though each file
				if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
					var fRead = new FileReader(); //new filereader
					fRead.onload = (function(file){ //trigger function on successful read
						return function(e) {
						var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
						$('#foto-preview-edit<?php echo $egm->id_unggahan?>').append(img); //append image to output element
					};
				})(file);
					fRead.readAsDataURL(file); //URL representing the file's data.
				}
			});
			
		}else{
			alert("Your browser doesn't support File API!"); //if File API is absent
		}
	});


    <?php } ?>


    });
</script>

</body>
</html>


