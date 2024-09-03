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
					Informasi
					<small>Mutu RS Karsa Husada</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">Informasi</a></li>
					<li class="active">Mutu</li>
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
								<span class="info-box-text">Total Alur</span>
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
								<span class="info-box-text">Alur Aktif</span>
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
								<span class="info-box-text">Alur Non Aktif</span>
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
								<h3 class="box-title">Tabel Mutu</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<button type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#modal-default" style="width: 100%">Tambah Data <span
										class="fa fa-plus-circle"></span></button>
								<br><br>
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>
												<center>NO</center>
											</th>
											<th>
												<center>Alur</center>
											</th>
											<th>
												<center>Gambar</center>
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
										<?php $no=1; foreach ($alur->result() as $row) { ?>
										<tr>
											<td>
												<center> <?php echo $no++; ?></center>
											</td>
											<td><?php echo $row->alur; ?></td>
											<td> <?php echo $row->gambar; ?></td>
											<td>
												<center>
													<?php if($row->status==1){ echo "<span class='label label-success'>Aktif</span>";; } elseif($row->status==0){ echo "<span class='label label-warning'>Non-Aktif</span>"; } ?>
												</center>
											</td>
											<td>
												<center>
													<button class="btn btn-warning" data-toggle="modal"
														data-target="#modal-edit-<?php echo $row->id; ?>">Edit</button>
													<button type="button" class="btn btn-danger" data-toggle="modal"
														data-target="#modal-delete-<?php echo $row->id; ?>">Delete</button>
												</center>
											</td>
										</tr>
										<?php } ?>
									</tbody>
									<tfoot>
										<tr>
											<th>
												<center>NO</center>
											</th>
											<th>
												<center>Alur</center>
											</th>
											<th>
												<center>Gambar</center>
											</th>
											<th>
												<center>Status</center>
											</th>
											<th>
												<center>Action</center>
											</th>
										</tr>
									</tfoot>
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
		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Data Alur</h4>
					</div>
					<form enctype="multipart/form-data" method="post"
						action="<?php echo base_url('admin/pelayanan/save_alur'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Alur</label>
									<input type="text" name="alur" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Alur">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Gambar Alur</label>
									<input type="file" name="gambar">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Status</label>
									<select name="status" class="form-control">
										<option value="1">Aktif</option>
										<option value="0">Non Aktif</option>
									</select>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Save Alur" style="width: 100%"
								name="submit">
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

		<?php foreach ($alur->result() as $edit) { ?>
		<div class="modal fade" id="modal-edit-<?php echo $edit->id; ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Data Alur</h4>
					</div>
					<form enctype="multipart/form-data" method="post"
						action="<?php echo base_url('admin/pelayanan/edit_alur/'.$edit->id); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Alur</label>
									<input type="text" name="alur" class="form-control" value="<?php echo $edit->alur?>"
										placeholder="Masukan Alur">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Gambar File</label>
									<input type="file" name="gambar">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Aktif</label>
									<select name="status" class="form-control">
										<option value="<?php echo $edit->status?>">
											<?php
											if ($row -> status == 1) {
												echo "Aktif";
											}
											elseif($row -> status == 0) {
												echo "Non Aktif";
											} ?>
										</option>
										<option value="1">Aktif</option>
										<option value="0">Non Aktif</option>
									</select>
								</div>
								<?php if($edit->gambar!=null){?>
								<div class="form-group">
									<input type="text" name="gambar1" class="form-control"
										value="<?php echo $edit->alur?>" placeholder="Masukan Type">
									<label for="exampleInputPassword1">Gambar</label>
									<center><img style="width:30%;height:45%;"
											src="<?php echo base_url('file/alur/'.$edit->gambar);?>" alt=""></center>
								</div>
								<?php } ?>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Update Alur" style="width: 100%"
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
		<style type="text/css">
			.modal-dialog2 {
				width: 30%;
				margin: 30px auto;
			}
		</style>
		<?php foreach ($alur->result() as $delete) {?>
		<div class="modal fade" id="modal-delete-<?php echo $delete->id; ?>">
			<div class="modal-dialog2">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Delete Data Profil</h4>
					</div>
					<div class="modal-body">
						<p>Apakah Anda Yakin Akan Menghapus Data Alur:
							<b><?php echo $delete->alur; ?>&hellip;</b></p>
					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
						<a href="<?php echo base_url('admin/pelayanan/delete_alur/'.$delete->id); ?>"
							class="btn btn-danger pull-left">Delete Alur</a>
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
			<strong>Copyright &copy; 2020 <a href="http://rsukarsahusadabatu.jatimprov.go.id/">RSU Karsa Husada</a>.</strong> All rights reserved.
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