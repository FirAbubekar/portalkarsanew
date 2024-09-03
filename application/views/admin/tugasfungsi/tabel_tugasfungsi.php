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
<style>
	.example-modal .modal {
		position: relative;
		top: auto;
		bottom: auto;
		right: auto;
		left: auto;
		display: block;
		z-index: 1;
	}

	.example-modal .modal {
		background: transparent !important;
	}
</style>
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
					Profil
					<small>Visi & Misi RS Karsa Husada</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-university"></i> Profil</a></li>
					<li><a href="#">Tugas & Fungsi</a></li>
					<li class="active">Tabel</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
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
								<h3 class="box-title">Tabel Tugas & Fungsi</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#modal-default" style="width: 100%">Tambah Data Tugas & Fungsi <span
								class="fa fa-plus-circle"></span></button>
								<br><br>
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>
												<center>NO</center>
											</th>
											<th>
												<center>ID</center>
											</th>
											<th>
												<center>Judul</center>
											</th>
                                            <th>
												<center>Status</center>
											</th>
											<th>
												<center>
													<center>Action</center>
												</center>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($tugasfungsi->result() as $row) { ?>
											<tr>
												<td>
													<center> <?php echo $no++; ?></center>
												</td>
                                                <td>
													<center> <?php echo $row->id_tugasfungsi; ?></center>
												</td>
												<td>
													<center> <?php echo $row->subjudul; ?></center>
												</td>
                                                <td>
													<center> <?php echo $row->status; ?></center>
												</td>
                                                <td>
													<center>
														<button class="btn btn-success" data-toggle="modal"
														data-target="#modal-view-<?php echo $row->id_tugasfungsi; ?>">View</button>
														<button class="btn btn-warning	" data-toggle="modal"
														data-target="#modal-edit-<?php echo $row->id_tugasfungsi; ?>">Edit</button>
														<button type="button" class="btn btn-danger" data-toggle="modal"
														data-target="#modal-delete-<?php echo $row->id_tugasfungsi; ?>">Delete</button>
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
				<!-- /.col -->
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
		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Tambah Data Tugas & Fungsi</h4>
						</div>
						<form method="post" action="<?php echo base_url('admin/profil/save_tugasfungsi'); ?>" role="form">
							<div class="modal-body">
								<div class="box-body">
									<div class="form-group">
										<label for="exampleInputEmail1">Judul</label>
										<input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Deskripsi</label>
										<textarea class="texteditor" name="deskripsi" rows="10" cols="80"></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputFile">Aktif</label>
										<select name="status" class="form-control">
											<option value="AKTIF">Aktif</option>
											<option value="TIDAK AKTIF">Non Aktif</option>
										</select>
									</div>
								</div>
								<!-- /.box-body -->
							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-primary" value="Save Tugas & Fungsi" style="width: 100%"
								name="submit">
								<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
							</div>
						</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<?php foreach ($tugasfungsi->result() as $edit){ ?>
				<div class="modal fade" id="modal-edit-<?php echo $edit->id_tugasfungsi; ?>">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Edit Data Tugas & Fungsi</h4>
								</div>
								<form method="post" action="<?php echo base_url('admin/profil/edit_tugasfungsi/'.$edit->id_tugasfungsi); ?>"
									role="form">
									<div class="modal-body">
										<div class="box-body">
											<div class="form-group">
												<label for="exampleInputEmail1">Judul</label>
												<input type="text" name="judul" class="form-control"
												value="<?php echo $edit->subjudul; ?>" id="exampleInputEmail1"
												placeholder="Masukan Judul">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Deskripsi</label>
												<textarea class="texteditor<?php echo $edit->id_tugasfungsi; ?>" name="deskripsi" rows="10" cols="80">
													<?php echo $edit->deskripsi; ?>
												</textarea>
											</div>
											<div class="form-group">
												<label for="exampleInputFile">Aktif</label>
												<select name="status" class="form-control">
													<option value="<?php echo $edit->status; ?>">
														<?php echo $edit->status; ?>
													</option>
													<option value="AKTIF">Aktif</option>
													<option value="TIDAK AKTIF">Non Aktif</option>
												</select>
											</div>
										</div>
										<!-- /.box-body -->
									</div>

									<div class="modal-footer">
										<input type="submit" class="btn btn-warning" value="Update Tugas & Fungsi" style="width: 100%"
										name="submit">
										<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
									</div>
								</form>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
				<?php } ?>

				<?php foreach ($tugasfungsi->result() as $view){ ?>
					<div class="modal fade" id="modal-view-<?php echo $view->id_tugasfungsi; ?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Tambah Data Tugas & Fungsi</h4>
									</div>
									<form method="post" action="<?php echo base_url('admin/profil/save_visimisi'); ?>" role="form">
										<div class="modal-body">
											<div class="box-body">
												<div class="form-group">
													<label>
														<h2><?php echo $view->subjudul; ?></h2>
													</label><br>

													Status : <?php if($view->status=="0")echo "Non-Aktif";else echo "Aktif"; ?>
												</div>
												<div class="form-group">
													<?php echo $view->deskripsi; ?>
												</div>
											</div>
											<!-- /.box-body -->
										</div>
										<div class="modal-footer">
											<!-- <input type="submit" class="btn btn-primary" value="SIMPAN" style="width: 100%" name="submit"> -->
											<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
										</div>
									</form>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
					<?php } ?>
					<style type="text/css">
						.modal-dialog2 {
							width: 30%;
							margin: 30px auto;
						}
					</style>
					<?php foreach ($tugasfungsi->result() as $delete) {?>
						<div class="modal fade" id="modal-delete-<?php echo $delete->id_tugasfungsi; ?>">
							<div class="modal-dialog2">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title"><b>Delete Data Tugas & Fungsi</b></h4>
										</div>
										<div class="modal-body">
											<p>Apakah Anda Yakin Akan Menghapus Data Tugas & Fungsi Dengan Judul :
												<b><?php echo $delete->subjudul; ?>&hellip;</b></p>
											</div>
											<div class="modal-footer">
												<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
												<a href="<?php echo base_url('admin/profil/delete_tugasfungsi/'.$delete->id_tugasfungsi); ?>"
													class="btn btn-danger pull-left">Delete Tugas & Fungsi</a>
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
		<!-- page script -->

		<script type="text/javascript" src="<?php echo base_url()?>assets/jquery/jquery-3.1.1.min.js"></script>
	<!-- panggil ckeditor.js -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
	<!-- panggil adapter jquery ckeditor -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/ckeditor/adapters/jquery.js"></script>
	<!-- setup selector -->
	<script type="text/javascript">
		$('textarea.texteditor').ckeditor();
	</script>

	<?php foreach ($tugasfungsi->result() as $editor) { ?>
		<script type="text/javascript">
		$('textarea.texteditor<?php echo $editor->id_tugasfungsi; ?>').ckeditor();
	</script>
<?php } ?>

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