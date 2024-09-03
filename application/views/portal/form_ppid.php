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
<style>
    input{
        height: 20px;
    }
</style>
	<div class="wrapper">
		<!--Header Area Start-->
		<?php $this->load->view('portal/template/menu'); ?>
		<!--Header Area End-->
		<!--Brand Area Start-->
		<div class="latest-blog-area pt-120blog">
			<img src="<?php echo base_url();?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
		</div>
		<div class="fun-factor-area bg-img ">
			<div class="container">
				<div class="ruangan">
					<h3>FORM PERMOHONAN INFORMASI</h3>
				</div>
				<div class="describe">
					<div class="describe">
						<div class="jam">Masukan Sesuai Data Yang Valid : </div>
						<div class="d_ket">
						<form action="<?php echo base_url('ppid/simpan');?>" method="post">
                        <fieldset>
                            <div class="form-group">
                                <center><label for="">No. Register * </label>
                                <u><h4 for=""><?php date_default_timezone_set("Asia/Jakarta"); $kdpemohon = "PI".date('YmdHis'); echo "070/     /102.6/2021"; ?> </h4></u>
                                <input type="hidden" name="kdpermohonan" value="<?php echo $kdpemohon; ?>" class="form-control" id="">
                                </center>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Telp/Email</label>
                                <input type="text" name="notelp" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Rincian Informasi</label>
                                <textarea name="rincian" class="form-control" id="" cols="30" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Alasan/Tujuan Penggunaan Informasi</label>
                                <textarea name="alasan" class="form-control" id="" cols="30" rows="4"></textarea>
                            </div>
                            <label for="">Cara Memperoleh Informasi ** </label>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <input type="radio" id="male" name="oleh" value="Melihat/ Membaca/ Mendengarkan/ Mencatat">
                                    </div>
                                    <div class="col-md-9">
                                        Melihat/ Membaca/ Mendengarkan/ Mencatat<br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <input type="radio" id="male" name="oleh" value="Mendapatkan Salinan Informasi(Hardcopy/Softcopy)">
                                    </div>
                                    <div class="col-md-9">
                                        Mendapatkan Salinan Informasi(Hardcopy/Softcopy<br>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <label for="">Cara Mendapatkan Salinan Informasi***</label>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <input type="checkbox" id="male" name="dapat[]" value="Mengambil Langsung">
                                    </div>
                                    <div class="col-md-9">
                                        Mengambil Langsung<br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <input type="checkbox" id="male" name="dapat[]" value="POS">
                                    </div>
                                    <div class="col-md-9">
                                        POS<br>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <input type="checkbox" id="male" name="dapat[]" value="Email">
                                    </div>
                                    <div class="col-md-9">
                                        Email<br>
                                    </div>
                                </div>
                            </div>
                            </fieldset>
                            <br>
                            <input type="submit" style="width: 100%;height: auto;font-size: 18px;" class="btn btn-primary" value="Kirim Permohonan">
                        </form>
                        <br>
                        <small>
                            <b>Keterangan:</b> <br>
                            * Diisi oleh petugas berdasarkan nomor registrasi permohonan informasi publik<br>
                            ** Pilih salah satu dengan memberi tanda centang (Y)<br>
                            *** Centang yang dipilih<br>
                        </small>
						</div>
					</div>
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