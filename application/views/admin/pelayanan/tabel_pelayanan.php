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
<?php $total = count($pelayanan->result());
if($total>8){
	?>
	<style type="text/css">
		.content-wrapper {
			background-color:

			#ecf0f5;
			z-index: 800;
			height: auto;
		}
	</style>
<?php } ?>

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
					Pelayanan
					<small> <?php echo ucfirst($layanan); ?> RS Karsa Husada</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-recycle"></i> Pelayanan</a></li>
					<li><a href="#"><?php echo ucfirst(strtolower($layanan)) ; ?></a></li>
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
								<span class="info-box-text">Total Pelayanan</span>
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
								<span class="info-box-text">Pelayanan Aktif</span>
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
								<span class="info-box-text">Pelayanan Non Aktif</span>
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
								<h3 class="box-title">Tabel Visi & Misi</h3>
								<br><br>
								<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#modal-default" style="width: 100%">Tambah Data Pelayanan &nbsp&nbsp
								<span class="fa fa-plus-circle"></span></button>
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
												<center>Sub-Judul</center>
											</th>
											<th>
												<center>Waktu Pelayanan</center>
											</th>
											<th>
												<center>Aktif</center>
											</th>
											<th>
												<center>Action</center>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($pelayanan->result() as $row) { ?>
											<tr>
												<td>
													<center> <?php echo $no++; ?></center>
												</td>
												<td>
													<center> <?php echo $row->judul; ?></center>
												</td>
												<td>
													<center> <?php echo $row->sub_judul; ?></center>
												</td>
												<td>
													<center> <?php echo $row->waktu_pelayanan; ?></center>
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
													<center>
														<button class="btn btn-info	" data-toggle="modal" data-target="#modal-galeri-<?php echo $row->id; ?>">Galeri</button>
														<button class="btn btn-warning	" data-toggle="modal" data-target="#modal-edit-<?php echo $row->id; ?>">Edit</button>
														<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-<?php echo $row->id; ?>">Delete</button>
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
											<center>Judul</center>
										</th>
										<th>
											<center>Sub-Judul</center>
										</th>
										<th>
											<center>Waktu Pelayanan</center>
										</th>
										<th>
											<center>Aktif</center>
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
						<h4 class="modal-title">Tambah Data Profil</h4>
					</div>
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/pelayanan/save_pelayanan'); ?>" role="form">
						<div class="modal-body">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Pelayanan</label>
									<input type="text" name="" value="<?php echo $layanan; ?>" class="form-control"
									disabled id="exampleInputEmail1" placeholder="Masukan Pelayanan">
									<input type="hidden" name="pelayanan" value="<?php echo $layanan; ?>"
									class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Sub-Pelayanan</label>
									<?php if($layanan=="INSTALASI RAWAT JALAN"){?>
									<select name="sub_title" class="form-control" id="">
										<option value=""></option>
										<option value="ANAK">ANAK</option>
										<option value="ANASTESI">ANASTESI</option>
										<option value="BEDAH DIGESTIF">BEDAH DIGESTIF</option>
										<option value="BEDAH PLASTIK">BEDAH PLASTIK</option>
										<option value="BEDAH SYARAF">BEDAH SYARAF</option>
										<option value="BEDAH UMUM">BEDAH UMUM</option>
										<option value="BEDAH UROLOGI">BEDAH UROLOGI</option>
										<option value="GIGI">GIGI</option>
										<option value="JANTUNG">JANTUNG</option>
										<option value="JIWA">JIWA/PSIKIATRI</option>
										<option value="KANDUNGAN">KANDUNGAN (OBGYN)</option>
										<option value="KULIT DAN KELAMIN">KULIT DAN KELAMIN</option>
										<option value="MATA">MATA/RETINA</option>
										<option value="MCU">MCU (MEDICAL CHECK UP)</option>
										<option value="ORTHOPAEDI">ORTHOPAEDI</option>
										<option value="PARU">PARU/VCT</option>
										<option value="PENYAKIT_DALAM">PENYAKIT DALAM</option>
										<option value="PSIKOLOGI">PSIKOLOGI</option>
										<option value="REHAB_MEDIK">REHAB MEDIK</option>
										<option value="SYARAF">SYARAF</option>
										<option value="THT">THT</option>
										<option value="TMS ROBOTIC">TMS ROBOTIC</option>
									</select>
									<?php } elseif($layanan=="INSTALASI RAWAT INAP"){?>
										<select name="sub_title" class="form-control" id="">
										<option value=""></option>
										<option value="CVCU">CVCU</option>
										<option value="DAHLIA">DAHLIA</option>
										<option value="EDELWEISS_VIP">EDELWEISS VIP</option>
										<option value="GRAHA AMARILIS">GRAHA AMARILIS</option>
										<option value="HCU">HCU</option>
										<option value="ICU">ICU</option>
										<option value="LAVENDER">LAVENDER</option>
										<option value="MATAHARI">MATAHARI</option>
										<option value="PERINATOLOGI">PERINATOLOGI</option>
										<option value="SERUNI">SERUNI</option>
									</select>
									<?php }else{ ?>
										<input type="text" name="sub_title" class="form-control" id="exampleInputEmail1"
									placeholder="Masukan Sub-Pelayanan">
									<?php } ?>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Gambar</label>
									<input type="file" name="gambar[]" multiple="multiple" class="form-control" id="exampleInputEmail1"
									placeholder="Masukan Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Jam Pelayanan</label>
									<textarea id="editor" name="jam" rows="10" cols="80"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Keterangan</label>
									<textarea id="editors" name="keterangan" rows="10" cols="80"></textarea>
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

		<?php foreach ($pelayanan->result() as $edit) { ?>
			<div class="modal fade" id="modal-edit-<?php echo $edit->id; ?>">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Tambah Data Pelayanan</h4>
							</div>
							<form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/pelayanan/edit_pelayanan/'.$edit->id); ?>"
								role="form">
								<div class="modal-body">
									<div class="box-body">
										<div class="form-group">
											<label for="exampleInputEmail1">Pelayanan</label>
											<input type="text" name="" value="<?php echo $layanan; ?>" class="form-control"
											disabled id="exampleInputEmail1" placeholder="Masukan Judul">
											<input type="hidden" name="pelayanan" value="<?php echo $layanan; ?>"
											class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Sub-Pelayanan</label>
											<input type="text" name="sub_title" value="<?php echo $edit->sub_judul; ?>"
											class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Gambar</label>
											<input type="file" name="gambar[]" multiple="multiple" class="form-control" id="exampleInputEmail1"
											placeholder="Masukan Judul">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Jam Pelayanan</label>
											<textarea id="editor<?php echo $edit->id; ?>" name="jam" rows="10"
												cols="80"> <?php echo $edit->waktu_pelayanan; ?> </textarea>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Keterangan</label>
												<textarea id="editors<?php echo $edit->id; ?>" name="keterangan" rows="10"
													cols="80"> <?php echo $edit->keterangan; ?> </textarea>
												</div>
												<div class="form-group">
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
											<!-- /.box-body -->
										</div>
										<div class="modal-footer">
											<input type="submit" class="btn btn-primary" value="Save Pelayanan" style="width: 100%" name="submit">
											<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
										</div>
									</form>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
					<?php } ?>

					<?php foreach ($pelayanan->result() as $edit) { ?>
						<div class="modal fade" id="modal-galeri-<?php echo $edit->id; ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Update Data Pelayanan</h4>
										</div>
										<form method="post" action="<?php echo base_url('admin/pelayanan/edit_pelayanan/'.$edit->id); ?>"
											role="form">
											<div class="modal-body">
												<div class="box-body">
													<h4>
													<?php 
													$no = 1;
													if($edit->sub_judul==null){
														$judul = $edit->judul;
													}
													else{
														$judul = $edit->sub_judul;	
													}
													$judul = strtoupper(preg_replace("/[^a-zA-Z]/","_",$judul));
													echo "<b>".$judul."<hr></b>";
													$this->db->where('id_pelayanan',$edit->id);
													$dbgaleri = $this->db->get('detail_pelayanan');
													?>
													<br>
													<?php echo $edit->judul; ?></h4>
													<div class="form-group">
														<!-- <label for="exampleInputEmail1"><h4><br> -->
														<?php foreach ($dbgaleri->result() as $rows){ ?>
															<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
																<img src="<?php echo base_url('file/pelayanan/'.strtolower($judul).'/'.$rows->gambar); ?>" style="width: 100%;height:400px">
															</div>
														<?php } ?>
													</div>
													
												</div>
												<!-- /.box-body -->	
											</div>
											<div class="modal-footer">
												<!-- <input type="submit" class="btn btn-primary" value="Save Profile" style="width: 100%"
												name="submit"> -->
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

						<?php foreach ($pelayanan->result() as $delete) {?>
							<div class="modal fade" id="modal-delete-<?php echo $delete->id; ?>">
								<div class="modal-dialog2">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title"><b>Delete Data Profil</b></h4>
											</div>
											<div class="modal-body">
												<p>Apakah Anda Yakin Akan Menghapus Data Dengan Judul :
													<b><?php echo $delete->sub_judul; ?>&hellip;</b></p>
												</div>
												<?php $layanan = strtolower(str_replace(' ','-', $delete->judul)); ?>
												<div class="modal-footer">
													<!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
													<a href="<?php echo base_url('admin/pelayanan/delete_pelayanan/'.$delete->id.'/'.$layanan); ?>"
														class="btn btn-danger pull-left">Delete Profil</a>
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
	<script>
		$(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editors')
			//bootstrap WYSIHTML5 - text editor
			$('.textarea').wysihtml5()
		})
	</script>
	<?php foreach ($pelayanan->result() as $editor) { ?>
		<script>
			$(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editor<?php echo $editor->id; ?>')
			//bootstrap WYSIHTML5 - text editor
			$('.textarea').wysihtml5()
		})
	</script>
	<script>
		$(function () {
			// Replace the <textarea id="editor1"> with a CKEditor
			// instance, using default configuration.
			CKEDITOR.replace('editors<?php echo $editor->id; ?>')
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
			'autoWidth': true
		})
	})
</script>
</body>

</html>
