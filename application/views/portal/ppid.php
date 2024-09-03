<!doctype html>
<html class="no-js" lang="en">

<head>
	<?php $this->load->view('portal/template/header_css'); ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets_portal/css/pendukung/ppid.css">
</head>

<body>
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

	<div class="wrapper">
		<!--Header Area Start-->
		<?php $this->load->view('portal/template/menu'); ?>
		<!--Header Area End-->
		<!--Brand Area Start-->
		<div class="latest-blog-area pt-120blog">
			<img src="<?php echo base_url();?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
		</div>
		<div class="title">
			PPID
			<hr>
		</div>
		<section id="tabs">
			<div class="container1">
				<div class="row">
					<div class="col-xs-12">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<?php foreach ($ppid->result() as $row) { ?>
								<button class="btn nav-item nav-link" id="nav-home-tab" data-toggle="tab"
									href="#<?php echo strtolower(str_replace(' ','_',$row->judul)) ; ?>" role="tab"
									aria-controls="nav-profile" aria-selected="false"><?php echo $row->judul; ?></button>
								<?php } ?>
								<!-- <a class="btn nav-item nav-link " id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                  aria-controls="nav-contact" aria-selected="false">INFO PUBLIK</a>
                <a class="btn nav-item nav-link " id="nav-contact-tab" data-toggle="tab" href="#nav-contact1" role="tab"
                  aria-controls="nav-contact" aria-selected="false">LAYANAN INFORMASI</a>
                <a class="btn nav-item nav-link " id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                  aria-controls="nav-contact" aria-selected="false">GALERI PPID</a> -->
							</div>
						</nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-profile">
						<?php foreach ($ppid->result() as $row) { ?>
						
							<div class="tab-pane fade" id="<?php echo strtolower(str_replace(' ','_',$row->judul)) ; ?>"
								role="tabpanel" aria-labelledby="nav-home-tab">
								<div class="t_cont">
									<div class="content">
										<div class="icon">
                    <?php if($row->gambar!=null){?>
											<center><img style="width:50%;height:500px;" src="<?php echo base_url('file/ppid/'.$row->gambar);?>" class="gambar" alt="Mountains"></center>
                    <?php } ?>
										</div>
										<div class="deskripsi">
											<p><?php echo $row->deskripsi; ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>

							<!-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <div class="t_cont">
                      <div class="content">
                        <div class="icon">
                        <img src="<?php echo base_url();?>file/pelayanan/hemodialisa/IMG_1.png" class="gambar" alt="Mountains">
                        </div>
                        <div class="deskripsi">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem 
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          <br><br>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem 
                          ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                      </div>
                      </div>
                    </div>
              </div> -->

						</div>

					</div>
				</div>

		</section>

		<!-- END MAIN -->
	</div>
	<?php $this->load->view('portal/template/footer'); ?>
	</div>
	<?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>