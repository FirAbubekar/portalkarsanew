<style>
  .skin-blue .sidebar a {
    /* color: #3c3c3c; */
  }
</style>
<?php
$ac_dashboard = "disabled";
$ac_profil = "disabled";
$ac_pelayanan = "disabled";
$ac_perpustakaan = "disabled";
$ac_ppid = "disabled";
$ac_zi = "disabled";
$ac_diklat = "disabled";
$ac_informasi = "disabled";
$ac_agenda = "disabled";
$ac_akun = "disabled";

if ($this->session->userdata('level') == "diklat") {
  $ac_diklat = "";
} elseif ($this->session->userdata('level') == "admin" || $this->session->userdata('level') == "humas" || $this->session->userdata('level') == "pkrs") {
  $ac_dashboard = "";
  $ac_profil = "";
  $ac_pelayanan = "";
  $ac_perpustakaan = "";
  $ac_ppid = "";
  $ac_zi = "";
  $ac_diklat = "";
  $ac_informasi = "";
  $ac_agenda = "";
  $ac_akun = "";
} elseif ($this->session->userdata('level') == "zi") {
  $ac_zi = "";
} elseif ($this->session->userdata('level') == "komkordik") {
  $ac_perpustakaan = "";
} elseif ($this->session->userdata('level') == "pmkp") {
  $ac_perpustakaan = "";
}
?>
<style>
  .disabled {
    pointer-events: none;
    cursor: default;
    background: #5a5a5a;
  }
</style>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <br>
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/dist/img/avatar3.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Administrator</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
      <br><br><br>
    </div>
    <!-- search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <!-- <li class="<?php echo $a_dashboard; ?>">
        <a href="<?php echo base_url('admin/home') ?>" class="<?php echo $ac_dashboard; ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboards</span>
        </a>
      </li> -->
      <li class="treeview <?php echo $a_profil; ?>">
        <a class="<?php echo $ac_profil; ?>" href="#">
          <i class="fa fa-university"></i>
          <span>Profil</span>
          <span class="pull-right-container">
            <!-- <span class="label label-primary pull-right">4</span> -->
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo $a_sejarah; ?>"><a href="<?php echo base_url('admin/profil/sejarah'); ?>"><i class="fa fa-circle-o"></i> Sejarah</a></li>
          <li class="<?php echo $a_visi; ?>"><a href="<?php echo base_url('admin/profil/visimisi'); ?>"><i class="fa fa-circle-o"></i> Visi Misi</a></li>
          <li class="<?php echo $a_tugasfungsi; ?>"><a href="<?php echo base_url('admin/profil/tugasfungsi'); ?>"><i class="fa fa-circle-o"></i> Tugas Fungsi</a></li>
          <li class="<?php echo $a_sdm; ?>"><a href="<?php echo base_url('admin/profil/sdm'); ?>"><i class="fa fa-circle-o"></i> SDM</a></li>
          <li class="<?php echo $a_organisasi; ?>"><a href="<?php echo base_url('admin/profil/struktur'); ?>"><i class="fa fa-circle-o"></i> Struktur Organisasi</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo $a_pelayanan; ?>">
        <a class="<?php echo $ac_pelayanan; ?>" href="#">
          <i class="fa fa-recycle"></i>
          <span>Pelayanan</span>
          <span class="pull-right-container">
            <!-- <span class="label label-primary pull-right">4</span> -->
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo $a_unggulan; ?>"><a href="<?php echo base_url('admin/pelayanan/layanan/layanan-unggulan'); ?>"><i class="fa fa-circle-o"></i> Pelayanan Unggulan</a></li>
          <li class="<?php echo $a_igd; ?>"><a href="<?php echo base_url('admin/pelayanan/layanan/instalasi-gawat-darurat'); ?>"><i class="fa fa-circle-o"></i> Instalasi Gawat Darurat</a></li>
          <li class="<?php echo $a_rajal; ?>"><a href="<?php echo base_url('admin/pelayanan/layanan/instalasi-rawat-jalan'); ?>"><i class="fa fa-circle-o"></i> Instalasi Rawat Jalan</a></li>
          <li class="<?php echo $a_ranap; ?>"><a href="<?php echo base_url('admin/pelayanan/layanan/instalasi-rawat-inap'); ?>"><i class="fa fa-circle-o"></i> Instalasi Rawat Inap</a></li>
          <li class="<?php echo $a_medis; ?>"><a href="<?php echo base_url('admin/pelayanan/layanan/penunjang-medis'); ?>"><i class="fa fa-circle-o"></i> Instalasi Penunjang Medis</a></li>
          <li class="<?php echo $a_nonmedis; ?>"><a href="<?php echo base_url('admin/pelayanan/layanan/penunjang-non-medis'); ?>"><i class="fa fa-circle-o"></i> Instalasi Penunjang Non-Medis</a></li>
          <li class="<?php echo $a_tarif; ?>"><a href="<?php echo base_url('admin/pelayanan/tarif'); ?>"><i class="fa fa-circle-o"></i> Instalasi Tarif</a></li>
          <li class="<?php echo $a_alur; ?>"><a href="<?php echo base_url('admin/pelayanan/alur'); ?>"><i class="fa fa-circle-o"></i> Alur Persyaratan</a></li>
          <li class="<?php echo $a_jadwal; ?>"><a href="<?php echo base_url('admin/pelayanan/jadwal'); ?>"><i class="fa fa-circle-o"></i> Jadwal Dokter</a></li>
        </ul>
      </li>
      <li class="<?php echo $a_perpustakaan; ?>">
        <a class="<?php echo $ac_perpustakaan; ?>" href="<?php echo base_url('admin/perpustakaan'); ?>">
          <i class="fa fa-book"></i> <span>Perpustakaan</span>
        </a>
      </li>
      <li class="treeview <?php echo $a_ppid; ?>">
        <a class="<?php echo $ac_ppid; ?>" href="#">
          <i class="fa fa-bullhorn"></i>
          <span>PPID</span>
          <span class="pull-right-container">
            <!-- <span class="label label-primary pull-right">4</span> -->
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo ""; ?>"><a href="<?php echo base_url('admin/ppid'); ?>"><i class="fa fa-circle-o"></i>Konten</a></li>
          <li class="<?php echo ""; ?>"><a href="<?php echo base_url('admin/ppid/form'); ?>"><i class="fa fa-circle-o"></i>Form Pengaduan</a></li>
          <li class="<?php echo ""; ?>"><a href="<?php echo base_url('admin/ppid/permohonan_informasi'); ?>"><i class="fa fa-circle-o"></i>Permohonan Informasi</a></li>
          <li class="<?php echo ""; ?>"><a href="<?php echo base_url('admin/ppid/pengajuan_keberatan'); ?>"><i class="fa fa-circle-o"></i>Pengajuan Keberatan</a></li>
        </ul>
      </li>
      <style>
        .isDisabled {
          color: currentColor;
          cursor: not-allowed;
          opacity: 0.5;
          text-decoration: none;
        }
      </style>
      <li class="<?php echo ""; ?>">
        <a class="<?php echo $ac_agenda; ?>" href="<?php echo base_url('admin/wbs') ?>">
          <i class="fa fa-dashboard"></i> <span>Laporan WBS</span>
        </a>
      </li>
      <li class="treeview  <?php echo ""; ?>" aria-disabled="true">
        <a class="<?php echo $ac_zi; ?>" href="#" aria-disabled="true">
          <i class="fa fa-bullhorn"></i>
          <span>Zona Integritas</span>
          <span class="pull-right-container">
            <!-- <span class="label label-primary pull-right">4</span> -->
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo ""; ?>"><a href="#"><i class="fa fa-circle-o"></i>Standar Pelayanan</a></li>
          <li class="<?php echo ""; ?>"><a href="#"><i class="fa fa-circle-o"></i>Survey Kepuasan</a></li>
          <li class="<?php echo ""; ?>"><a href="#"><i class="fa fa-circle-o"></i>Buku Saku</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo $a_diklat; ?>">
        <a class="<?php echo $ac_diklat; ?>" href="#">
          <i class="fa fa-bullhorn"></i>
          <span>Diklat</span>
          <span class="pull-right-container">
            <!-- <span class="label label-primary pull-right">4</span> -->
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo ""; ?>"><a href="<?php echo base_url('admin/diklat/pendidikan'); ?>"><i class="fa fa-circle-o"></i>Pendidikan</a></li>
          <li class="<?php echo ""; ?>"><a href="<?php echo base_url('admin/diklat/pelatihan'); ?>"><i class="fa fa-circle-o"></i>Pelatihan</a></li>
          <li class="<?php echo ""; ?>"><a href="<?php echo base_url('admin/diklat/penelitian'); ?>"><i class="fa fa-circle-o"></i>Penelitian</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo $a_informasi; ?>">
        <a class="<?php echo $ac_informasi; ?>" href="#">
          <i class="fa fa-bullhorn"></i>
          <span>Informasi</span>
          <span class="pull-right-container">
            <!-- <span class="label label-primary pull-right">4</span> -->
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo $a_berita; ?>"><a href="<?php echo base_url('admin/informasi/berita'); ?>"><i class="fa fa-circle-o"></i> Berita</a></li>
          <li class="<?php echo ""; ?>"><a href="#"><i class="fa fa-circle-o"></i> Pengumuman</a></li>
          <li class="<?php echo $a_sakip; ?>"><a href="<?php echo base_url('admin/informasi/sakip'); ?>"><i class="fa fa-circle-o"></i> SAKIP</a></li>
          <li class="<?php echo $a_ikm; ?>"><a href="<?php echo base_url('admin/informasi/ikm'); ?>"><i class="fa fa-circle-o"></i> IKM</a></li>
          <li class="<?php echo $a_mutu; ?>"><a href="<?php echo base_url('admin/informasi/mutu'); ?>"><i class="fa fa-circle-o"></i> Mutu</a></li>
          <li class="<?php echo $a_inovasi; ?>"><a href="<?php echo base_url('admin/informasi/inovasi'); ?>"><i class="fa fa-circle-o"></i> Inovasi Publik</a></li>
        </ul>
      </li>
      <li class="<?php echo ""; ?>">
        <a class="<?php echo $ac_agenda; ?>" href="<?php echo base_url('admin/kegiatan') ?>">
          <i class="fa fa-dashboard"></i> <span>Agenda Kegiatan</span>
        </a>
      </li>
      <li class="treeview <?php echo $a_akun; ?>">
        <a class="<?php echo $ac_akun; ?>" href="#">
          <i class="fa fa-users"></i>
          <span>Akun</span>
          <span class="pull-right-container">
            <!-- <span class="label label-primary pull-right">4</span> -->
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo $a_admin; ?>"><a href="<?php echo base_url('admin/akun/admin'); ?>"><i class="fa fa-circle-o"></i>Akun Admin</a></li>
        </ul>
      </li>
      <li class="<?php echo $a_penelitian; ?>">
        <a class="<?php echo $ac_dashboard; ?>" href="<?php echo base_url('admin/etikpenelitian'); ?>">
          <i class="fa fa-book"></i> <span>Etik Penelitian</span>
        </a>
      </li>
      <li class="header">LOGOUT</li>
      <li>
        <a data-toggle="modal" data-target="#modal-exit"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<style type="text/css">
  .modal-dialog2 {
    width: 30%;
    margin: 30px auto;
  }
</style>
<div class="modal fade" id="modal-exit">
  <div class="modal-dialog2">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Logout</h4>
      </div>
      <div class="modal-body">
        <p>Apakah Anda Yakin Untuk Keluar / <i><b>Logout</b></i></p>
      </div>
      <div class="modal-footer">

        <a href="<?php echo base_url('admin/login/logout'); ?>" class="btn btn-danger pull-left">Logout</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-danger pull-left">Save changes</button> -->
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>