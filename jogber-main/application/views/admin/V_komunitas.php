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
							<a href="<?php echo base_url('admin/manage/komunitas'); ?>" class="nav-link active">KOMUNITAS</a>
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

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="active"><a href="#">Komunitas</a></div>
					<div class=""><a href="#">Lembaga Kemasyarakatan Sosial (LKS)</a></div>
					<a data-toggle="modal" data-target="#tambah_komunitas" href="" class="btn btn-green btn-sm">Tambah</a>
					<div class="align-right">
						<form class="w-search">
							<div class="form-group with-button">
								<input class="form-control" type="text" placeholder="Search the komunitas...">
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
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

			<div class="ui-block">

				
				<!-- Forums Table -->
				
				<table class="forums-table">
				
					<thead>
				
						<tr>
					
							<th class="forum">
								Komunitas
							</th>
					
							<th class="forum">
								Tipe
							</th>
					
							<th class="forum">
								Kontak 
							</th>
					
							<th class="forum">
								Alamat
							</th>
					
						</tr>
				
					</thead>
				
					<tbody>
						<?php foreach ($komunitas as $k){?>
						 <tr>
							<td class="forum">
								<div class="forum-item">
									<div class="content">
										<a href="#" class="h6 title"><?php echo $k->nama_komunitas?></a>
										<p class="text"><?php echo $k->keterangan?></p>
									</div>
								</div>
							</td>
							<td class="topics">
								<a  class="h6 count"><?php echo $k->tipe_komunitas?></a>
							</td>
							<td class="posts">
								<a  class="h6 count"><?php echo $k->kontak?></a>
							</td>
							<td class="freshness">
								<p><?php echo $k->lokasi?></p>
							</td>
							<td>
								<!-- <a href="" class="btn btn-primary btn-sm">Situs Web</a> -->
								<a data-toggle="modal" data-target="#edit_komunitas<?php echo $k->id_komunitas?>" href="" class="post-add-icon"><i class="fa fa-cogs" aria-hidden="true"></i></a>
								<br><br>
								<a data-toggle="modal" data-target="#hapus_komunitas<?php echo $k->id_komunitas?>" href="" class="post-add-icon"><i class="fa fa-trash" aria-hidden="true"></i></a>
							</td>
						</tr>
					   <?php }?>
				    </tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- Pagination -->
			
			<nav aria-label="Page navigation">
				<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">...</a></li>
					<li class="page-item"><a class="page-link" href="#">12</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
			
	<!-- ... end Pagination -->
</div>

<a class="back-to-top" href="#">
	<img src="<?php echo base_url('assets/svg-icons/back-to-top.svg')?>" alt="arrow" class="back-icon">
</a>


<div class="modal fade" id="tambah_komunitas" tabindex="-1" role="dialog" aria-labelledby="popup-write-rewiev" aria-hidden="true">
	<div class="modal-dialog window-popup popup-write-rewiev" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url()?>assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Tambah Komunitas</h6>
			</div>

			<div class="modal-body">
				<form id="form_tambah" class="content">
					<div class="row">
						<div class="col col-xl-6 col-lg-6 col-md-6">
							<div class="form-group label-floating is-empty">
								<label class="control-label">Nama Komunitas</label>
								<input class="form-control" placeholder="" type="text" name="nama_komunitas" value="">
							</div>
						</div>
						<div class="col col-xl-6 col-lg-6 col-md-6">
							<div class="form-group label-floating is-empty">
								<label class="control-label">Tipe</label>
								<input class="form-control" placeholder="" type="text" name="tipe_komunitas" value="">
							</div>
						</div>
						<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="form-group label-floating is-empty">
								<label class="control-label">Keterangan</label>
								<textarea class="form-control" placeholder="" name="keterangan"></textarea>
							</div>
							<div class="form-group label-floating is-empty">
								<label class="control-label">Kontak</label>
								<input class="form-control" placeholder="" type="text" name="kontak" value="">
							</div>

							<div class="form-group label-floating is-empty">
								<label class="control-label">Alamat</label>
								<textarea class="form-control" placeholder="" name="alamat"></textarea>
							</div>	
						</div>
					</div>
				</form>
				<a onclick="insertKomunitas()" class="btn btn-green btn-lg full-width">Tambah komunitas</a>
			</div>

		</div>
	</div>
</div>

<?php foreach ($komunitas as $hk){?>
<div class="modal fade" id="edit_komunitas<?php echo $hk->id_komunitas ?>" tabindex="-1" role="dialog" aria-labelledby="popup-write-rewiev" aria-hidden="true">
	<div class="modal-dialog window-popup popup-write-rewiev" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url()?>assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Edit Komunitas</h6>
			</div>

			<div class="modal-body">
				<form class="content" method="post" action="<?php echo base_url().'admin/manage/edit_komunitas/'.$hk->id_komunitas?>">
					
					<div class="row">
						<div class="col col-xl-6 col-lg-6 col-md-6">
							<div class="form-group label-floating">
								<label class="control-label">Nama Komunitas</label>
								<input class="form-control" placeholder="" type="text" name="nama_komunitas" value="<?php echo $hk->nama_komunitas ?>">
							</div>
						</div>
						<div class="col col-xl-6 col-lg-6 col-md-6">
							<div class="form-group label-floating">
								<label class="control-label">Tipe</label>
								<input class="form-control" placeholder="" type="text" name="tipe_komunitas" value="<?php echo $hk->tipe_komunitas ?>">
							</div>
						</div>
						<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="form-group label-floating">
								<label class="control-label">Keterangan</label>
								<textarea class="form-control" placeholder="" name="keterangan"><?php echo $hk->keterangan ?></textarea>
							</div>
							<div class="form-group label-floating">
								<label class="control-label">Kontak</label>
								<input class="form-control" placeholder="" type="text" name="kontak" value="<?php echo $hk->kontak ?>">
							</div>

							<div class="form-group label-floating">
								<label class="control-label">Alamat</label>
								<textarea class="form-control" placeholder="" name="alamat"><?php echo $hk->lokasi ?></textarea>
							</div>	
						</div>
					</div>
					<input class="btn btn-green btn-md-2" type="submit" name="submit" value="Simpan Perubahan">
				</form>
			</div>

		</div>
	</div>
</div>

<div class="modal fade" id="hapus_komunitas<?php echo $hk->id_komunitas ?>" tabindex="-1" role="dialog" aria-labelledby="edit-widget-pool" aria-hidden="true">
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
						<a onclick="deleteKomunitas(<?php echo $hk->id_komunitas ?>)" href="javascript:location.reload(true)" class="btn btn-primary btn-md full-width">Hapus</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>


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
	function insertKomunitas(){
		$.ajax({
			url: '<?php echo base_url('admin/manage/tambah_komunitas')?>', 
			method: 'post',
			data: $('#form_tambah').serialize(),
			dataType: 'json',
			success: function(data){
				if(data == 1){	
					window.location.reload();
				}
			}
		});

	}

	function deleteKomunitas(id_komunitas){		
		$.ajax({
			url : "<?php echo base_url('admin/manage/hapus_komunitas');?>",
			method : "POST",
			data : {id: id_komunitas},                  
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


