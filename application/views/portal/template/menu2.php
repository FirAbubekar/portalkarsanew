<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<header>
			<div class="header-container">
				<!--Header Bottom Area Start-->
				<div class="header-bottom-area header-sticky">
					<div class="container">
						<div class="row align-items-center">
							<!--Header Logo Start-->
							<div class="col-md-3">
								<div class="header-logo">
									<a href="<?php echo base_url('home');?>"><img class="h_logo" src="<?php echo base_url();?>assets_portal/img/logo/logo.png" alt=""></a>
								</div>
							</div>
							<!--Header Logo End-->
							<!--Header Menu Start-->
							<div class="col-md-9">
								<div class="header-menu-area text-right">
								<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
									<nav>
										<ul class="main-menu">

											<li class="<?php echo $s_beranda; ?>"><a href="<?php echo base_url('home');?>">BERANDA</a></li>
											<li class="<?php echo $s_profil; ?>"><a href="#">PROFIL</a>
												<!--Dropdown Menu Start-->
												<ul>
													<li class="<?php echo $s_sejarah; ?>"><a  href="<?php echo base_url('profil/sejarah');?>">Sejarah</a></li>
													<li class="<?php echo $s_visi; ?>"><a  href="<?php echo base_url('profil/visimisi');?>">Visi Misi</a></li>
													<li class="<?php echo $s_sdm; ?>"><a  href="<?php echo base_url('profil/sdm');?>">SDM</a></li>
													<li class="<?php echo $s_struktur; ?>"><a  href="<?php echo base_url('profil/struktur');?>">Struktur Organisasi</a>
													</li>
												</ul>
												<!--Dropdown Menu End-->
											</li>
											<li class="<?php echo $s_pelayanan; ?>"><a href="#">PELAYANAN</a>
												<!--Dropdown Menu Start-->
												<ul>
													<li class="<?php echo $s_unggulan; ?>"><a  href="<?php echo base_url('pelayanan/unggulan');?>">Pelayanan Unggulan</a>
													</li>
													<li class="<?php echo $s_igd; ?>"><a  href="<?php echo base_url('pelayanan/igd');?>">Instalasi Gawat
															Darurat</a></li>
													<li class="<?php echo $s_rajal; ?>"><a  href="<?php echo base_url('pelayanan/rawat_jalan');?>">Instalasi Rawat
															Jalan</a></li>
													<li class="<?php echo $s_ranap; ?>"><a  href="<?php echo base_url('pelayanan/rawat_inap');?>">Instalasi Rawat Inap</a>
													</li>
													<li class="<?php echo $s_penunjang; ?>"><a  href="<?php echo base_url('pelayanan/penunjang');?>">Instalasi Penunjang Medis</a></li>
													<li class="<?php echo $s_tarif; ?>"><a  href="<?php echo base_url('pelayanan/tarif');?>">Instalasi Tarif</a></li>
													<li class="<?php echo $s_alur; ?>"><a  href="<?php echo base_url('pelayanan/alur');?>">Alur Persyaratan</a>
													</li>
													<li class="<?php echo $s_jadwal; ?>"><a  href="<?php echo base_url('pelayanan/jadwal_dokter');?>">Jadwal Dokter</a></li>
												</ul>
												<!--Dropdown Menu End-->
											</li>
											<li class="<?php echo $s_perpustakaan; ?>"><a  href="<?php echo base_url('perpustakaan');?>">PERPUSTAKAAN</a></li>
											<li class="<?php echo $s_ppid; ?>"><a href="#">PPID</a>
												<!--Dropdown Menu Start-->
												<ul>
													<li class="<?php echo $s_berita; ?>"><a  href="<?php echo base_url('ppid/menu/profil');?>">Profil</a></li>
													<li class="<?php echo $s_ikm; ?>"><a  href="<?php echo base_url('ppid/menu/hakpemohon');?>">Hak Pemohon Informasi</a></li>
													<li class="<?php echo $s_mutu; ?>"><a  href="<?php echo base_url('ppid/menu/alur');?>">Alur Pelayanan PPID</a></li>
													<!-- <li class="<?php echo $s_mutu; ?>"><a  href="<?php echo base_url('ppid/form');?>">Form Pelayanan Informasi</a></li> -->
													<li class="dropdown-submenu">
														<a class="test" tabindex="-1" href="#">Form Pelayanan Informasi <span class="caret"></span></a>
														<ul class="dropdown-menu">
														<li class="<?php echo $s_berita; ?>"><a  href="<?php echo base_url('ppid/permohonaninformasi');?>">Form Permohonan Informasi</a></li>
														<li class="<?php echo $s_ikm; ?>"><a  href="<?php echo base_url('ppid/form/tertulis');?>">Pemberitahuan</a></li>
														<li class="<?php echo $s_mutu; ?>"><a  href="<?php echo base_url('ppid/form/keputusan');?>">Surat Keputusan PPID</a></li>
														<li class="<?php echo $s_mutu; ?>"><a  href="<?php echo base_url('ppid/form/keberatan');?>">Form Keberatan</a></li>
														</ul>
													</li>

													<li class="dropdown-submenu">
														<a class="test" tabindex="-1" href="#">Klasifikasi Informasi Publik <span class="caret"></span></a>
														<ul class="dropdown-menu">
														<li class="<?php echo $s_berita; ?>"><a  href="<?php echo base_url('ppid/klasifikasi/berkala');?>">Berkala</a></li>
														<li class="<?php echo $s_ikm; ?>"><a  href="<?php echo base_url('ppid/klasifikasi/sertamerta');?>">Serta Merta</a></li>
														<li class="<?php echo $s_mutu; ?>"><a  href="<?php echo base_url('ppid/klasifikasi/setiapsaat');?>">Setiap Saat</a></li>
														<li class="<?php echo $s_mutu; ?>"><a  href="<?php echo base_url('ppid/klasifikasi/dikecualikan');?>">Dikecualikan</a></li>
														</ul>
													</li>
													</li>
												</ul>
												<!--Dropdown Menu End-->
											</li>
											<li class="<?php echo $s_informasi; ?>"><a href="#">INFORMASI</a>
												<!--Dropdown Menu Start-->
												<ul>
													<li class="<?php echo $s_berita; ?>"><a  href="<?php echo base_url('informasi/berita');?>">Berita</a></li>
													<li class="<?php echo $s_ikm; ?>"><a  href="<?php echo base_url('informasi/ikm');?>">IKM</a></li>
													<li class="<?php echo $s_mutu; ?>"><a  href="<?php echo base_url('informasi/mutu');?>">Mutu</a></li>
													<li class="<?php echo $s_sakip; ?>"><a  href="<?php echo base_url('informasi/sakip');?>">SAKIP</a></li>
												</ul>
												<!--Dropdown Menu End-->
											</li>
										</ul>
									</nav>
								</div>
							</div>

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
						<p>Apakah Anda Yakin Untuk Keluar Dari Sistem</p>
					</div>
					<div class="modal-footer">
						
						<a href="<?php echo base_url('admin/login/logout'); ?>" class="btn btn-danger pull-left">Logout</a>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						<!-- <button type="button" class="btn btn-danger pull-left">Save changes</button> -->
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
							<!--Header Menu End-->
						</div>
						<div class="row">
							<div class="col-12">
								<!--Mobile Menu Area Start-->
								<div class="mobile-menu d-lg-none d-xl-none"></div>
								<!--Mobile Menu Area End-->
							</div>
						</div>
					</div>
				</div>
				<!--Header Bottom Area End-->
			</div>
		</header>