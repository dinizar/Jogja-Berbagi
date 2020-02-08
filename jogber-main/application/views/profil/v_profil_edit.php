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
	<style type="text/css">
		.thumb{
	           margin: 10px 5px 0 0;
	           width: 100px;
	           height: 100px;
              }
	</style>
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
								<a href="<?php echo base_url('berbagi/index')?>" class="nav-link">Beranda</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('komunitas/komunitas');?>" class="nav-link">Komunitas</a>
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
									  				<a href="" data-toggle="modal" data-target="#notifikasi_unggahan-<?php echo $n->id_unggahan ?>">	
									  					<div class="counter">
									  						<?php echo $n->pengomentar?>
									  					</div>
									  					<div class="h5 title">Mengomentari Postingan Anda</div>
									  				</a>
									  			</div>
									  			<div class="product-price" id="waktu_notifikasi-<?php echo $n->id_notifikasi?>"></div>
									  			<div class="more" onclick="deleteNotif(<?php echo $n->id_notifikasi?>);">
									  				<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
									  			</div>
									  		</li>
									  	</div>
                                      <?php } ?>
                                    <?php }?> 
									</ul>
									
								</div>
							</li>


						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer--standard"></div>

	<div class="stunning-header-content">
		<h1 class="stunning-header-title">Profil</h1>
		<h1>                       </h1>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>
</div>


<!-- End Stunning header -->
<div class="container negative-margin-top50">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
					<div class="top-header-thumb">
						<div class="top-header-author">
							<div class="author-thumb">
								<img src="<?php echo base_url().'Gambar/'.$this->session->userdata("foto")?>" alt="author">
							</div>
							<div class="author-content">
								<a href="#" class="h3 author-name"><?php echo $this->session->userdata("nama"); ?></a>
								<div class="country"><?php echo $this->session->userdata("email"); ?></div>
							</div>
						</div>
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-xl-8 m-auto col-lg-8 col-md-12">
								<ul class="profile-menu">
									<li>
										<a href="<?php echo base_url('akun/profil_timeline'); ?>"><i class="fa fa-newspaper"></i> Timeline</a>
									</li>
									<li>
										<a href="<?php echo base_url('akun/profil_edit'); ?>" class="active"><i class="fa fa-cog"></i> Edit Profil</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 order-xl-2 col-lg-12 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Personal Information</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Personal Information Form  -->
					
					<form id="form_profil" class="content needs-validation" enctype="multipart/form-data"  multypart="upload/do_upload" method="POST" action="<?php echo base_url().'/akun/update_profil';?>"  novalidate>
						<div class="row">
					    
					      	
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
								     <label class="control-label">Ganti foto profil</label>
								     <input value="<?php $this->session->userdata("foto")?>" type="file" name="foto-profil" class="file-upload__label" id="File">
							    </div>
								<div class="form-group label-floating">
									<label class="control-label">Nama</label>
									<input class="form-control" placeholder="" name="nama" type="text" value="<?php echo $pengguna->nama?>">
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Email</label>
									<input class="form-control" placeholder="" name="email" type="email" value="<?php echo $pengguna->email?>">
								</div>
					
								<div class="form-group date-time-picker label-floating">
									<label class="control-label">Tanggal Lahir</label>
									<input name="datetimepicker" value="<?php echo $pengguna->tgl_lahir?>" />
									<span class="input-group-addon">
															<svg class="olymp-month-calendar-icon icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use></svg>
														</span>
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div id="foto-preview"></div>
								<div class="form-group label-floating">
									<label class="control-label">Username</label>
									<input class="form-control" placeholder="" name="username" type="text" value="<?php echo $pengguna->username?>">
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Password</label>
									<input id="pass" class="form-control" placeholder="" type="password" name="pasword" value="<?php echo $pengguna->pasword?>">
									<span class="input-group-addon">
										<i class="fa fa-binoculars" aria-hidden="true" onmouseover="lihatpasword();" onmouseout="sembunyipasword ();"></i>
									</span>
								</div>
								<label>Jenis Kelamin</label>
								<div class="radio">
									<?php if ($pengguna->jenis_kelamin=='Laki-Laki') {?>
									<label>
										<input type="radio" name="optionsRadios"  value="Laki-Laki" checked>
										Laki-laki
									</label>
									<label>
										<input type="radio" name="optionsRadios"  value="Perempuan">
										Perempuan
									</label>
                                    <?php } else {?>
                                    <label>
										<input type="radio" name="optionsRadios"  value="Laki-Laki">
										Laki-laki
									</label>
									<label>
										<input type="radio" name="optionsRadios"  value="Perempuan" checked>
										Perempuan
									</label>
								    <?php }?>
								</div>
							</div>
					        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					        	<div class="form-group label-floating">
									<label class="control-label">Alamat</label>
									<input class="form-control" placeholder="" name="alamat" type="text" value="<?php echo $pengguna->alamat?>">
								</div>
                            </div>
							
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button type="reset" class="btn btn-secondary btn-lg full-width">RESET</button>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button type="submit" class="btn btn-primary btn-lg full-width">SIMPAN</button>
							</div>
					
					  
						</div>
					</form>
					
					<!-- ... end Personal Information Form  -->
				</div>
			</div>
		</div>
	</div>
</div>


<!-- ... Popup Notifikasi Postingan-->
<?php foreach($unggahan as $key=>$notif){ ?>
<div class="modal fade" id="notifikasi_unggahan-<?php echo $notif->id_unggahan ?>" tabindex="-1" role="dialog" aria-labelledby="blog-post-popup" aria-hidden="true">

	<div class="modal-dialog window-popup blog-post-popup" role="document">

		<div class="modal-content">

			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon">
					<use xlink:href="<?php echo base_url()?>/assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
				</svg>
			</a>

			<div class="modal-body">
				<article class="hentry post has-post-thumbnail thumb-full-width">

					<div class="post__author author vcard inline-items">
						<img src="<?php echo base_url().'Gambar/'.$notif->foto_pengguna?>" alt="author">

						<div class="author-date">
							<a class="h6 post__author-name fn" href=""><?php echo $notif->nama ?></a>
							<div class="post__date">
								<time class="published" id="waktu_unggahan_notif-<?php echo $notif->id_unggahan ?>">
								</time>
							</div>
						</div>

						<div class="more">
							<div class="row">
								<div class="post-thumb">
									<span class="post-category bg-blue"><?php echo $notif->status ?></span>
									<span class="post-category bg-bg-primary">---------</span>
								</div>
								<div class="post-thumb">
									<span class="post-category bg-breez"><?php echo $notif->keterangan_unggahan ?></span>
									<span class="post-category bg-bg-primary">------</span>
								</div>
							</div>
						</div>
					</div>
                    <h4><?php echo $notif->judul_unggahan ?></h4> 
	       			<p><?php echo $notif->keterangan ?></p>

	       						<div class="post-block-photo js-zoom-gallery">
	       							<?php foreach($unggahan[$key]->gambar as $gn){ ?>
	       							    <a href="<?php echo base_url().'Gambar/unggahan/'.$gn->nama_foto?>" class="half-width"><img src="<?php echo base_url().'Gambar/unggahan/'.$gn->nama_foto?>" alt="photo"></a>
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
	       								<?php echo $notif->nama_kecamatan?> <?php echo $notif->nama_kabupaten?></br>
	       								<?php echo $notif->detail_lokasi ?>
	       							</div>


	       							<div class="comments-shared">

	       								<a onclick="like(<?php echo $notif->id_unggahan ?>);" href="javascript:location" class="post-add-icon inline-items">
	       									<svg class="olymp-heart-icon" id="like">
	       										<use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon')?>"></use>
	       									</svg>
	       									<span><?php echo count($unggahan[$key]->jml_suka) ?></span>
	       								</a>

	       								<a class="post-add-icon inline-items"> 
	       									<svg class="olymp-speech-balloon-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon')?>"></use></svg>

	       									<span><?php echo count($unggahan[$key]->komentar) ?></span>
	       								</a>

	       								<a href="https://wa.me/<?php echo $notif->nomorwa?>?text=Saya%20tertarik%20dengan%20%20postingan%20anda" target="_blank">      <img src="<?php echo base_url('assets/svg-icons/wa-ijo.png')?>">
	       								</a>
	       							</div>
	       						</div>

				</article>

				<div class="mCustomScrollbar" data-mcs-theme="dark">

					 <?php foreach($unggahan[$key]->komentar as $kn){ ?>
	       					<ul class="comments-list style-2">
	       							<li  class="comment-item">
	       								<div class="post__author author vcard">
	       									<img src="<?php echo base_url().'Gambar/'.$kn->foto_pengguna?>" alt="author">

	       									<div class="author-date">
	       										<p><a class="h6 post__author-name fn" href="#"><?php echo $kn->nama ?></a>   <?php echo $kn->detail_komentar ?></br>
	       										</p>
	       										<div class="post__date">
	       											<time id="waktu_komentar_notif-<?php echo $kn->id_komentar ?>" class="published"></time>
	       										</div>
                                                
	       									</div>
	       								</div>
	       							</li>
	       							<!-- ... end Comments -->  						
	       					</ul>
	       					<?php } ?>
                </div>
	       					<!-- Comment Form  -->			            
	       					<form method="POST" class="comment-form inline-items" action="<?php echo base_url('berbagi/insert_komen');?>">

	       						<div class="post__author author vcard inline-items">
	       							<img src="<?php echo base_url().'Gambar/'.$this->session->userdata("foto")?>" alt="author">

	       							<div class="form-group with-icon-right ">
	       								<textarea class="form-control" placeholder="" name="detail_komentar"></textarea>
	       								<input style="display: none;" name="id_unggahan" value="<?php echo $notif->id_unggahan ?>">
	       								<input style="display: none;" name="id_pengguna" value="<?php echo $notif->id_pengguna ?>">
	       							</div>
	       						</div>

	       						<button class="btn btn-md-2 btn-primary" type="submit">Komentar</button>

	       						<button type="reset" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

	       					</form>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- ...end Popup Notifikasi Postingan-->


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
           email: {
                 required: true,
                 email: true
           },
           username: {
                 required:true,
                 minlength: 5           
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
        
        submitHandler: function(form) {
			form.submit();
		}
     });
});

function lihatpasword() {
  var x = document.getElementById("pass");
    x.type = "text";
}
function sembunyipasword() {
  var x = document.getElementById("pass");
    x.type = "password";
}
</script>

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

<script type="text/javascript">
	$(document).ready(function(){
	$('#File').on('change', function(){ //on file input change
		if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
    	{
			$('#foto-preview').html(''); //clear html of output element
			var data = $(this)[0].files; //this file data
			
			$.each(data, function(index, file){ //loop though each file
				if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
					var fRead = new FileReader(); //new filereader
					fRead.onload = (function(file){ //trigger function on successful read
					return function(e) {
						var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
						$('#foto-preview').append(img); //append image to output element
					};
				  	})(file);
					fRead.readAsDataURL(file); //URL representing the file's data.
				}
			});
			
		}else{
			alert("Your browser doesn't support File API!"); //if File API is absent
		}
	});
});
</script>

</body>
</html>