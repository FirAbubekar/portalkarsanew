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
		<style type="text/css">
			.content-wrapper {
				background-color:

				#ecf0f5;
				z-index: 800;
				height: auto;
			}
		</style>
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Pelayanan
					<small>Tarif RS Karsa Husada</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-recycle"></i> Pelayanan</a></li>
					<li><a href="#">Tarif</a></li>
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
								<h3 class="box-title">Tabel Tarif Instalasi Gawat Darurat</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#modal-default" style="width: 100%">Tambah Tarif IGD <span
								class="fa fa-plus-circle"></span></button>
								<br><br>
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>
												<center>NO</center>
											</th>
											<th>
												<center>Nama</center>
											</th>
											<th>
												<center>Jenis Pelayanan</center>
											</th>
											<th>
												<center>Tarif</center>
											</th>
											<th>
												<center>Action</center>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($igd->result() as $row) { ?>
											<tr>
												<td>
													<center> <?php echo $no++; ?></center>
												</td>
												<td>
													<?php echo $row->nama; ?>
												</td>
												<td>
													<?php echo $row->jenis_pelayanan; ?>
												</td>
												<td>
													<center> <?php echo $row->tarif; ?></center>
												</td>
												<td>
													<center>
														<center>
															<button type="button" class="btn btn-warning"
															data-toggle="modal"
															data-target="#modal-edit1-<?php echo $row->id; ?>">Edit
															<spanclass="fa fa-plus-circle"></span></button>
															<button type="button" class="btn btn-danger" data-toggle="modal"
															data-target="#modal-delete1-<?php echo $row->id; ?>">Delete
															<spanclass="fa fa-plus-circle"></span></button>
														</center>
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
												<center>Nama</center>
											</th>
											<th>
												<center>Jenis Pelayanan</center>
											</th>
											<th>
												<center>Tarif</center>
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

						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Tabel Tarif Rawat Jalan</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#modal-default1" style="width: 100%">Tambah Data Tarif Rawat Jalan
								<span class="fa fa-plus-circle"></span></button>
								<br><br>
								<table id="example2" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>
												<center>NO</center>
											</th>
											<th>
												<center>Nama</center>
											</th>
											<th>
												<center>Jenis Pelayanan</center>
											</th>
											<th>
												<center>Tarif Rawat Jalan</center>
											</th>
											<th>
												<center>Tarif Executive</center>
											</th>
											<th>
												<center>Action</center>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($rajal->result() as $row) { ?>
											<tr>
												<td>
													<center> <?php echo $no++; ?></center>
												</td>
												<td>
													<center> <?php echo $row->nama; ?></center>
												</td>
												<td>
													<center> <?php echo $row->jenis_pelayanan; ?></center>
												</td>
												<td>
													<center> <?php echo $row->tarif_rajal; ?></center>
												</td>
												<td>
													<center> <?php echo $row->executive; ?></center>
												</td>
												<td>
													<center>
														<button type="button" class="btn btn-warning" data-toggle="modal"
														data-target="#modal-edit2-<?php echo $row->id; ?>">Edit
														<spanclass="fa fa-plus-circle"></span></button>
														<button type="button" class="btn btn-danger" data-toggle="modal"
														data-target="#modal-delete2-<?php echo $row->id; ?>">Delete
														<spanclass="fa fa-plus-circle"></span></button>
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
												<center>Nama</center>
											</th>
											<th>
												<center>Jenis Pelayanan</center>
											</th>
											<th>
												<center>Tarif Rawat Jalan</center>
											</th>
											<th>
												<center>Tarif Executive</center>
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
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Tabel Tarif Rawat Inap</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#modal-default2" style="width: 100%">Tambah Data Tarif Rawat Inap <span
								class="fa fa-plus-circle"></span></button>
								<br><br>
								<table id="example3" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>
												<center>NO</center>
											</th>
											<th>
												<center>Nama</center>
											</th>
											<th>
												<center>Jenis Pelayanan</center>
											</th>
											<th>
												<center>Kelas III</center>
											</th>
											<th>
												<center>Kelas II</center>
											</th>
											<th>
												<center>Kelas I</center>
											</th>
											<th>
												<center>Kelas Utama</center>
											</th>
											<th>
												<center>Action</center>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($ranap->result() as $row) { ?>
											<tr>
												<td>
													<center> <?php echo $no++; ?></center>
												</td>
												<td>
													<center> <?php echo $row->nama; ?></center>
												</td>
												<td>
													<center> <?php echo $row->jenis_pelayanan; ?></center>
												</td>
												<td>
													<center> <?php echo $row->kelas3; ?></center>
												</td>
												<td>
													<center> <?php echo $row->kelas2; ?></center>
												</td>
												<td>
													<center> <?php echo $row->kelas1; ?></center>
												</td>
												<td>
													<center> <?php echo $row->kelas_utama; ?></center>
												</td>
												<td>
													<center>
														<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit3-<?php echo $row->id; ?>">Edit <spanclass="fa fa-plus-circle"></span></button>
														<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete3-<?php echo $row->id; ?>">Delete <spanclass="fa fa-plus-circle"></span></button>
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
												<center>Nama</center>
											</th>
											<th>
												<center>Jenis Pelayanan</center>
											</th>
											<th>
												<center>Kelas III</center>
											</th>
											<th>
												<center>Kelas II</center>
											</th>
											<th>
												<center>Kelas I</center>
											</th>
											<th>
												<center>Kelas Utama</center>
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
							<h4 class="modal-title">Tambah Data Tarif IGD</h4>
						</div>
						<form method="post" action="<?php echo base_url('admin/pelayanan/save_tarif_igd'); ?>" role="form">
							<div class="modal-body">
								<div class="box-body">
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Unit</label>
										<input type="text" name="" value="<?php echo "Instalasi Gawat Darurat"; ?>"
										class="form-control" disabled id="exampleInputEmail1"
										placeholder="Masukan Jenis">
										<input type="hidden" name="pelayanan"
										value="<?php echo "Instalasi Gawat Darurat"; ?>" class="form-control"
										id="exampleInputEmail1" placeholder="Masukan Jenis">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Jenis Pelayanan</label>
										<input type="text" name="jenis" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Jenis">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Tarif Pelayanan</label>
										<input type="text" name="tarif" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Tarif">
									</div>
								</div>
								<!-- /.box-body -->
							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-primary" value="Save Tarif IGD" style="width: 100%"
								name="submit">
								<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
							</div>
						</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<div class="modal fade" id="modal-default1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Tambah Data Tarif Rawat Jalan</h4>
							</div>
							<form method="post" action="<?php echo base_url('admin/pelayanan/save_tarif_rajal'); ?>"
								role="form">
								<div class="modal-body">
									<div class="box-body">
										<div class="form-group">
											<label for="exampleInputEmail1">Pelayanan</label>
											<input type="text" name="" value="<?php echo "Rawat Jalan"; ?>" class="form-control"
											disabled id="exampleInputEmail1" placeholder="Masukan Jenis">
											<input type="hidden" name="pelayanan" value="<?php echo "Rawat Jalan"; ?>"
											class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Jenis Pelayanan</label>
											<input type="text" name="jenis" class="form-control" id="exampleInputEmail1"
											placeholder="Masukan Jenis">
										</div>
										<div class="form-group">
											<div class="col-sm-12 col-md-6 col-md-6">
												<label for="exampleInputEmail1">Tarif Rawat Jalan</label>
												<input type="text" name="tarif_rajal" class="form-control"
												id="exampleInputEmail1" placeholder="Masukan Tarif">
											</div>
											<div class="col-sm-12 col-md-6 col-md-6">
												<label for="exampleInputEmail1">Tarif Executive</label>
												<input type="text" name="tarif_executive" class="form-control"
												id="exampleInputEmail1" placeholder="Masukan Tarif">
											</div>
										</div>
									</div>
									<!-- /.box-body -->
								</div>
								<div class="modal-footer">
									<input type="submit" class="btn btn-primary" value="Save Profile" style="width: 100%"
									name="submit">
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
								</div>
							</form>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<div class="modal fade" id="modal-default2">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Tambah Data Tarif Rawat Inap</h4>
								</div>
								<form method="post" action="<?php echo base_url('admin/pelayanan/save_tarif_ranap'); ?>"
									role="form">
									<div class="modal-body">
										<div class="box-body">
											<div class="form-group">
												<label for="exampleInputEmail1">Pelayanan</label>
												<input type="text" name="" value="<?php echo "Rawat Inap"; ?>" class="form-control"
												disabled id="exampleInputEmail1" placeholder="Masukan Jenis">
												<input type="hidden" name="pelayanan" value="<?php echo "Rawat Inap"; ?>"
												class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Jenis Pelayanan</label>
												<input type="text" name="jenis" class="form-control" id="exampleInputEmail1"
												placeholder="Masukan Jenis">
											</div>
											<div class="form-group">
												<div class="col-sm-12 col-md-6 col-md-6">
													<label for="exampleInputEmail1">Tarif Kelas 1</label>
													<input type="text" name="tarif_kelas1" class="form-control"
													id="exampleInputEmail1" placeholder="Masukan Tarif">
												</div>
												<div class="col-sm-12 col-md-6 col-md-6">
													<label for="exampleInputEmail1">Tarif Kelas 2</label>
													<input type="text" name="tarif_kelas2" class="form-control"
													id="exampleInputEmail1" placeholder="Masukan Tarif">
												</div>
												<div class="col-sm-12 col-md-6 col-md-6">
													<label for="exampleInputEmail1">Tarif Kelas 3</label>
													<input type="text" name="tarif_kelas3" class="form-control"
													id="exampleInputEmail1" placeholder="Masukan Tarif">
												</div>
												<div class="col-sm-12 col-md-6 col-md-6">
													<label for="exampleInputEmail1">Tarif Kelas Utama</label>
													<input type="text" name="tarif_kelas_u" class="form-control"
													id="exampleInputEmail1" placeholder="Masukan Tarif">
												</div>
											</div>
										</div>
										<!-- /.box-body -->
									</div>
									<div class="modal-footer">
										<input type="submit" class="btn btn-primary" value="Save Profile" style="width: 100%"
										name="submit">
										<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
									</div>
								</form>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<?php foreach ($igd->result() as $edit_igd) { ?>
						<div class="modal fade" id="modal-edit1-<?php echo $edit_igd->id; ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Tambah Data Tarif IGD</h4>
										</div>
										<form method="post"
										action="<?php echo base_url('admin/pelayanan/edit_tarif_igd/'.$edit_igd->id); ?>" role="form">
										<div class="modal-body">
											<div class="box-body">
												<div class="form-group">
													<label for="exampleInputEmail1">Nama Unit</label>
													<input type="text" name="" value="<?php echo "Instalasi Gawat Darurat"; ?>"
													class="form-control" disabled id="exampleInputEmail1"
													placeholder="Masukan Jenis">
													<input type="hidden" name="pelayanan"
													value="<?php echo "Instalasi Gawat Darurat"; ?>" class="form-control"
													id="exampleInputEmail1" placeholder="Masukan Jenis">
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Jenis Pelayanan</label>
													<input type="text" name="jenis" value="<?php echo $edit_igd->jenis_pelayanan?>"
													class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis">
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Tarif Pelayanan</label>
													<input type="text" name="tarif" value="<?php echo $edit_igd->tarif?>"
													class="form-control" id="exampleInputEmail1" placeholder="Masukan Tarif">
												</div>
											</div>
											<!-- /.box-body -->
										</div>
										<div class="modal-footer">
											<input type="submit" class="btn btn-primary" value="Update Tarif IGD" style="width: 100%"
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

					<?php foreach ($rajal->result() as $edit_rajal) { ?>
						<div class="modal fade" id="modal-edit2-<?php echo $edit_rajal->id; ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Tambah Data Tarif Rawat Jalan</h4>
										</div>
										<form method="post"
										action="<?php echo base_url('admin/pelayanan/edit_tarif_rajal/'.$edit_rajal->id); ?>"
										role="form">
										<div class="modal-body">
											<div class="box-body">
												<div class="form-group">
													<label for="exampleInputEmail1">Nama Unit</label>
													<input type="text" name="" value="<?php echo "Instalasi Rawat Jalan"; ?>"
													class="form-control" disabled id="exampleInputEmail1"
													placeholder="Masukan Jenis">
													<input type="hidden" name="pelayanan" value="<?php echo "Rawat jalan"; ?>"
													class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis">
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Jenis Pelayanan</label>
													<input type="text" name="jenis" value="<?php echo $edit_rajal->jenis_pelayanan?>"
													class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis">
												</div>
												<div class="form-group">
													<div class="col-sm-12 col-md-6 col-md-6">
														<label for="exampleInputEmail1">Tarif Rawat Jalan</label>
														<input type="text" name="tarif_rajal"
														value="<?php echo $edit_rajal->tarif_rajal; ?>" class="form-control"
														id="exampleInputEmail1" placeholder="Masukan Tarif">
													</div>
													<div class="col-sm-12 col-md-6 col-md-6">
														<label for="exampleInputEmail1">Tarif Executive</label>
														<input type="text" name="tarif_executive"
														value="<?php echo $edit_rajal->executive; ?>" class="form-control"
														id="exampleInputEmail1" placeholder="Masukan Tarif">
													</div>
												</div>
											</div>
											<!-- /.box-body -->
										</div>
										<div class="modal-footer">
											<input type="submit" class="btn btn-primary" value="Update Tarif Rawat Jalan" style="width: 100%"
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

					<?php foreach ($ranap->result() as $edit_ranap) { ?>
						<div class="modal fade" id="modal-edit3-<?php echo $edit_ranap->id; ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Tambah Data Tarif Rawat Inap</h4>
										</div>
										<form method="post"
										action="<?php echo base_url('admin/pelayanan/edit_tarif_ranap/'.$edit_ranap->id); ?>"
										role="form">
										<div class="modal-body">
											<div class="box-body">
												<div class="form-group">
													<label for="exampleInputEmail1">Nama Unit</label>
													<input type="text" name="" value="<?php echo "Instalasi Rawat Inap"; ?>"
													class="form-control" disabled id="exampleInputEmail1"
													placeholder="Masukan Jenis">
													<input type="hidden" name="pelayanan" value="<?php echo "Rawat Inap"; ?>"
													class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis">
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Jenis Pelayanan</label>
													<input type="text" name="jenis" value="<?php echo $edit_ranap->jenis_pelayanan?>"
													class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis">
												</div>
												<div class="form-group">
													<div class="col-sm-12 col-md-6 col-md-6">
														<label for="exampleInputEmail1">Tarif Kelas 1</label>
														<input type="text" name="tarif_kelas1" value="<?php echo $edit_ranap->kelas1; ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tarif">
													</div>
													<div class="col-sm-12 col-md-6 col-md-6">
														<label for="exampleInputEmail1">Tarif Kelas 2</label>
														<input type="text" name="tarif_kelas2" value="<?php echo $edit_ranap->kelas2; ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tarif">
													</div>
													<div class="col-sm-12 col-md-6 col-md-6">
														<label for="exampleInputEmail1">Tarif Kelas 3</label>
														<input type="text" name="tarif_kelas3" value="<?php echo $edit_ranap->kelas3; ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tarif">
													</div>
													<div class="col-sm-12 col-md-6 col-md-6">
														<label for="exampleInputEmail1">Tarif Kelas Utama</label>
														<input type="text" name="tarif_kelas_u" value="<?php echo $edit_ranap->kelas_utama; ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tarif">
													</div>
												</div>
											</div>
											<!-- /.box-body -->
										</div>
										<div class="modal-footer">
											<input type="submit" class="btn btn-primary" value="Update Tarif Rawat Inap" style="width: 100%"
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

					<?php foreach ($igd->result() as $delete) { 
						if($delete->jenis_pelayanan==null){
							$judul = $delete->nama;
						}else{
							$judul = $delete->jenis_pelayanan;
						}?>
						<div class="modal fade" id="modal-delete1-<?php echo $delete->id; ?>">
							<div class="modal-dialog2">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title"><b>Delete Data Profil</b></h4>
										</div>
										<div class="modal-body">
											<p>Apakah Anda Yakin Akan Menghapus Data Tarif:
												<b><?php echo $judul; ?>&hellip;</b></p>
											</div>
											<?php $layanan = strtolower(str_replace(' ','-', $judul)); ?>
											<div class="modal-footer">
												<a href="<?php echo base_url('admin/pelayanan/delete_tarif_igd/'.$delete->id); ?>"
													class="btn btn-danger pull-left">Delete Tarif</a>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>

					<?php foreach ($rajal->result() as $delete) {?>
						<div class="modal fade" id="modal-delete2-<?php echo $delete->id; ?>">
							<div class="modal-dialog2">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title"><b>Delete Data Profil</b></h4>
										</div>
										<div class="modal-body">
											<p>Apakah Anda Yakin Akan Menghapus Data Tarif:
												<b><?php echo $judul; ?>&hellip;</b></p>
											</div>
											
											<div class="modal-footer">
												<a href="<?php echo base_url('admin/pelayanan/delete_tarif_rajal/'.$delete->id); ?>"
													class="btn btn-danger pull-left">Delete Tarif</a>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>

					<?php foreach ($ranap->result() as $delete) {
						if($delete->jenis_pelayanan==null){
							$judul = $delete->nama;
						}else{
							$judul = $delete->jenis_pelayanan;
						}?>
						<div class="modal fade" id="modal-delete3-<?php echo $delete->id; ?>">
							<div class="modal-dialog2">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title"><b>Delete Data Profil</b></h4>
										</div>
										<div class="modal-body">
											<p>Apakah Anda Yakin Akan Menghapus Data Tarif:
												<b><?php echo $judul; ?>&hellip;</b></p>
											</div>
											
											<div class="modal-footer">
												<a href="<?php echo base_url('admin/pelayanan/delete_tarif_ranap/'.$delete->id); ?>"
													class="btn btn-danger pull-left">Delete Tarif</a>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>

								<!-- /.content-wrapper -->
								<footer class="main-footer">
									<div class="pull-right hidden-xs">
										<b>Created By </b> SIRS
									</div>
									<strong>Copyright &copy; 2020 <a href="http://rsukarsahusadabatu.jatimprov.go.id/">RSU Karsa
									Husada</a>.</strong> All rights
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
		<script>
			$(function () {
				$('#example1').DataTable()
				$('#example2').DataTable()
				$('#example3').DataTable()
			// $('#example2').DataTable({
			// 	'paging': true,
			// 	'lengthChange': false,
			// 	'searching': false,
			// 	'ordering': true,
			// 	'info': true,
			// 	'autoWidth': false
			// })
		})
	</script>
</body>

</html>
