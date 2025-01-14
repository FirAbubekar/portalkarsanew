<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portal | RSU Karsa Husada</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets_portal/img/karsa700.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

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

<?php $this->load->view('karyawan/template/modul_head'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('karyawan/template/modul_aside_menu'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profil Karyawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Karyawan</a></li>
        <li><a href="#">Profil</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>assets/dist/img/avatar3.png" alt="User profile picture">
              <?php if($biodata[0]!=null){ ?>

              <h3 class="profile-username text-center"><?php echo $biodata[0]->Nama; ?></h3>

								<p class="text-muted text-center"><?php echo $biodata[0]->jabatan; ?></p>

								<ul class="list-group list-group-unbordered">
									<li class="list-group-item">
										<b>Tenaga</b> <a class="pull-right"><?php echo $biodata[0]->tenaga; ?></a>
									</li>
									<li class="list-group-item">
										<b>No Telp</b> <a class="pull-right"><?php echo "0".$biodata[0]->Telp; ?></a>
									</li>
									<li class="list-group-item">
										<b>E-Mail</b> <a class="pull-right"><?php echo $biodata[0]->email; ?></a>
									</li>
								</ul>
              <?php }else{ ?>
                <h3 class="profile-username text-center">Data Masih Kosong</h3>

                <p class="text-muted text-center">Data Masih Kosong</p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Tenaga</b> <a class="pull-right">Data Masih Kosong</a>
                  </li>
                  <li class="list-group-item">
                    <b>No Telp</b> <a class="pull-right">Data Masih Kosong</a>
                  </li>
                  <li class="list-group-item">
                    <b>E-Mail</b> <a class="pull-right">Data Masih Kosong</a>
                  </li>
                </ul>
              <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <strong><i class="fa fa-book margin-r-5"></i> Institusi Pendidikan</strong>
            <?php if($biodata[0]!=null){ ?>

								<p class="text-muted">
									<?php echo $biodata[0]->nama_sekolah; ?>
								</p>

								<hr>

								<strong><i class="fa fa-map-marker margin-r-5"></i> Jurusan</strong>

								<p class="text-muted"><?php echo $biodata[0]->Jurusan; ?></p>

								<hr>

								<strong><i class="fa fa-pencil margin-r-5"></i> Tahun Lulus / Jenjang</strong>

                <p class="text-muted"><?php echo $biodata[0]->tahun_lulus." / ".$biodata[0]->jenjang; ?></p>
                
                <hr>
                <?php }else{ ?>
                    <p class="text-muted">
                  Data Masih Kosong
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Jurusan</strong>

                <p class="text-muted">Data Masih Kosong</p>

                <hr>

                <strong><i class="fa fa-pencil margin-r-5"></i> Tahun Lulus / Jenjang</strong>

                <p class="text-muted">Data Masih Kosong</p>
                
                <hr>
              <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">

								<li class="active"><a href="#settings" data-toggle="tab">Profile</a></li>
							</ul>
							<div class="tab-content">
								<!-- /.tab-pane -->

								<div class="active tab-pane" id="settings">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="inputName" class="col-sm-2 control-label">NIP</label>

											<div class="col-sm-10">
												<label class="form-control"><?php if($biodata[0]==null){echo "Data Masih Kosong"; }else{echo $biodata[0]->NIP;} ?></label>
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail" class="col-sm-2 control-label">Alamat</label>

											<div class="col-sm-10">
												<textarea class="form-control" disabled
													style="width:100%;height:150px;"><?php if($biodata[0]==null){echo "Data Masih Kosong"; }else{ echo $biodata[0]->Alamat;} ?></textarea>
											</div>
										</div>
										<div class="form-group">
											<label for="inputName" class="col-sm-2 control-label">BPJKES</label>

											<div class="col-sm-10">
												<label class="form-control"><?php if($biodata[0]==null){echo "Data Masih Kosong"; }else{ echo $biodata[0]->BPJSKES;} ?></label>
											</div>
										</div>
										<div class="form-group">
											<label for="inputExperience" class="col-sm-2 control-label">Tempat / Tanggal Lahir</label>

											<div class="col-sm-10">
												<label class="form-control"><?php if($biodata[0]==null){echo "Data Masih Kosong"; }else{ echo $biodata[0]->Temp_tgllahir;} ?> /
													<?php if($biodata[0]==null){echo "Data Masih Kosong"; }else{ echo $biodata[0]->Tgl_Lahir; } ?></label>
											</div>
										</div>
										<div class="form-group">
											<label for="inputSkills" class="col-sm-2 control-label">No Rekening</label>

											<div class="col-sm-10">
												<label class="form-control"><?php if($biodata[0]==null){echo "Data Masih Kosong"; }else{ echo $biodata[0]->rek_bank; } ?></label>
											</div>
										</div>
										<div class="form-group">
											<label for="inputSkills" class="col-sm-2 control-label">Gaji</label>

											<div class="col-sm-10">
												<label class="form-control">Rp. <?php if($biodata[0]==null){echo "Data Masih Kosong"; }else{ echo number_format($biodata[0]->gaji,2,',','.');} ?></label>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<!-- /.nav-tabs-custom -->
					</div>
					
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
</body>
</html>
