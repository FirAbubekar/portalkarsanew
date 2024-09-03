<!doctype html>
<html class="no-js" lang="en">

<head>
	<?php $this->load->view('portal/template/header_css'); ?>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_portal/css/pendukung/pelayanan.css">

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
			<img src="<?php echo base_url(); ?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
		</div>

		<div class="container1">
			<h1><?php echo str_replace('_',' ',$menu); ?></h1>
			<!-- <h1><?php echo str_replace('_',' ',$menu); ?></h1> -->
		</div>

		<div class="container1">
			<div class="row">
				<div class="col-md-12">
					<?php foreach ($diklat as $key) {
					$getgaleri = $this->db->query("
    					SELECT
                        	t_detaildiklat.file
                        FROM
                        	t_detaildiklat 
                        WHERE
                        	t_detaildiklat.id_diklat = '".$key->id_konten."' 
                        	AND t_detaildiklat.`status` = 'aktif'
					")->result();
					?>
					<div class="ruangan">
						<h3><?php echo $key->judul; ?></h3>
						<!-- <h3>tes2</h3> -->
					</div>
					
					<div class="describe">
						<div class="d_jam">
						<?php echo $key->sub_judul; ?>
						</div>
						<div class="describe">
							<div class="d_ket">
							<p><?php echo $key->deskripsi; ?></p>
							</div>
							<div class="d_ket">
							<?php
							foreach($getgaleri as $galeri){ ?>
							<div class="col-md-6">
							<?php
							$gambar = substr($galeri->file,-4);
							 $menus  = strtolower($menu);
    							if($gambar==".pdf"||$gambar==".docx"||$gambar==".csv"){
    							    $link = base_url("file/diklat/$menus/$key->id_konten/$galeri->file");
    							    echo '<a href="'.$link.'" target="_blank" class="btn btn-primary btn-xs">Lihat Dokumen</a>';
    							}else{
    							    $link = base_url("file/diklat/$menus/$key->id_konten/$galeri->file");
    							    echo '<img src="'.$link.'" style="width: 100%;height:500px"  alt="">';
    							}   
							?>
							</div>
							<?php }?>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				
			</div>
		</div>
		<hr size="2">
		
	</div>

	<!--Brand Area End-->

	<?php $this->load->view('portal/template/footer'); ?>
	<!--Footer Area End-->
	</div>

	<!--Jquery 1.12.4-->
	<?php $this->load->view('portal/template/footer_js'); ?>
</body>


</html>