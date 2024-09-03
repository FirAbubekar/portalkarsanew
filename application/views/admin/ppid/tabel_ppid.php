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
	<!-- DataTables -->
	<link rel="stylesheet"
		href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<?php $this->load->view('admin/template/modul_head');?>
		<!-- Left side column. contains the logo and sidebar -->
		<?php $this->load->view('admin/template/modul_aside_menu');?>

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
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Total PPID</span>
								<span class="info-box-number"><?php echo $total; ?></span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->

					<!-- fix for small devices only -->
					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">PPID Aktif</span>
								<span class="info-box-number"><?php echo $aktif; ?></span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-red"><i class="fa fa-user-times"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">PPID Non Aktif</span>
								<span class="info-box-number"><?php echo $nonaktif; ?></span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
				</div>

				<div class="row">
					<div class="col-xs-12">
						<!-- /.box -->

						<?php 
						$flash_data = $this->session->flashdata();
						if(isset($flash_data["success"])){ ?>
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-check"></i> Berhasil!</h4>
							<?php echo $flash_data["success"]; ?>
						</div>
						<?php } elseif(isset($flash_data["delete"])){ ?>
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-trash"></i> Berhasil!</h4>
							<?php echo $flash_data["delete"]; ?>
						</div>
						<?php } elseif(isset($flash_data["update"])){ ?>
							<div class="alert alert-warning alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-files-o"></i> Berhasil!</h4>
							<?php echo $flash_data["update"]; ?>
						</div>
						<?php } ?>

						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Tabel PPID</h3>
								<br><br>
								<center>
								<div class="col-md-2">
									<button type="button" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#modal-regulasi" >Tambah Regulasi <span class="fa fa-plus-circle"></span></button>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-info" style="width: 100%;" data-toggle="modal" data-target="#modal-profil" >Tambah Profil <span class="fa fa-plus-circle"></span></button>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-warning" style="width: 100%;" data-toggle="modal" data-target="#modal-pelinfo" >Tambah Pelayanan Informasi <span class="fa fa-plus-circle"></span></button>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-danger" style="width: 100%;" data-toggle="modal" data-target="#modal-infopub" >Tambah Informasi Publik <span class="fa fa-plus-circle"></span></button>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-success" style="width: 100%;" data-toggle="modal" data-target="#modal-galeri" >Tambah Galeri <span class="fa fa-plus-circle"></span></button>
								</div>
								</center>
								<br>
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
												<center>Kategori</center>
											</th>
											<th>
												<center>Sub-Kategori</center>
											</th>
											<th>
												<center>Judul</center>
											</th>
											<th>
												<center>File</center>
											</th>
											<th>
												<center>Status</center>
											</th>
											<th>
												<center>Action</center>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($ppid->result() as $row) { ?>
										<tr>
											<td>
												<center> <?php echo $no++; ?></center>
											</td>
											<td><?php echo $row->kategori; ?></td>
											<td><?php echo $row->subkategori; ?></td>
											<td><?php echo $row->judul; ?></td>
											<td>
												<?php echo $row->file; ?>
											</td>
											<td>
												<center><?php echo $row->status; ?></center>
											</td>
											<td>
												<center>
												<?php if($row->kategori=="Galeri"){}else{?>
													<a href="<?php echo base_url('admin/ppid/edit_ppid/'.$row->id_ppid);?>" class="btn btn-warning">Edit</a>
													<?php }?>
													<!-- <button class="btn btn-warning" data-toggle="modal" data-target="#modal-edit-<?php echo $row->id_ppid; ?>">Edit</button> -->
													<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-<?php echo $row->id_ppid; ?>">Delete</button>
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
		<div class="modal fade" id="modal-regulasi">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Data Regulasi</h4>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/ppid/save_regulasi'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputFile">Kategori: </label>
									<select name="kategori_regulasi" class="form-control">
										<option value="PEDUM">PEDUM</option>
										<option value="SK_TIM">SK TIM</option>
										<option value="SOP_ALUR">SOP & Alur</option>
										<option value="HAK_PEMOHON">Hak Pemohon</option>
										<option value="REGULASI">Regulasi</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Judul</label>
									<input type="text" name="judul_regulasi" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label>
									<textarea id="editor1" name="deskripsi_regulasi" rows="10" cols="80"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Dokumen File</label>
									<input type="file" name="gambar_regulasi" accept="application/pdf, image/jpg, image/png">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Aktif</label>
									<select name="status_regulasi" class="form-control">
										<option value="Aktif">Aktif</option>
										<option value="Tidak Aktif">Non Aktif</option>
									</select>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Save PPID" style="width: 100%"
								name="submit">
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-profil">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Data Profil</h4>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/ppid/save_profil'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputFile">Kategori: </label>
									<select name="kategori_profil" class="form-control">
										<option value="SEJARAH">Sejarah</option>
										<option value="VISI_MISI">Visi Misi</option>
										<option value="MAKLUMAT">Maklumat</option>
										<option value="STRUKTUR_PPID">Struktur PPID</option>
										<option value="TUGAS_DAN_FUNSGI_PPID">Tugas dan Fungsi PPID</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Judul</label>
									<input type="text" name="judul_profil" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label>
									<textarea id="editor2" name="deskripsi_profil" rows="10" cols="80"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Dokumen File</label>
									<input type="file" name="gambar_profil" accept="application/pdf, image/jpg, image/png">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Aktif</label>
									<select name="status_profil" class="form-control">
										<option value="Aktif">Aktif</option>
										<option value="Tidak Aktif">Non Aktif</option>
									</select>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Save PPID" style="width: 100%"
								name="submit">
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-pelinfo">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Data Pelayanan Informasi</h4>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/ppid/save_pelinfo'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputFile">Kategori: </label>
									<select name="kategori_pelinfo" class="form-control">
										<option value="PERMOHONAN_INFORMASI">Permohonan Informasi</option>
										<option value="PENGAJUAN_KEBERATAN">Pengajuan Keberatan</option>
										<option value="JADWAL_PELAYANAN_PPID">Jadwal Pelayanan PPID</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Judul</label>
									<input type="text" name="judul_pelinfo" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label>
									<textarea id="editor3" name="deskripsi_pelinfo" rows="10" cols="80"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Dokumen File</label>
									<input type="file" name="gambar_pelinfo" accept="application/pdf, image/jpg, image/png">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Aktif</label>
									<select name="status_pelinfo" class="form-control">
										<option value="Aktif">Aktif</option>
										<option value="Tidak Aktif">Non Aktif</option>
									</select>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Save PPID" style="width: 100%"
								name="submit">
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-infopub">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Data Informasi Publik</h4>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/ppid/save_infopub'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputFile">Kategori: </label>
									<select name="kategori_infopub" class="form-control">
										<option value="BERKALA">Berkala</option>
										<option value="SERTA_MERTA">Serta Merta</option>
										<option value="SETIAP_SAAT">Setiap Saat</option>
										<option value="DIKECUALIKAN">Dikecualikan</option>
										<option value="LAPORAN_AKSES_INFORMASI">Laporan Informasi Publik</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Judul</label>
									<input type="text" name="judul_infopub" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label>
									<textarea id="editor4" name="deskripsi_infopub" rows="10" cols="80"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Dokumen File</label>
									<input type="file" name="gambar_infopub" accept="application/pdf, image/jpg, image/png">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Aktif</label>
									<select name="status_infopub" class="form-control">
										<option value="Aktif">Aktif</option>
										<option value="Tidak Aktif">Non Aktif</option>
									</select>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Save PPID" style="width: 100%"
								name="submit">
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<div class="modal fade" id="modal-galeri">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Galeri</h4>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/ppid/save_galeri'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<input type="text" name="kategori_galeri" class="form-control" value="GALERI" placeholder="Masukan Judul">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul</label>
									<input type="text" name="judul_ppid" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label>
									<textarea id="editor5" name="deskripsi_ppid" rows="10" cols="80"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Dokumen File/Gambar</label>
									<input multiple="" type="file" name="gambar_ppid[]">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Aktif</label>
									<select name="status_ppid" class="form-control">
										<option value="Aktif">Aktif</option>
										<option value="Tidak Aktif">Non Aktif</option>
									</select>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Save PPID" style="width: 100%"
								name="submit">
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<?php foreach ($ppid->result() as $delete) {?>
		<div class="modal fade" id="modal-delete-<?php echo $delete->id_ppid; ?>">
			<div class="modal-dialog2">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Delete Data PPID</h4>
					</div>
					<div class="modal-body">
						<p>Apakah Anda Yakin Akan Menghapus Data PPID Dengan Judul :
							<b><?php echo $delete->judul; ?>&hellip;</b></p>
					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
						<?php 
						if($delete->kategori=="Galeri"){

						?>
						<a href="<?php echo base_url('admin/ppid/delete_galeri/'.$delete->id_ppid); ?>"
							class="btn btn-danger pull-left">Delete File</a>
							<?php }else{?>
								<a href="<?php echo base_url('admin/ppid/delete/'.$delete->id_ppid.'/'.$delete->kategori); ?>"
							class="btn btn-danger pull-left">Delete File</a>
							<?php } ?>
						<!-- <button type="button" class="btn btn-danger pull-left">Save changes</button> -->
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<?php } ?>


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
	<!-- DataTables -->
	<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
	</script>
	<!-- SlimScroll -->
	<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>

	<script src="<?php echo base_url()?>assets/bower_components/ckeditor/ckeditor.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script>
		$(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editor1')
			CKEDITOR.replace('editor2')
			CKEDITOR.replace('editor3')
			CKEDITOR.replace('editor4')
			CKEDITOR.replace('editor5')
			//bootstrap WYSIHTML5 - text editor
			$('.textarea').wysihtml5()
		})
	</script>
	<?php foreach ($ppid->result() as $editor) { ?>
	<script>
		$(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editor<?php echo $editor->id; ?>')
			//bootstrap WYSIHTML5 - text editor
			$('.textarea').wysihtml5()
		})
	</script>
	<?php } ?>
	<!-- page script -->
	<script>
		$(function () {
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
