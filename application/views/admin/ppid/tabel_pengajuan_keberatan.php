<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets_portal/img/karsa700.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

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
					PPID
					<small>PPID RS Karsa Husada</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-book"></i> PPID</a></li>
					<li class="active">Tabel</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<!-- /.col -->
					<!-- /.col -->
				</div>

				<div class="row">
					<div class="col-xs-12">
						<!-- /.box -->

						<?php
						$flash_data = $this->session->flashdata();
						if (isset($flash_data["success"])) { ?>
							<div class="alert alert-success alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i> Berhasil!</h4>
								<?php echo $flash_data["success"]; ?>
							</div>
						<?php } elseif (isset($flash_data["delete"])) { ?>
							<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-trash"></i> Berhasil!</h4>
								<?php echo $flash_data["delete"]; ?>
							</div>
						<?php } elseif (isset($flash_data["update"])) { ?>
							<div class="alert alert-warning alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-files-o"></i> Berhasil!</h4>
								<?php echo $flash_data["update"]; ?>
							</div>
						<?php } ?>

						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Tabel PENGADUAN PPID</h3>
								<br><br>
								<!-- <button type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#modal-default" style="width: 100%">Tambah Data <span
										class="fa fa-plus-circle"></span></button>
								<br> -->
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>
												<center>NO</center>
											</th>
											<th>
												<center>Tgl Pengajuan</center>
											</th>
											<th>
												<center>No Registrasi</center>
											</th>
											<th>
												<center>No Permohonan</center>
											</th>
											<th>
												<center>Alasan</center>
											</th>
											<th>
												<center>Nama</center>
											</th>
											<th>
												<center>Alamat</center>
											</th>
											<th>
												<center>No Telp</center>
											</th>
											<th>
												<center>Pekerjaan</center>
											</th>
											<th>
												<center>Nama Kuasa</center>
											</th>
											<th>
												<center>Alamat</center>
											</th>
											<th>
												<center>No Telp</center>
											</th>
											<th>
												<center>Alasan Keberatan</center>
											</th>
											<th>
												<center>Kasus Posisi</center>
											</th>
											<th>
												<center>Tanggal Tanggapan</center>
											</th>
											<th>
												<center>Action</center>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1;
										foreach ($ppid->result() as $row) { ?>
											<tr>
												<td>
													<center> <?php echo $no++; ?></center>
												</td>
												<!-- <td><?php echo date('d-m-Y H:i:s', strtotime($row->date_created)); ?></td> -->
												<td>
													<?php echo $row->tglPengajuan; ?>
												</td>
												<td>
													<?php echo $row->noRegisKeberatan; ?>
												</td>
												<td>
													<?php echo $row->noPermohonan; ?>
												</td>
												<td>
													<?php echo $row->alasanPermohonan; ?>
												</td>
												<td>
													<?php echo $row->namaPemohon; ?>
												</td>
												<td>
													<?php echo $row->alamatPemohon; ?>
												</td>
												<td>
													<?php echo $row->notelpPemohon; ?>
												</td>
												<td>
													<?php echo $row->pekerjaanPemohon; ?>
												</td>
												<td>
													<?php echo $row->namaKuasa; ?>
												</td>
												<td>
													<?php echo $row->alamatKuasa; ?>
												</td>
												<td>
													<?php echo $row->notelpKuasa; ?>
												</td>
												<td>
													<?php echo $row->alasan; ?>
												</td>
												<td>
													<?php echo $row->posisi; ?>
												</td>
												<td>
													<?php echo $row->hari; ?>
												</td>
												<td>
													<center>
														<button class="btn btn-warning" data-toggle="modal" data-target="#modal-detail" onclick="getdetail('<?php echo $row->kdPengajuan; ?>');">View</button>
														<!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-<?php echo $row->kdPermohonan; ?>">Hapus</button> -->
													</center>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>

		<style type="text/css">
			.modal-dialog {
				width: 90%;
				margin: 30px auto;
			}
		</style>
		<div class="modal fade" id="modal-detail">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Detail Pengaduan PPID</h4>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/ppid/save'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Pemohon</label>
										<input type="text" name="judul" class="form-control" id="nama_pemohon" placeholder="Nama Pemohon">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Alamat Pemohon</label>
										<input type="text" name="judul" class="form-control" id="alamat_pemohon" placeholder="Alamat Pemohon">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">No Telp/Email Pemohon</label>
										<input type="text" name="judul" class="form-control" id="notelp_pemohon" placeholder="No Telp/Email Pemohon">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Pekerjaan Pemohon</label>
										<input type="text" name="judul" class="form-control" id="pekerjaan_pemohon" placeholder="Pekerjaan Pemohon">
									</div>
									<div class="form-group">
										<center>
											<div id="set_gambar"></div>
										</center>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Kuasa Pemohon</label>
										<input type="text" name="judul" class="form-control" id="nama_kuasa_pemohon" placeholder="Nama Kuasa Pemohon">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Alamat Kuasa Pemohon</label>
										<input type="text" name="judul" class="form-control" id="alamat_kuasa_pemohon" placeholder="Alamat Kuasa Pemohon">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">No Telp Kuasa Pemohon</label>
										<input type="text" name="judul" class="form-control" id="notelp_kuasa_pemohon" placeholder="No Telp/Email Kuasa Pemohon">
									</div>

								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Alasan Keberatan</label>
										<textarea class="form-control" name="deskripsi" id="alasan" rows="4" cols="4"></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">KASUS POSISI</label>
										<textarea class="form-control" name="deskripsi" id="posisi" rows="4" cols="4"></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">HARI / TANGGAL TANGGAPAN ATAS KEBERATAN AKAN DIBERIKAN</label>
										<textarea class="form-control" name="deskripsi" id="hari" rows="4" cols="4"></textarea>
									</div>
								</div>
								<!-- /.box-body -->
							</div>
						</div>
						<div class="modal-footer">
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<style type="text/css">
			.modal-dialog2 {
				width: 30%;
				margin: 30px auto;
			}
		</style>

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
	<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- DataTables -->
	<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
	</script>
	<!-- SlimScroll -->
	<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

	<script src="<?php echo base_url() ?>assets/bower_components/ckeditor/ckeditor.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- page script -->
	<script>
		function getdetail(kdPengajuan) {
			$.ajax({
				url: "<?php echo base_url(); ?>admin/ppid/getdetail_pengajuan_keberatan",
				method: "POST",
				async: false,
				data: {
					kdPengajuan: kdPengajuan
				},
				dataType: 'json',
				success: function(data) {
					$('#nama_pemohon').val(data.namaPemohon);
					$('#alamat_pemohon').val(data.alamatPemohon);
					$('#notelp_pemohon').val(data.notelpPemohon);
					$('#pekerjaan_pemohon').val(data.pekerjaanPemohon);
					$('#nama_kuasa_pemohon').val(data.namaKuasa);
					$('#alamat_kuasa_pemohon').val(data.alamatKuasa);
					$('#notelp_kuasa_pemohon').val(data.notelpKuasa);
					$('#alasan').val(data.alasan);
					$('#posisi').val(data.posisi);
					$('#hari').val(data.hari);
					var now = new Date(data.tglPengajuan);
					var dates = now.toLocaleDateString('sv-SE');

					$('#set_gambar').html(`<img style="width:auto;height:auto;" src="http://103.35.153.52/images/PPID/pengajuan/` + dates + `/` + data.kdPengajuan + `/` + data.identitas + `" alt="" srcset="">`);
				}
			});
		}
		$(function() {
			$('#example1').DataTable()
			$('#example2').DataTable({
				'paging': true,
				'lengthChange': false,
				'searching': false,
				'ordering': true,
				'info': true,
				'autoWidth': false
			})
		})
	</script>
</body>

</html>