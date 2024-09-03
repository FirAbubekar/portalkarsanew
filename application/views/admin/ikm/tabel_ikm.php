<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Data Tables</title>
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
					Informasi
					<small>Indeks Kepuasan Mutu RS Karsa Husada</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-book"></i> Informasi</a></li>
					<li><a href="#">IKM</a></li>
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
								<h3 class="box-title">Tabel Buku Perpustakaan</h3>
								<br><br>
								<button type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#modal-default" style="width: 100%">Tambah Data <span
										class="fa fa-plus-circle"></span></button>
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
												<center>Judul</center>
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
										<?php $no=1; foreach ($ikm->result() as $row) { ?>
										<tr>
											<td>
												<center> <?php echo $no++; ?></center>
											</td>
											<td><?php echo $row->judul; ?></td>
											<td>
												<center> <?php echo $row->gambar; ?></center>
											</td>
											<td>
												<center> <?php 
                                    if($row->status==1){
                                        echo "<span class='label label-success'>Aktif</span>";
                                    }
                                    elseif($row->status==2){
                                        echo "Permanen";
                                    }
                                    elseif($row->status==0){
                                        echo "<span class='label label-warning'>Non-Aktif</span>";
                                    }
                               ?>
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
												<center>Judul</center>
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
						<h4 class="modal-title">Tambah Data IKM</h4>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/informasi/save_ikm'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul</label>
									<input type="text" name="judul" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Gambar</label>
									<input type="file" name="gambar">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Aktif</label>
									<select name="status" class="form-control">
										<option value="1">Aktif</option>
										<option value="0">Non Aktif</option>
									</select>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Save IKM" style="width: 100%"
								name="submit">
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<?php foreach ($ikm->result() as $edit) { ?>
		<div class="modal fade" id="modal-edit-<?php echo $edit->id; ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Data IKM</h4>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/informasi/edit_ikm/'.$edit->id); ?>"
						role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Judul</label>
									<input type="text" name="judul" class="form-control"
										value="<?php echo $edit->judul; ?>" placeholder="Masukan Nama">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Gambar</label>
									<input type="file" name="gambar">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Aktif</label>
									<select name="status" class="form-control">
										<option value="<?php echo $edit->status; ?>">
											<?php 
                            if ($edit->status==0) {
                              echo "Tidak Aktif";
                            }
                            else{
                              echo "Aktif";
                            }
                            ?></option>
										<option value="1">Aktif</option>
										<option value="0">Non Aktif</option>
									</select>
								</div>
							</div>
							<?php if($edit->gambar!=null){?>
								<div class="form-group">
								<input type="text" name="gambar1" class="form-control" value="<?php echo $edit->gambar?>" placeholder="Masukan Type">
									<label for="exampleInputPassword1">Gambar</label>
									<center><img style="width:30%;height:45%;" src="<?php echo base_url('file/ikm/'.$edit->gambar);?>" alt=""></center>
								</div>
								<?php } ?>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Update IKM" style="width: 100%"
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
		<?php foreach ($ikm->result() as $delete) {?>
		<div class="modal fade" id="modal-delete-<?php echo $delete->id; ?>">
			<div class="modal-dialog2">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Delete Data IKM</h4>
					</div>
					<div class="modal-body">
						<p>Apakah Anda Yakin Akan Menghapus Data Dengan Judul :
							<b><?php echo $delete->judul; ?>&hellip;</b></p>
					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
						<a href="<?php echo base_url('admin/informasi/delete_ikm/'.$delete->id); ?>"
							class="btn btn-danger pull-left">Delete IKM</a>
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
			CKEDITOR.replace('editor')
			//bootstrap WYSIHTML5 - text editor
			$('.textarea').wysihtml5()
		})
	</script>
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
