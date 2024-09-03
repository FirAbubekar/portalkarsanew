<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<br>
			<div class="pull-left image">
				<img src="<?php echo base_url();?>assets/dist/img/avatar3.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php if($biodata[0]==null){echo "Data Masih Kosong"; }else{ echo substr($biodata[0]->Nama,0,20);} ?>
				</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
			<br><br><br>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header" style="color:white">MAIN NAVIGATION</li>
			<li class="<?php echo $a_profil;?>">
				<a href="<?php echo base_url('portal/profile'); ?>">
					<i class="fa fa-user"></i> <span>Profile</span>
				</a>
			</li>

			<li class="treeview <?php echo $hadir; ?>">
				<a href="#">
					<i class="fa fa-exchange"></i>
					<span>Kehadiran</span>
					<span class="pull-right-container">
						<!-- <span class="label label-primary pull-right">4</span> -->
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo $a_absensi;?>"><a href="<?php echo base_url('portal/absensi'); ?>"><i class="fa fa-circle-o"></i> Absensi</a></li>
					<li class="<?php echo $a_kehadiran;?>"><a href="<?php echo base_url('portal/kehadiran'); ?>"><i class="fa fa-circle-o"></i> Kehadiran</a> </li>
					<li class="<?php echo $a_cuti;?>"><a href="<?php echo base_url('portal/kehadiran/cuti'); ?>"><i class="fa fa-circle-o"></i> Cuti</a> </li>
				</ul>
			</li>

			<li class="treeview <?php echo $keuangan; ?>">
				<a href="#">
					<i class="fa fa-money"></i>
					<span>Keuangan</span>
					<span class="pull-right-container">
						<!-- <span class="label label-primary pull-right">4</span> -->
					</span>
				</a>
				<ul class="treeview-menu">
				<li class="<?php echo $a_gaji; ?>"><a href="<?php echo base_url('portal/keuangan/gaji'); ?>"><i class="fa fa-circle-o"></i> Gaji</a> </li>
				<li class="<?php echo $a_makan; ?>"><a href="<?php echo base_url('portal/keuangan/uang_makan'); ?>"><i class="fa fa-circle-o"></i> Uang Makan</a> </li>
				<li class="<?php echo $a_bpjs; ?>"><a href="<?php echo base_url('portal/keuangan/bpjs'); ?>"><i class="fa fa-circle-o"></i> BPJS</a> </li>
				<li class="<?php echo $a_umum;?>"><a href="<?php echo base_url('portal/keuangan/jpumum'); ?>"><i class="fa fa-circle-o"></i> JP Umum</a> </li>
				<li class="<?php echo $a_bulan;?>"><a href="<?php echo base_url('portal/keuangan/jkn'); ?>"><i class="fa fa-circle-o"></i> JP Bulanan</a> </li>
				</ul>
			</li>

			<li class="treeview <?php echo $mutasi; ?>">
				<a href="#">
					<i class="fa fa-line-chart"></i>
					<span>Kenaikan & Mutasi</span>
					<span class="pull-right-container">
						<!-- <span class="label label-primary pull-right">4</span> -->
					</span>
				</a>
				<ul class="treeview-menu">
				<li class="<?php echo $a_pangkat;?>"><a href="<?php echo base_url('portal/pangkat/berita'); ?>"><i class="fa fa-circle-o"></i> Kenaikan Pangkat</a> </li>
				<li class="<?php echo $a_pgaji;?>"><a href="<?php echo base_url('portal/pangkat/ikm'); ?>"><i class="fa fa-circle-o"></i> Kenaikan Gaji</a> </li>
				<li class="<?php echo $a_mutasi;?>"><a href="<?php echo base_url('portal/mutasi/mutu'); ?>"><i class="fa fa-circle-o"></i> Mutasi</a> </li>
				</ul>
			</li>
			<?php if($biodata[0]->tenaga == 'Medis' || $biodata[0]->tenaga == 'Penunjang Medis'){?>
			<li class="<?php echo $a_str;?>">
				<a href="<?php echo base_url('portal/str_sip'); ?>"> <i class="fa fa-user"></i> <span>STR dan SIP</span> </a>
			</li>
			<?php } ?>

			<li class="treeview <?php echo $dinas1; ?>">
				<a href="#">
					<i class="fa fa-bookmark-o"></i>
					<span>Pelatihan & Dinas</span>
					<span class="pull-right-container">
						<!-- <span class="label label-primary pull-right">4</span> -->
					</span>
				</a>
				<ul class="treeview-menu">
				<li class="<?php echo $a_pelatihan;?>"><a href="<?php echo base_url('portal/dinas/pelatihan'); ?>"><i class="fa fa-circle-o"></i> Pelatihan</a> </li>
				<li class="<?php echo $a_dinas;?>"><a href="<?php echo base_url('portal/dinas/dinasluar'); ?>"><i class="fa fa-circle-o"></i> Dinas Luar</a> </li>
				</ul>
			</li>

			<li>
				<a href="<?php echo base_url('portal/login/logout'); ?>"> <i class="fa fa-sign-out"></i> <span>Logout</span> </a>
			</li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>