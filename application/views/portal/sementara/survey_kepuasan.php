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
				<div class="container1">
					<div class="ruangan">
						<h3><?php echo "SURVEY KEPUASAN MASYARAKAT RSUD KARSA HUSADA BATU ".$tahun; ?></h3>
					</div>
					<div class="describe">
						<!-- <div class="jam">Jam Pelayanan : </div>
					<div class="d_jam
					</div> -->
						<div class="describe">
							<div class="jam">Semester 1 : </div>
							<div class="d_ket">
							<p><?php echo ""; ?></p>
                                <embed src="<?php echo base_url('file/zonaintegritas/survey_kepuasan/'.$tahun.'/skm'.$tahun."1.pdf"); ?>" style="width:100%;height:700px;" />
							</div>
						</div>
					</div>
					<hr size="2">
                    <div class="describe">
						<!-- <div class="jam">Jam Pelayanan : </div>
					<div class="d_jam
					</div> -->
						<div class="describe">
							<div class="jam">Semester 2 : </div>
							<div class="d_ket">
							<p><?php echo ""; ?></p>
                                <embed src="<?php echo base_url('file/zonaintegritas/survey_kepuasan/'.$tahun.'/skm'.$tahun."2.pdf"); ?>" style="width:100%;height:700px;" />
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>

	<!--Brand Area End-->

	<?php $this->load->view('portal/template/footer'); ?>
	<!--Footer Area End-->
	</div>

	<!--Jquery 1.12.4-->
	<?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>