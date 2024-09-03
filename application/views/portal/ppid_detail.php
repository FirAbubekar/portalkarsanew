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
		<div class="fun-factor-area bg-img pt-35">
		<?php if($ppid==null){
			echo "<div class='container1'><h1>KONTEN TIDAK TERSEDIA</h1><br><br><br></div>";
		}else{ ?>
			<div class="container1">
				<h1><?php echo str_replace('_',' ',$ppid[0]->kategori) . " - " . str_replace('_',' ',$ppid[0]->subkategori); ?></h1>
			</div>
			<?php foreach ($ppid as $row) { ?>
				<div class="container1">
					<div class="ruangan">
						<h3><?php echo $row->judul; ?></h3>
					</div>
					<div class="describe">
						<!-- <div class="jam">Jam Pelayanan : </div>
					<div class="d_jam">
					<?php echo $row->waktu_pelayanan; ?>
					</div> -->
						<div class="describe">
							<div class="d_ket">
							<p><?php echo $row->deskripsi; ?></p>
								<?php if ($row->file != null) {
									$subfile = "";
									if ($row->kategori == "Regulasi") {
										$subfile = "regulasi";
									} elseif ($row->kategori == "Profil") {
										$subfile = "profil";
									} elseif ($row->kategori == "Pelayanan_Informasi") {
										$subfile = "pelayananinformasi";
									} elseif ($row->kategori == "Informasi_Publik") {
										$subfile = "informasipublik";
									}
									$file = substr($row->file, -4);
									if ($file == ".pdf") {
								?>
										<embed src="<?php echo base_url('file/ppid/' . $subfile . '/' . $row->file); ?>" style="width:100%;height:700px;" />

									<?php } else { ?>
										<center><img style="width:50%;height:500px;" src="<?php echo base_url('file/ppid/' . $subfile . '/' . $row->file); ?>" class="gambar" alt="-"></center>
								<?php }
								} ?>
							</div>
						</div>
					</div>
					<hr size="2">
				</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>

	<!--Brand Area End-->

	<?php $this->load->view('portal/template/footer'); ?>
	<!--Footer Area End-->
	</div>

	<!--Jquery 1.12.4-->
	<?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>