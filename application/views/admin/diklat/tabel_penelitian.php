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
					DIKLAT
					<small>PENELITIAN RS Karsa Husada</small>
				</h1>
				<ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-book"></i>DIKLAT</a></li>
					<li class="active">PENELITIAN</li>
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
								<span class="info-box-text">Total PENELITIAN</span>
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
								<span class="info-box-text">PENELITIAN Aktif</span>
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
								<span class="info-box-text">PENELITIAN Non Aktif</span>
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
								<h3 class="box-title">Tabel Diklat Penelitian</h3>
								<br><br>
								<center>
								<div class="col-md-12">
									<button type="button" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#modal-regulasi" >Tambah Penelitian <span class="fa fa-plus-circle"></span></button>
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
									<?php $no=1; foreach ($hasil as $row) { ?>
										<tr>
											<td>
												<center> <?php echo $no++; ?></center>
											</td>
											<td><?php echo $row->judul; ?></td>
											<td><?php echo $row->sub_judul; ?></td>
											<td><?php echo $row->google_drive; ?></td>
											<td>
												<?php echo $row->file_pendukung; ?>
											</td>
											<td>
												<center><?php echo $row->status; ?></center>
											</td>
											<td>
												<center>
                                                    <button type="button" class="btn btn-danger" onclick="delete_diklat('<?php echo $row->id_konten; ?>')">Delete</button>
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
						<h4 class="modal-title">Tambah Data Konten Diklat Penelitian</h4>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/diklat/save'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputFile">MENU: </label>
									<select name="menu" class="form-control">
										<option value="PENELITIAN">PENELITIAN</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Kategori: </label>
									<select name="kategori" class="form-control">
										<option value="KONTEN">KONTEN</option>
										<option value="ALUR">ALUR</option>
										<option value="OTHER">OTHER</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Judul</label>
									<input type="text" name="judul" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Sub Judul</label>
									<input type="text" name="subjudul" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Tanggal</label>
									<input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Tanggal">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Deskripsi</label>
									<textarea id="editor1" name="deskripsi" rows="10" cols="80"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Dokumen File</label>
									<input type="file" name="gambar[]" multiple="multiple" accept="application/pdf, image/jpg, image/png">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Google Drive</label>
									<input type="text" class="form-control" name="googledrive">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Aktif</label>
									<select name="status" class="form-control">
										<option value="Aktif">Aktif</option>
										<option value="Tidak Aktif">Non Aktif</option>
									</select>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Save Penelitian" style="width: 100%"
								name="submit">
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>


		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Created By </b> SIRS
			</div>
			<strong>Copyright &copy; 2020 <a href="http://rsukarsahusadabatu.jatimprov.go.id/">RSUD Karsa Husada</a>.</strong> All rights
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
        function delete_diklat(id_konten){
            $.ajax({
                url: "<?php echo base_url(); ?>admin/diklat/delete_konten",
                method: "POST",
                data: {
                    id_konten: id_konten
                },
                success: function(data) {
                    location.reload();
                }
            })
        }
        
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
