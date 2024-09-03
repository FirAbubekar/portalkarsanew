<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets_portal/img/karsa700.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- daterange picker -->
	<link rel="stylesheet"
		href="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet"
		href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/all.css">
	<!-- Bootstrap Color Picker -->
	<link rel="stylesheet"
		href="<?php echo base_url()?>assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
	<!-- Bootstrap time Picker -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- Google Font -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style type="text/css">
	.content-wrapper {
		background-color:

			#ecf0f5;
		z-index: 800;
		height: auto;
	}
</style>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<?php $this->load->view('admin/template/modul_head'); ?>
		<!-- Left side column. contains the logo and sidebar -->
		<?php $this->load->view('admin/template/modul_aside_menu'); ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Form Tambah Berita
					<small>RS Karsa Husada</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-bell-o"></i> Informasi</a></li>
					<li><a href="#">Berita</a></li>
					<li class="active">Form Edit Berita</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">

				<!-- SELECT2 EXAMPLE -->
				<div class="box box-default">
					<div class="box-header with-border">
						<h3 class="box-title">Form Tambah Berita</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i
									class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i
									class="fa fa-remove"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<form enctype="multipart/form-data" action="<?php echo base_url('admin/ppid/update_ppid/'.$ppid->id_ppid); ?>"
									method="post">
									<div class="form-group">
										<label>Kategori</label>
                                        <input type="hidden" name="kategori" value="<?php echo $ppid->kategori;?>"class="form-control" id="">
										<input type="text" name="" disabled value="<?php echo $ppid->kategori;?>"class="form-control" id="">
									</div>
									<div class="form-group">
										<label>Sub Kategori</label>
                                        <?php if($ppid->kategori=="Regulasi"){ ?>
                                        <select name="subkategori" class="form-control">
                                        <option value="<?php echo $ppid->subkategori; ?>"><?php echo str_replace('_',' ',$ppid->subkategori); ?></option>
                                            <option value="PEDUM">PEDUM</option>
                                            <option value="SK_TIM">SK TIM</option>
                                            <option value="SOP_ALUR">SOP & Alur</option>
                                            <option value="HAK_PEMOHON">Hak Pemohon</option>
                                            <option value="REGULASI">Regulasi</option>
									    </select>
                                        <?php }if($ppid->kategori=="Profil"){ ?>
                                            <select name="subkategori" class="form-control">
                                            <option value="<?php echo $ppid->subkategori; ?>"><?php echo str_replace('_',' ',$ppid->subkategori); ?></option>
                                                <option value="SEJARAH">Sejarah</option>
                                                <option value="VISI_MISI">Visi Misi</option>
                                                <option value="MAKLUMAT">Maklumat</option>
                                                <option value="STRUKTUR_PPID">Struktur PPID</option>
                                                <option value="TUGAS_DAN_FUNSGI_PPID">Tugas dan Fungsi PPID</option>
                                            </select>
                                        <?php }if($ppid->kategori=="Pelayanan_Informasi"){ ?>
                                            <select name="subkategori" class="form-control">
                                            <option value="<?php echo $ppid->subkategori; ?>"><?php echo str_replace('_',' ',$ppid->subkategori); ?></option>
                                                <option value="PERMOHONAN_INFORMASI">Permohonan Informasi</option>
                                                <option value="PENGAJUAN_KEBERATAN">Pengajuan Keberatan</option>
                                                <option value="JADWAL_PELAYANAN_PPID">Jadwal Pelayanan PPID</option>
                                            </select>
                                        <?php }if($ppid->kategori=="Informasi_Publik"){ ?>
                                            <select name="subkategori" class="form-control">
                                            <option value="<?php echo $ppid->subkategori; ?>"><?php echo str_replace('_',' ',$ppid->subkategori); ?></option>
                                                <option value="BERKALA">Berkala</option>
                                                <option value="SERTA_MERTA">Serta Merta</option>
                                                <option value="SETIAP_SAAT">Setiap Saat</option>
                                                <option value="DIKECUALIKAN">Dikecualikan</option>
                                                <option value="LAPORAN_AKSES_INFORMASI">Laporan Informasi Publik</option>
                                            </select>
                                            <?php }?>
										<!-- <input type="text" name="judul" value="<?php echo $ppid->subkategori;?>"
											class="form-control" id=""> -->
									</div>
                                    <div class="form-group">
										<label>Judul</label>
										<input type="text" name="judul" value="<?php echo $ppid->judul;?>"
											class="form-control" id="">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Deskripsi</label>
										<textarea class="texteditor" name="deskripsi" rows="10"
											cols="80"><?php echo $ppid->deskripsi;?></textarea>
									</div>
									<div class="form-group">
										<label>Gambar</label>
										<input type="file" name="gambar_edit" accept="application/pdf, image/jpg, image/png">
									</div>									
									<div class="form-group">
										<label>Publish</label>
										<select class="form-control" name="status" style="width: 100%;">
											<option value="<?php echo $ppid->status; ?>">
												<?php echo $ppid->status; ?></option>
											<option value="Aktif">Aktif</option>
											<option value="Tidak Aktif">Tidak Aktif</optioan>
										</select>
									</div>
									<!-- /.form-group -->
									<input type="submit" name="submit" value="Update Berita" class="btn btn-primary" style="width:100%;" id="">
                                    <div style="padding-bottom: 50px;"></div>
									<?php if($ppid->file!=null){  $lokasi = strtolower(str_replace('_','',$ppid->kategori));  ?>
                                        <input type="hidden" name="gambar1" class="form-control" value="<?php echo $ppid->file; ?>" placeholder="Masukan Type">
                                        <?php if(substr($ppid->file, -4)==".pdf"){ ?>
                                            <embed src="<?php echo base_url('file/ppid/' . $lokasi . '/' . $ppid->file); ?>" style="width:100%;height:700px;" />
                                        <?php }else{?>
										<div class="form-group">
										<label>Gambar Berita</label>
										<center><img style="width:30%;height:50%" src="<?php echo base_url('file/ppid/'.$lokasi.'/'.$ppid->file); ?>" alt=""></center>
                                        <?php } ?>
									</div>
									<?php } ?>
									<!-- /.form-group -->
							</div>

						</div>
						<!-- /.row -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						* pilih tombol 'Update PPID' Untuk Menyimpan Hasil Perubahan Berita ...
					</div>
					</form>
				</div>
				<!-- /.box -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Created By </b> SIRS
			</div>
			<strong>Copyright &copy; 2020 <a href="http://rsukarsahusadabatu.jatimprov.go.id/">RSU Karsa Husada</a>.</strong> All rights
			reserved.
		</footer>

		<!-- Control Sidebar -->
		<?php $this->load->view('admin/template/modul_setting'); ?>
		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Select2 -->
	<script src="<?php echo base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
	<!-- InputMask -->
	<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.js"></script>
	<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url()?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap datepicker -->
	<script
		src="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
	</script>
	<!-- bootstrap color picker -->
	<script
		src="<?php echo base_url()?>assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js">
	</script>
	<!-- bootstrap time picker -->
	<script src="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<!-- SlimScroll -->
	<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- iCheck 1.0.1 -->
	<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>

	<!-- <script src="<?php echo base_url()?>assets/bower_components/ckeditor/ckeditor.js"></script> -->
	<!-- Page script -->
	<!-- <script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery-3.1.1.min.js"></script>
	<!-- panggil ckeditor.js -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
	<!-- panggil adapter jquery ckeditor -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/ckeditor/adapters/jquery.js"></script>
	<!-- setup selector -->
	<script type="text/javascript">
		$('textarea.texteditor').ckeditor();
	</script>
	<!-- <script>
		$(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editor')
			//bootstrap WYSIHTML5 - text editor
			$('.textarea').wysihtml5()
		})
	</script> -->

	<script>
		$(function () {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Datemask dd/mm/yyyy
			$('#datemask').inputmask('dd/mm/yyyy', {
				'placeholder': 'dd/mm/yyyy'
			})
			//Datemask2 mm/dd/yyyy
			$('#datemask2').inputmask('mm/dd/yyyy', {
				'placeholder': 'mm/dd/yyyy'
			})
			//Money Euro
			$('[data-mask]').inputmask()

			//Date range picker
			$('#reservation').daterangepicker()
			//Date range picker with time picker
			$('#reservationtime').daterangepicker({
				timePicker: true,
				timePickerIncrement: 30,
				locale: {
					format: 'MM/DD/YYYY hh:mm A'
				}
			})
			//Date range as a button
			$('#daterange-btn').daterangepicker({
					ranges: {
						'Today': [moment(), moment()],
						'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
						'Last 7 Days': [moment().subtract(6, 'days'), moment()],
						'Last 30 Days': [moment().subtract(29, 'days'), moment()],
						'This Month': [moment().startOf('month'), moment().endOf('month')],
						'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
							'month').endOf(
							'month')]
					},
					startDate: moment().subtract(29, 'days'),
					endDate: moment()
				},
				function (start, end) {
					$('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
						'MMMM D, YYYY'))
				}
			)

			//Date picker
			$('#datepicker').datepicker({
				autoclose: true
			})

			//iCheck for checkbox and radio inputs
			$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
				checkboxClass: 'icheckbox_minimal-blue',
				radioClass: 'iradio_minimal-blue'
			})
			//Red color scheme for iCheck
			$('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
				checkboxClass: 'icheckbox_minimal-red',
				radioClass: 'iradio_minimal-red'
			})
			//Flat red color scheme for iCheck
			$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
				checkboxClass: 'icheckbox_flat-green',
				radioClass: 'iradio_flat-green'
			})

			//Colorpicker
			$('.my-colorpicker1').colorpicker()
			//color picker with addon
			$('.my-colorpicker2').colorpicker()

			//Timepicker
			$('.timepicker').timepicker({
				showInputs: false
			})
		})
	</script>
</body>

</html>
