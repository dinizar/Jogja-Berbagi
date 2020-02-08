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
	<style>
		#wa:hover {
			  background-color: #58D68D;
			}
	</style>
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
									<span class="count-product"><?php echo count($notifikasi)?></span>
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
										<a href="<?php echo base_url('akun/profil_timeline'); ?>" class="active"><i class="fa fa-newspaper"></i> Timeline</a>
									</li>
									<li>
										<a href="<?php echo base_url('akun/profil_edit'); ?>"><i class="fa fa-cog"></i> Edit Profil</a>
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

	       <!-- Main Content Post Versions -->
	       
	       	<div class="row sorting-container" id="clients-grid-1"  data-layout="masonry">
	       		<?php foreach($unggahan as $key=>$p){ ?>
                  <?php if ($this->session->userdata("id_pengguna")==$p->id_pengguna) {?>
	       			<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 sorting-item">
                          
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
	       									<?php if ($this->session->userdata("id_pengguna")==$p->id_pengguna) {?>
	       										<svg class="olymp-three-dots-icon">
	       											<use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use>
	       										</svg>
	       										<ul class="more-dropdown">
	       											<li>
	       												<a data-toggle="modal" data-target="#edit_postingan<?php echo $p->id_unggahan ?>" href="#">Edit Post</a>
	       											</li>
	       											<li>
	       												<a data-toggle="modal" data-target="#hapus_postingan<?php echo $p->id_unggahan ?>" href="#">Delete Post</a>
	       											</li>
	       										</ul>
	       									<?php }?>
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
	       									<span id="jml-<?php echo $p->id_unggahan ?>"><?php echo count($unggahan[$key]->jml_suka) ?></span>
	       								</a>

	       								<a class="post-add-icon inline-items"> 
	       									<svg class="olymp-speech-balloon-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon')?>"></use></svg>

	       									<span><?php echo count($unggahan[$key]->komentar) ?></span>
	       								</a>
	       							</div>
	       						</div>
	       						<div class="control-block-button post-control-button">
							        <?php if(!empty($jumlah_suka[$p->id_unggahan])) {?>
							          
										<a onclick="tidak_suka(<?php echo $p->id_unggahan ?>)" id="tidaksuka-<?php echo $p->id_unggahan ?>" href="javascript:location" class="btn btn-control" style="background-color: #ff5e3a;">
											<svg class="olymp-like-post-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-like-post-icon')?>"></use></svg>
										</a>
									  
								    <?php } else {?>
								     
                                        <a onclick="suka(<?php echo $p->id_unggahan ?>)" id="suka-<?php echo $p->id_unggahan ?>" href="javascript:location" class="btn btn-control">
											<svg class="olymp-like-post-icon"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-like-post-icon')?>"></use></svg>
										</a>
									  
								    <?php }?>
							
									<a id="wa" href="https://wa.me/<?php echo $p->nomorwa?>?text=Saya%20tertarik%20dengan%20%20postingan%20anda" class="btn btn-control" target="_blank">
										 <i class="fab fa-whatsapp" aria-hidden="true" style="margin-bottom: 2px; height: 22px; width: 22px;"></i>
									</a>
							
								</div>
	       					</article>

	       					<!-- .. end Post -->


	       					<!-- Comments -->
	                        <?php foreach($unggahan[$key]->komentar as $k){ ?>
	       					<ul class="comments-list style-2" id="editkomen-<?php echo $k->id_komentar ?>">
	       							<li  class="comment-item">
	       								<div class="post__author author vcard">
	       									<img src="<?php echo base_url().'Gambar/'.$k->foto_pengguna?>" alt="author">

	       									<div class="author-date">
	       										<p><a class="h6 post__author-name fn" href="#"><?php echo $k->nama ?></a>  <?php echo $k->detail_komentar ?></br>
	       										</p>
	       										<div class="post__date">
	       											<time id="waktu_komentar-<?php echo $k->id_komentar ?>" class="published"></time>
	       										</div>
                                                <?php if ($this->session->userdata("id_pengguna") == $k->id_pengguna_k) {?>
	       											<a onclick="editKomen(<?php echo $k->id_komentar ?>);" href="javascript:location" class="reply"><i class="fa fa-comment"></i> edit</a>
	       											<a data-toggle="modal" data-target="#hapus_komentar<?php echo $k->id_komentar ?>"  href="#" class="reply"><i class="fa fa-window-close"></i> hapus</a>
	       									    <?php }?>
	       									</div>
	       								</div>
	       							</li>
	       							<!-- ... end Comments -->  						
	       					</ul>
	       					<?php } ?>

	       					<!-- Comment Form  -->			            
	       					<form id="insert_komen-<?php echo $p->id_unggahan?>" class="comment-form inline-items">

	       						<div class="post__author author vcard inline-items">
	       							<img src="<?php echo base_url().'Gambar/'.$this->session->userdata("foto")?>" alt="author">

	       							<div class="form-group with-icon-right ">
	       								<textarea class="form-control" placeholder="" name="detail_komentar"></textarea>
	       								<input style="display: none;" name="id_unggahan" value="<?php echo $p->id_unggahan ?>">
	       								<input style="display: none;" name="id_pengguna" value="<?php echo $p->id_pengguna ?>">
	       							</div>
	       						</div>

	       						<button onclick="insertKomentar(<?php echo $p->id_unggahan?>)" class="btn btn-md-2 btn-primary">Komentar</button>

	       						<button type="reset" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

	       					</form>
				
				          <!-- ... end Comment Form  -->


	       				</div>

	       			</div>
                  <?php }?>
	       		<?php }?>
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

<!-- Window-popup Edit postingan -->
<?php foreach($unggahan as $key=>$e){ ?>
	<div class="modal fade" id="edit_postingan<?php echo $e->id_unggahan ?>" tabindex="-1" role="dialog" aria-labelledby="edit-my-poll-popup" aria-hidden="true">
		<div class="modal-dialog window-popup edit-my-poll-popup" role="document">
			<div class="modal-content">
				<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
					<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url()?>/assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
				<div class="modal-header">
					<h6 class="title">Edit Postingan</h6>
				</div>
				<div class="ui-block">
					<div class="modal-body">
						<form class="resume-form needs-validation" enctype="multipart/form-data"  multypart="upload/do_upload" method="post" action="<?php echo base_url().'berbagi/update_post/'.$e->id_unggahan;?>"  novalidate>
							<div class="row">
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating is-select">
										<label class="control-label">Judul</label>
										<input class="form-control" name="judul" value="<?php echo $e->judul_unggahan?>" type="text" required>
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Kategori</label>
										<select class="selectpicker form-control" name="sub_menu">
											<option value="<?php echo $e->id_submenu?>"><?php echo $e->nama_submenu?></option>
											<?php foreach($sub_menu as $s){ ?>
												<option value="<?php echo $s->id_submenu?>"><?php echo $s->nama_submenu?></option>
											<?php } ?>
										</select>
									</div>

									<div class="radio">
										<?php if ($e->status=='Belum Terpenuhi') {?>
											<label>
												<input type="radio" name="optionsRadios-status"  value="Belum Terpenuhi" checked>
												Belum Terpenuhi
											</label>
											<label>
												<input type="radio" name="optionsRadios-status"  value="Sudah Terpenuhi">
												Sudah Terpenuhi
											</label>
										<?php } else {?>
											<label>
												<input type="radio" name="optionsRadios-status"  value="Belum Terpenuhi">
												Belum Terpenuhi
											</label>
											<label>
												<input type="radio" name="optionsRadios-status"  value="Sudah Terpenuhi" checked>
												Sudah Terpenuhi
											</label>
										<?php } ?>

									</div>
									<div class="radio">
										<?php foreach($kategori_unggahan as $kat){ ?>
											<label>
												<input type="radio" name="optionsRadios-keterangan"  value="<?php echo $kat->id_kategori?>" checked>
												<?php echo $kat->keterangan_unggahan?>
											</label>
										<?php } ?>
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Wilayah</label>
										<select class="selectpicker form-control" data-live-search="true" name="kecamatan">
											<option value="<?php echo $e->id_kecamatan?>"  ><?php echo $e->nama_kecamatan?></option>
											<?php
											$id_kabupaten = 0;
											foreach ($wilayah as $k) {
												if ($id_kabupaten != $k->id_kabupaten) {
													?>
													<optgroup label="<h6><?= $k->nama_kabupaten ?></h6>">
													<?php } ?>

													<option value="<?= $k->id_kecamatan ?>"  ><?= $k->nama_kecamatan ?></option>
													<?php
													$id_kabupaten = $k->id_kabupaten;
													if ($id_kabupaten != $k->id_kabupaten) {
														?>
													}
												</optgroup>
												<?php
											}} ?>
										</select>
									</div> 

									<div class="form-group">
										<label class="control-label">Tambah Gambar</label>
										<input value="" type="file" name="files[]" class="file-upload__label" id="File-edit<?php echo $e->id_unggahan ?>" multiple>
									</div>
									<div class="post-block-photo">
										<?php foreach($unggahan[$key]->gambar as $ge){ ?>
											<div id="hapus_gambar-<?php echo $ge->id_foto ?>">

											<a   onclick="deleteImg(<?php echo $ge->id_foto ?>)" href="javascript:location.reload(true)" class="half-width" data-toggle="tooltip" data-placement="top" data-original-title="Hapus gambar"><img src="<?php echo base_url().'Gambar/unggahan/'.$ge->nama_foto?>" alt="photo"></a> 
										</div >
										<?php }?>
									</div>

								</div>
								<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
									<div class="form-group label-floating is-select">
										<label class="control-label">Keterangan</label>
										<textarea class="form-control" placeholder="" name="keterangan"><?php echo $e->keterangan?></textarea>
									</div>
									<div class="form-group label-floating is-select">
										<label class="control-label"> Detail lokasi</label>
										<textarea class="form-control" placeholder="" name="lokasi"><?php echo $e->detail_lokasi?></textarea>
									</div>
									<div class="form-group with-icon label-floating is-select">
									       <label class="control-label">Tambahkan Nomor Whatsapp</label>
									       <input class="form-control" name="nomorwa" placeholder="62..." value="<?php echo $e->nomorwa?>" type="text" required minlength="11" data-toggle="tooltip" data-placement="top" data-original-title="ganti awalan '0' dengan 62">
									       <i class="fab fa-whatsapp c-whatsapp" aria-hidden="true"></i>
									  </div>
									
									<div id="foto-preview-edit<?php echo $e->id_unggahan ?>" class="post-block-photo"></div>

                                    <input style="display: none;" type="datetime" name="waktu" value="<?php echo $e->waktu_unggahan ?>">	
									<input class="btn btn-primary btn-md-2" type="submit" name="submit-post" value="Update"> 
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<!-- ... end Window-popup edit postingan -->

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

<!-- LIKE DISLIKE -->
<script type="text/javascript">
	function suka(id_unggahan){                  
		$.ajax({
			url : '<?php echo base_url()?>berbagi/tambah_jml_suka',
			method : 'post',
			data : {id : id_unggahan},
			dataType : 'json',                 
			success: function(data){

				$('#suka-'+id_unggahan).replaceWith(
												"<a onclick=\"tidak_suka("+id_unggahan+")\" id=\"tidaksuka-"+id_unggahan+"\" href=\" javascript:location\" class=\"btn btn-control\" style=\"background-color: #ff5e3a;\">"+
												"<svg class=\"olymp-like-post-icon\"><use xlink:href=\"<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-like-post-icon')?>\"></use></svg>"+
												"</a>"
					                         );

				var jml= data.length;
				$('#jml-'+id_unggahan).html(jml);	  			 		
			}

		});



	}

	function tidak_suka(id_unggahan){
		$.ajax({
			url : '<?php echo base_url()?>berbagi/kurang_jml_suka',
			method : 'post',
			data : {id : id_unggahan},
			dataType : 'json',                 
			success: function(data){

				$('#tidaksuka-'+id_unggahan).replaceWith(
													"<a onclick=\"suka("+id_unggahan+")\" id=\"suka-"+id_unggahan+"\" href=\"javascript:location\" class=\"btn btn-control\">"+
													"<svg class=\"olymp-like-post-icon\"><use xlink:href=\"<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-like-post-icon')?>\"></use></svg>"+
													"</a>"
					                             );
				if (data==null) {
					var jml= "0";
				} else{
					var jml= data.length;
				}
				
				$('#jml-'+id_unggahan).html(jml);	  			 		
			}

		});
    }
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

<!-- komentar -->
<script type="text/javascript">

function editKomen(id_komentar){
  <?php foreach($unggahan as $ungh){    	  	  
       foreach ($ungh->komentar as $komentar) { ?>
         			if (<?php echo $komentar->id_komentar ?> == id_komentar) { 
    
         					$('#editkomen-'+id_komentar).html(
                                              
									       					"<form class=\"comment-form inline-items\">"+
									       							
									       								"<div class=\"post__author author vcard inline-items\">"+
									       									"<img src=\"<?php echo base_url().'Gambar/'.$this->session->userdata("foto")?>\" alt=\"author\">"+
									       									"<div class=\"form-group with-icon-right\">"+
									       										"<textarea id=\"detailkomen\" class=\"form-control\" name=\"detail_komentar\"><?php echo $komentar->detail_komentar ?> </textarea>"+
									       									   
									       									"</div>"+
                                                                            "<li>"+
										       									"<a id=\"yes\" href=\"javascript:location\" class=\"more\"><i class=\"fa fa-check\"></i> </a>"+
										       									"<a id=\"no\" href=\"javascript:location\" class=\"more\"><i class=\"fa fa-times\"></i> </a>"+
									       									"</li>"+
									       								"</div>"+
									       							
									       					 "</form>"

						       				   
	                                                       ); 

                         var yes = document.getElementById("yes");
			             var no = document.getElementById("no");
			             

			             yes.onclick = function(){
			             	var detailkomen = $.trim($("#detailkomen").val());

                            console.log(id_komentar);
                            console.log(detailkomen);
                            console.log("<?php echo $komentar->waktu_komentar ?>","<?php echo $komentar->id_unggahan ?>","<?php echo $komentar->id_pengguna ?>");

			             	$.ajax({
				             		url : '<?php echo base_url()?>berbagi/update_komentar',
				             		method : 'post',
				             		data : {id             : id_komentar,
					             			detail_komentar: detailkomen,
					             			waktu_komentar : '<?php echo $komentar->waktu_komentar ?>',
					             			id_unggahan    : '<?php echo $komentar->id_unggahan ?>',
					             			id_pengguna    : '<?php echo $komentar->id_pengguna_k ?>'
				             		       },
				             		dataType : 'json',                 
				             		success: function(data){
				             			if(data == 1){	
				             				window.location.reload();
				             			}else{
				             				alert('gagal edit'); 
				             			}
				             		}

			             	}); 
			             }

			             no.onclick = function(){
			             	moment.locale('id');
			             	
			             	$('#editkomen-'+id_komentar).html( 
			             		                          "<ul class=\"comments-list style-2\" id=\"komen-<?php echo $komentar->id_komentar ?>\">"+
								       							"<li  class=\"comment-item\">"+
								       								"<div class=\"post__author author vcard\">"+
								       									"<img src=\"<?php echo base_url().'Gambar/'.$komentar->foto_pengguna?>\" alt=\"author\">"+
								       									"<div class=\"author-date\">"+
								       										"<p>"+
								       										    "<a class=\"h6 post__author-name fn\" href=\"#\">"+
								       										       "<?php echo $komentar->nama ?>"+  
								       										    "</a>"+   
								       										       "<?php echo $komentar->detail_komentar ?>"+"</br>"+
								       										 "</p>"+
								       										"<div class=\"post__date\">"+
								       											"<time id=\"waktu_komentar-<?php echo $komentar->id_komentar ?>\" class=\"published\"></time></div>"+
							                                                "<?php if ($this->session->userdata("id_pengguna") == $komentar->id_pengguna_k) {?>"+
								       											"<a onclick=\"editKomen(<?php echo $komentar->id_komentar ?>);\" href=\"javascript:location\" class=\"reply\"><i class=\"fa fa-comment\"></i> edit</a>"+
								       											"<a data-toggle=\"modal\" data-target=\"#hapus_komentar<?php echo $komentar->id_komentar ?>\"  href=\"#\" class=\"reply\"><i class=\"fa fa-window-close\"></i> hapus</a>"+
								       									    "<?php }?>"+
								       									"</div>"+
								       								"</div>"+
								       							"</li>"+  						
								       					 "</ul>"
			             		                         );
			             	$('#waktu_komentar-<?php echo $komentar->id_komentar ?>').html(moment("<?php echo $komentar->waktu_komentar ?>").fromNow());
			             }

                    }
             
       <?php }?>
   
  <?php }?>
}


function insertKomentar(id_unggahan) {
	<?php foreach($unggahan as $ung) { ?>
            if (<?php echo $ung->id_unggahan ?> == id_unggahan) { 

							$.ajax({
									url: '<?php echo base_url('berbagi/insert_komen')?>', 
									method: 'post',
									data: $('#insert_komen-<?php echo $ung->id_unggahan?>').serialize(),
									dataType: 'json',
							        success: function(data){
							           if(data == 1){	
							        	  window.location.reload();
							           }
							        }
							});
		    }
	<?php }?>
 }

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

        function deleteImg(id_img){

			if (confirm("Yakin ingin menghapus gambar?")) {	
				$.ajax({
					url : "<?php echo base_url('berbagi/delete_foto');?>",
					method : "POST",
					data : {id: id_img},                  
					dataType : 'json',
					success: function(data){
						if(data == 1){	
							$('#hapus_gambar-'+id_img).html('');
						}else{
							alert('gagal menghapus'); 
						}
					}

				});
			}
		}

        function deleteKomen(id_komentar){		
        		$.ajax({
        			url : "<?php echo base_url('berbagi/delete_komen');?>",
        			method : "POST",
        			data : {id: id_komentar},                  
        			dataType : 'json',
        			success: function(data){
        				if(data == 1){	
                	       $('#komen-'+id_komentar).html('');
                	       $('.modal').modal('hide');
                        }else{
                	       alert('gagal menghapus'); 
                        }
                    }

                });   	 
		}

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
	<?php foreach ($notifikasi as $w) {?>
   	   $('#waktu_notifikasi-<?php echo $w->id_notifikasi ?>').html(moment("<?php echo $w->waktu_komentar ?>").fromNow());
   <?php }?>
      $('.count-product').html($("li div.product-price").length);
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
</body>
</html>