<!doctype html>
<html class="no-js" lang="en">

<head>
<?php $this->load->view('portal/template/header_css'); ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets_portal/css/pendukung/kepuasan.css">
    </head>

<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="wrapper">
        <!--Header Area Start-->
        <?php $this->load->view('portal/template/menu'); ?>
        <!--Header Area End-->

     <div class="latest-blog-area pt-120blog">
		<img src="<?php echo base_url();?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
	</div>


	<div class="title">
		INDEKS KEPUASAN MASYARAKAT
		<hr>
	</div>
	<div class="main">
		<!-- END GRID -->
		<div class="row">
			<!-- END GRID -->
			<div class="d_misi">
				<?php foreach ($ikm->result() as $row) { ?>
				
				<div class="l_file col-sm-12 col-md-12 col-lg-12">
				<h3><?php echo $row->judul;?></h3>
				<hr>
                      <center><img src="<?php echo base_url('file/ikm/'.$row->gambar);?>" class="center" alt=""></center>
				</div>
				<?php } ?>
			</div>

			<!-- END GRID -->
		</div>
	</div>

    <?php $this->load->view('portal/template/footer'); ?>
        <!--Footer Area End-->
    </div>
<?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>
