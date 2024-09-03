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
		<div class="fun-factor-area bg-img pt-35 pb-100">
		<?php if($ppid==null){echo "<div class='container1'><h1>KONTEN TIDAK TERSEDIA</h1><br><br><br></div>";}else{ ?>
			<div class="container1">
				<h1><?php echo str_replace('_',' ',$ppid[0]->kategori); ?></h1>
				<br><small><b style="color: #f36464;">* Untuk Pengiriman Data PPID Dapat Langsung Ke Email *****@gmail.com</b></small>
			</div>
			<?php foreach ($ppid as $row) { ?>
				<div class="container1">
					<div class="ruangan">
						<h3><?php echo $row->judul; ?></h3>
					</div>
					<div class="describe">
						<div class="jam">Keterangan : </div>
                        <div class="row">
                        <?php
                        $this->db->where('id_ppid',$row->id_ppid);
                        $getgaleri = $this->db->get('detail_ppid');
                            foreach ($getgaleri->result() as $key) {
                            $file = substr($key->gambar, -4);
                            if ($file == ".pdf") { ?>
                            <div class="column col-md-6 col-sm-12 col-lg-4">
                                <div class="content">
                                <embed src="<?php echo base_url('file/ppid/galeri/' . $key->gambar); ?>" style="width:100%;height:500px;" />
                                </div>
                            </div>
                            <?php } else { 
										 ?>
                                         
                                         <div class="col-md-6 pt-20">
                                         <img style="width:auto;height:500px;" src="<?php echo base_url('file/ppid/galeri/' . $key->gambar); ?>" class="gambar" alt="-">
                                         </div>
								<?php }
                                }
								 ?>
                        </div>
					</div>
				</div>
			<?php } ?>
		</div>
        <hr class="pt-100" size="2">
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