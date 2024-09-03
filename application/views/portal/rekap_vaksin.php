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
			<img src="<?php echo base_url();?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
		</div>
		<div class="visi">
			<div class="title1 pt-120blog">
				<h2>CARI JADWAL VAKSIN</h2>
				<hr>
			</div>
		</div>
		<div class="fun-factor-area bg-img pt-35">
			<div class="container1">
				<div class="describe">
				<form action="<?php echo base_url('vaksinasi/rekap_vaksin'); ?>" method="post">
					<div class="jam">
						<div class="col-md-9">
							<label for="">Masukan Tanggal</label>
							<input type="date" value="<?php echo $tanggal; ?>" name="tglvaksin" class="form-control"/>
						</div>
					</div>
					<div class="col-md-3">
						<label for="">Cari</label><br>
						<input type="submit" value="Tampilkan Jadwal" class="btn btn-primary">
					</div>
				</form>
                <form action="<?php echo base_url('vaksinasi/export'); ?>" method="post">
                <input type="hidden" value="<?php echo $tanggal; ?>" name="tglvaksindownload" class="form-control"/>
                <input style="margin-top: 80px;" type="submit" value="Download Jadwal Vaksinasi" class="btn btn-success">
				<div style="padding-top: 0px;" class="d_jam">
					<br><br>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Syarat</th>
                                <th>No KTP</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Pekerjaan</th>
                                <th>TTL</th>
                                <th>Alamat</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>Dusun</th>
                                <th>Kelurahan</th>
                                <th>No HP</th>
                                <th>Tgl. Vaksin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($rekap as $key) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $key->syarat; ?></td>
                                <td><?php echo $key->noktp; ?></td>
                                <td><?php echo $key->nama; ?></td>
                                <td><?php echo $key->jk; ?></td>
                                <td><?php echo $key->pekerjaan; ?></td>
                                <td><?php echo $key->tgllahir; ?></td>
                                <td><?php echo $key->alamat; ?></td>
                                <td><?php echo $key->rt; ?></td>
                                <td><?php echo $key->rw; ?></td>
                                <td><?php echo $key->dusun; ?></td>
                                <td><?php echo $key->kelurahan; ?></td>
                                <td><?php echo $key->nohp; ?></td>
                                <td><?php echo $key->tgldilayani; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
				</div>
                </form>
                
				</div>
				<hr size="2">
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