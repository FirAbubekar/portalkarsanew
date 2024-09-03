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
		<style>
			.col-md-2 {
				width: 14.2857143%;
				}
		</style>

		<?php $this->load->view('admin/template/modul_head');?>
		<!-- Left side column. contains the logo and sidebar -->
		<?php $this->load->view('admin/template/modul_aside_menu');?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Profil
					<small>Sumber Daya Manusia RS Karsa Husada</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Profil</a></li>
					<li><a href="#">SDM</a></li>
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
								<h3 class="box-title">Tabel Sumber Daya Manusia</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<button type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#modal-default" style="width: 100%">Tambah Data <span
										class="fa fa-plus-circle"></span></button>
								<br><br>
								<?php 
									$total = 0;
									foreach ($sdm->result() as $row) {
										$total+=intval($row->jumlah);
									}
										?>
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Kategori</th>
											<th>PNS</th>
											<th>BLUD</th>
											<th>MoU</th>
											<th>KONTRAK</th>
											<th>Jumlah</th>
											<th>Presentasi</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; $presentase=0; foreach ($sdm->result() as $row) { ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $row->jenis; ?></td>
											<td><?php echo $row->pns; ?></td>
											<td><?php echo $row->blud; ?></td>
											<td><?php echo $row->mou; ?></td>
											<td><?php echo $row->kontrak; ?></td>
											<td><?php echo $row->jumlah; ?></td>
											<td><?php echo number_format(($row->jumlah * 100)/$total,1)." %"; ?></td>
											<td><?php 							 
											if($row->status==1){
                                        	echo "<span class='label label-success'>Aktif</span>";
                                    		}
                                    		elseif($row->status==2){
                                        	echo "Permanen";
                                    		}
                                    		elseif($row->status==0){
                                        	echo "<span class='label label-warning'>Non-Aktif</span>";
                                    		}
													?> </td>
											<td>
												<button class="btn btn-warning" data-toggle="modal"
													data-target="#modal-edit-<?php echo $row->id; ?>">Edit</button>
												<button type="button" class="btn btn-danger" data-toggle="modal"
													data-target="#modal-delete-<?php echo $row->id; ?>">Delete</button>
											</td>
										</tr>
										<?php } ?>
									</tbody>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Kategori</th>
											<th>Jumlah</th>
											<th>Presentasi</th>
											<th>Status</th>
											<th>Action</th>
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

		<!-- /.col -->
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
						<h4 class="modal-title">Tambah Data SDM</h4>
					</div>
					<form method="post" action="<?php echo base_url('admin/profil/save_sdm'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Jenis SDM</label>
									<input type="text" name="jenis" class="form-control" id="exampleInputEmail1"
										placeholder="Masukan Jenis SDM">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Jumlah</label>
									<input type="number" min="0" name="jumlah" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
								</div>
								
								<hr>
								<h3>Kategori</h3>
								<hr>
								<div class="form-group">
									<div class="col-md-3">
										<label for="exampleInputPassword1">PNS</label>
										<input type="number" min="0" name="pns" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-3">
										<label for="exampleInputPassword1">BLUD</label>
										<input type="number" min="0" name="blud" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-3">
										<label for="exampleInputPassword1">MoU</label>
										<input type="number" min="0" name="mou" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-3">
										<label for="exampleInputPassword1">Kontrak</label>
										<input type="number" min="0" name="kontrak" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
								</div>
								<br><br><br>
								<hr>
								<h3>Pendidikan</h3>
								<hr>
								<div class="form-group">
									<div class="col-md-2">
										<label for="exampleInputPassword1">S2</label>
										<input type="number" min="0" name="s2" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">S1</label>
										<input type="number" min="0" name="s1" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">D4</label>
										<input type="number" min="0" name="d4" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">D3</label>
										<input type="number" min="0" name="d3" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">D2</label>
										<input type="number" min="0" name="d2" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">D1</label>
										<input type="number" min="0" name="d1" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">SMA</label>
										<input type="number" min="0" name="sma" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
								</div>
								<div class="form-group">
								
								<div class="col-md-12">
								<hr>								
									<label for="exampleInputFile">Aktif</label>
									<select name="status" class="form-control">
										<option value="1">Aktif</option>
										<option value="0">Non Aktif</option>
									</select>
								</div>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Save SDM" style="width: 100%"
								name="submit">
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<?php foreach ($sdm->result() as $edit){ ?>
		<div class="modal fade" id="modal-edit-<?php echo $edit->id; ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Data SDM</h4>
					</div>
					<form method="post" action="<?php echo base_url('admin/profil/edit_sdm/'.$edit->id); ?>"
						role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Jenis SDM</label>
									<input type="text" name="jenis" class="form-control" value="<?php echo $edit->jenis; ?>" id="exampleInputEmail1" placeholder="Masukan Jenis SDM">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Jumlah</label>
									<input type="number" min="0" name="jumlah" class="form-control" id="exampleInputEmail1" value="<?php echo $edit->jumlah?>" placeholder="Masukan Jumlah">
								</div>
								<hr>
								<h3>Kategori</h3>
								<hr>
								<div class="form-group">
									<div class="col-md-3">
										<label for="exampleInputPassword1">PNS</label>
										<input type="number" min="0" name="pns" class="form-control" id="exampleInputEmail1" value="<?php echo $edit->pns; ?>" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-3">
										<label for="exampleInputPassword1">BLUD</label>
										<input type="number" min="0" name="blud" class="form-control" id="exampleInputEmail1" value="<?php echo $edit->blud; ?>" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-3">
										<label for="exampleInputPassword1">MoU</label>
										<input type="number" min="0" name="mou" class="form-control" id="exampleInputEmail1" value="<?php echo $edit->mou; ?>" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-3">
										<label for="exampleInputPassword1">Kontrak</label>
										<input type="number" min="0" name="kontrak" class="form-control" id="exampleInputEmail1" value="<?php echo $edit->kontrak; ?>" placeholder="Masukan Jumlah">
									</div>
								</div>
								<br><br><br>
								<hr>
								<h3>Pendidikan</h3>
								<hr>
								<div class="form-group">
									<div class="col-md-2">
										<label for="exampleInputPassword1">S2</label>
										<input type="number" min="0" name="s2" value="<?php echo $edit->s2;?>" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">S1</label>
										<input type="number" min="0" name="s1" class="form-control" value="<?php echo $edit->s1;?>" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">D4</label>
										<input type="number" min="0" name="d4" class="form-control" value="<?php echo $edit->d4;?>" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">D3</label>
										<input type="number" min="0" name="d3" class="form-control" value="<?php echo $edit->d3;?>" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">D2</label>
										<input type="number" min="0" name="d2" class="form-control" value="<?php echo $edit->d2;?>" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">D1</label>
										<input type="number" min="0" name="d1" class="form-control" value="<?php echo $edit->d1;?>" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
									<div class="col-md-2">
										<label for="exampleInputPassword1">SMA</label>
										<input type="number" min="0" name="sma" class="form-control" value="<?php echo $edit->sma;?>" id="exampleInputEmail1" placeholder="Masukan Jumlah">
									</div>
								</div>
								
								<div class="form-group">
								<div class="col-md-12">
								<hr>	
									<label for="exampleInputFile">Aktif</label>
									<select name="status" class="form-control">
										<option value="<?php echo $edit->status; ?>">
											<?php if($edit->status==1){echo "Aktif";}else {echo "Non-Aktif";} ?>
										</option>
										<option value="1">Aktif</option>
										<option value="0">Non Aktif</option>
									</select>
								</div>
								</div>
							</div>
							<!-- /.box-body -->
						</div>

						<div class="modal-footer">
							<input type="submit" class="btn btn-warning" value="Update SDM" style="width: 100%"
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
		<?php foreach ($sdm->result() as $delete) {?>
		<div class="modal fade" id="modal-delete-<?php echo $delete->id; ?>">
			<div class="modal-dialog2">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title"><b>Delete Data SDM</b></h4>
					</div>
					<div class="modal-body">
						<p>Apakah Anda Yakin Akan Menghapus Data SDM untuk :
							<b><?php echo $delete->jenis; ?>&hellip;</b></p>
					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
						<a href="<?php echo base_url('admin/profil/delete_sdm/'.$delete->id); ?>"
							class="btn btn-danger pull-left">Delete SDM</a>
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
	<?php foreach ($sdm->result() as $editor) { ?>
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
