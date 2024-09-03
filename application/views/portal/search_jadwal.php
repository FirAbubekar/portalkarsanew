<!doctype html>
<html class="no-js" lang="en">

<head>
	<?php $this->load->view('portal/template/header_css'); ?>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets_portal/css/pendukung/pelayanan.css">
	<style>
	.modal-content {
		width: 100%;
    position: relative;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 6px;
    -webkit-box-shadow: 0 3px 9px rgb(0 0 0 / 50%);
    box-shadow: 0 3px 9px rgb(0 0 0 / 50%);
    outline: 0;
}
</style>
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
				<form action="<?php echo base_url('vaksinasi/result'); ?>" method="post">
					<div class="jam">
						<div class="col-md-8">
							<label for="">Masukan No KTP</label>
							<input type="text" name="noktp" class="form-control"/>
						</div>
					</div>
					<div class="col-md-2">
						<label for="">Cari</label><br>
						<input type="submit" value="Tampilkan" class="btn btn-primary">
					</div>
					<div class="col-md-2">
						<label for="">Pendaftaran</label><br>
						<a style="width: 100%;" class="btn btn-warning" href="<?php echo base_url('vaksinasi'); ?>">Pendaftaran</a>
					</div>
				</form>
				<div class="d_jam">
					<br><br>
				</div>
				<?php if($getjadwal!=null){
					foreach ($getjadwal as $key) { ?>
					<div class="describe">
						<div class="jam">Hasil Pencarian : </div>
						<div class="d_ket">
							<div class="modal-content">
								<div class="modal-header bg-info">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h3 style="color:#fff" class="modal-title">Info Pendaftaran Vaksin COVID-19</h3>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label class="control-label col-sm-12"><b>No KTP</b></label>
										<label style="text-align: right;" class="control-label col-sm-12"><b><?php echo $key->noktp; ?></b></label>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-12"><b>Nama Lengkap</b></label>
										<label style="text-align: right;" class="control-label col-sm-12"><b><?php echo $key->nama; ?></b></label>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-12"><b>Tanggal Lahir</b></label>
										<label style="text-align: right;" class="control-label col-sm-12"><b><?php echo date('d-m-Y', strtotime($key->tgllahir)); ?></b></label>
									</div>
									<br><br><br><br>
									<center><h4><b>Anda Telah Terdaftar</b></h4>
									<font color="" size="5"><b>Vaksinasi COVID-19</b></font><br><br>
									<font color="#e86868" size="2"><b>Harap Untuk Di Screenshot, Sebagai Bukti Telah Melakukan Pendaftaran </b></font><br>
									<font color="" size="4"><b>Tanggal/Jam</b></font>
										<h3><b><?php echo date('d-m-Y', strtotime($key->tgldilayani))."<br><br>".$key->waktudilayani; ?></b></h3><br> 
									</center>
									<hr>
									</h5><b>* Syarat dan Ketentuan: <br></b>
									<hr>
									<ol style="text-align: left;" type="1">
									   <li>Pendaftar <b>TIDAK DIPERKENANKAN</b> mengisi data lebih dari sekali di form google untuk menghindari duplikasi data.</li>
                                        <li><b>Sudah Pernah Dosis 1 dan Dosis 2 SINOVAC/ASTRAZENECA Minimal 6 Bulan</b></li>
                                        <li>Membawa Alat Tulis/Pulpen Sendiri</li>
                                        <li>Menggunakan Masker Medis Dan Menerapkan Prokes 5M</li>
                                        <li>Bagi warga dengan KTP luar Kota Batu, dapat menggunakan <b>Surat Keterangan Domisili</b> dari RT/RW setempat.</li>
                                        <!--<li>Minimal usia <b><?php echo $stat_vaksin->min_usia." Tahun"; ?></b>, dan anak dibawah <b>18 tahun</b> jika belum memiliki KTP dapat diisi dengan NIK sesuai KTP/KTA/KK.</li>-->
                                        <li>Wajib datang dengan <b>membawa KTP</b>, menggunakan masker sesuai standar dan mematuhi protokol kesehatan.</li>
                                        <li>Vaksinasi dilaksanakan pada <b>Pukul 08.00-12.00</b></li>
                                        <li>Tempat pelaksanaan vaksin: <b>Gedung Lama Rawat Jalan Sebelah Timur RSU Karsa Husada Batu</b> </li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				<?php }} ?>
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