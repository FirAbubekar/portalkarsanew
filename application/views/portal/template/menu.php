<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<header>
	<div class="header-container">
		<!--Header Bottom Area Start-->
		<div class="header-sticky">
			<div class="container">
				<div class="row align-items-center">
					<!--Header Logo Start-->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="<?php echo base_url('home'); ?>"><img class="h_logo" class="logorssize" src="<?php echo base_url(); ?>assets_portal/img/logo/logo6.png" alt=""></a>
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
								$(document).ready(function() {
									$('.dropdown-submenu a.test').on("click", function(e) {
										$(this).next('ul').toggle();
										e.stopPropagation();
										e.preventDefault();
									});
								});
							</script>
							<nav>
								<ul class="main-menu">

									<li><a href="<?php echo base_url(''); ?>">Beranda</a></li>

									<li class="<?php echo $s_profil; ?>"><a href="#">Profil</a>
										<!--Dropdown Menu Start-->
										<ul>
											<li class="<?php echo $s_sejarah; ?>"><a href="<?php echo base_url('profil/sejarah'); ?>">Sejarah</a></li>
											<li class="<?php echo $s_visi; ?>"><a href="<?php echo base_url('profil/visimisi'); ?>">Visi Misi</a></li>
											<li class="<?php echo $s_tugas_fungsi; ?>"><a href="<?php echo base_url('profil/tugasfungsi'); ?>">Tugas & Fungsi</a></li>
											<li class="<?php echo $s_sdm; ?>"><a href="<?php echo base_url('profil/sdm'); ?>">SDM</a></li>
											<li class="<?php echo $s_struktur; ?>"><a href="<?php echo base_url('profil/struktur'); ?>">Struktur Organisasi</a>
											</li>
										</ul>
										<!--Dropdown Menu End-->
									</li>
									<li class="<?php echo $s_pelayanan; ?>"><a href="#">Pelayanan</a>
										<!--Dropdown Menu Start-->
										<ul>
											<li class="<?php echo $s_unggulan; ?>"><a href="<?php echo base_url('pelayanan/unggulan'); ?>">Pelayanan Unggulan</a>
											</li>
											<li class="<?php echo $s_igd; ?>"><a href="<?php echo base_url('pelayanan/igd'); ?>">Instalasi Gawat
													Darurat</a></li>
											<li class="<?php echo $s_rajal; ?>"><a href="<?php echo base_url('pelayanan/rawat_jalan'); ?>">Instalasi Rawat
													Jalan</a></li>
											<li class="<?php echo $s_ranap; ?>"><a href="<?php echo base_url('pelayanan/rawat_inap'); ?>">Instalasi Rawat Inap</a>
											</li>
											<li class="<?php echo $s_penunjang; ?>"><a href="<?php echo base_url('pelayanan/penunjang'); ?>">Instalasi Penunjang</a></li>
											<li class="dropdown-submenu">
												<a class="test" tabindex="-1" href="#">Tarif Pelayanan <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('pelayanan/tarif/rawat_jalan'); ?>">Rawat Jalan</a></li>
													<li class="<?php echo $s_ikm; ?>"><a href="<?php echo base_url('pelayanan/tarif/rawat_inap'); ?>">Rawat Inap</a></li>
													<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('pelayanan/tarif/instalasi_gawat_darurat'); ?>">IGD</a></li>
													<li class="<?php echo $s_ikm; ?>"><a href="<?php echo base_url('pelayanan/tarif/rawat_intensif'); ?>">Rawat Intensif</a></li>
													<li class="<?php echo $s_ikm; ?>"><a href="<?php echo base_url('pelayanan/tarif/bank_darah'); ?>">Bank Darah</a></li>
													<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('pelayanan/tarif/radiologi'); ?>">Radiologi</a></li>
													<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('pelayanan/tarif/laboratorium_pk'); ?>">Laboratorium PK</a></li>
													<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('pelayanan/tarif/laboratorium_pa'); ?>">Laboratorium PA</a></li>
													<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('pelayanan/tarif/laboratorium_mk'); ?>">Laboratorium MK</a></li>
												</ul>
											</li>
											<li class="<?php echo $s_alur; ?>"><a href="<?php echo base_url('pelayanan/alur'); ?>">Alur Persyaratan</a>
											</li>
											<li class="<?php echo $s_jadwal; ?>"><a href="<?php echo base_url('pelayanan/jadwal_dokter'); ?>">Jadwal Dokter</a></li>
										</ul>
										<!--Dropdown Menu End-->
									</li>
									<li class="<?php echo $s_perpustakaan; ?>"><a href="<?php echo base_url('perpustakaan'); ?>">Perpustakaan</a></li>
									<li class="<?php echo $s_ppid; ?>"><a target="_blank" href="<?php echo base_url('ppid'); ?>">PPID</a></li>
									<li><a href="#">Zona Integritas</a>
										<!--Dropdown Menu Start-->
										<ul>
											<li class="<?php echo $s_sakip; ?>"><a href="<?php echo base_url('zonaintegritas/standar_pelayanan'); ?>">Standar Pelayanan</a></li>
											<li class="dropdown-submenu">
												<a class="test" tabindex="-1" href="#">Survey Kepuasan <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('zonaintegritas/survey_kepuasan/2020'); ?>">2020</a></li>
													<li class="<?php echo $s_ikm; ?>"><a href="<?php echo base_url('zonaintegritas/survey_kepuasan/2021'); ?>">2021</a></li>
												</ul>
											</li>
											<li class="<?php echo $s_sakip; ?>"><a href="<?php echo base_url('zonaintegritas/maklumat'); ?>">Maklumat</a></li>
											<li class="<?php echo $s_sakip; ?>"><a href="<?php echo base_url('zonaintegritas/pakta_integritas'); ?>">Pakta Integritas</a></li>
											<li class="<?php echo $s_sakip; ?>"><a href="<?php echo base_url('zonaintegritas'); ?>">Buku Saku</a></li>
											<li class="<?php echo $s_berita; ?>"><a href="https://forms.gle/3CoUywPK2jtukhen8">Whistleblowing System</a></li>
											<li class="<?php echo $s_sakip; ?>"><a href="<?php echo base_url('zonaintegritas/galeri'); ?>">Galeri</a></li>
										</ul>
										<!--Dropdown Menu End-->
									</li>
									<li class="<?php echo $s_informasi; ?>"><a href="#">Informasi</a>
										<!--Dropdown Menu Start-->
										<ul>
											<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('informasi/berita'); ?>">Berita</a></li>
											<li class="<?php echo $s_ikm; ?>"><a href="<?php echo base_url('informasi/pengumuman'); ?>">Pengumuman</a></li>
											<li class="<?php echo $s_ikm; ?>"><a href="<?php echo base_url('informasi/ikm'); ?>">IKM</a></li>
											<li class="<?php echo $s_mutu; ?>"><a href="<?php echo base_url('informasi/mutu'); ?>">Mutu</a></li>
											<li class="dropdown-submenu">
												<a class="test" tabindex="-1" href="#">SAKIP <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li class="<?php echo ""; ?>"><a href="<?php echo base_url('informasi/sakip/2024'); ?>">Tahun 2024</a></li>
													<li class="<?php echo ""; ?>"><a href="<?php echo base_url('informasi/sakip/2023'); ?>">Tahun 2023</a></li>
												</ul>
											</li>
											<li class="<?php echo $s_sakip; ?>"><a href="<?php echo base_url('informasi/inovasi'); ?>">Inovasi Publik</a></li>
										</ul>
										<!--Dropdown Menu End-->
									</li>
									<li class="<?php echo ""; ?>"><a href="#">Diklat</a>
										<!--Dropdown Menu Start-->
										<ul>
											<li class="dropdown-submenu">
												<a class="test" tabindex="-1" href="#">Pendidikan <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('diklat/pendidikan/alur'); ?>">Alur</a></li>
													<li class="<?php echo $s_ikm; ?>"><a href="<?php echo base_url('diklat/pendidikan/konten'); ?>">Konten</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="test" tabindex="-1" href="#">Pelatihan <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('diklat/pelatihan/alur'); ?>">Alur</a></li>
													<li class="<?php echo $s_ikm; ?>"><a href="<?php echo base_url('diklat/pelatihan/konten'); ?>">Konten</a></li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="test" tabindex="-1" href="#">Penelitian <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li class="<?php echo $s_berita; ?>"><a href="<?php echo base_url('diklat/penelitian/alur'); ?>">Alur</a></li>
													<li class="<?php echo $s_ikm; ?>"><a href="<?php echo base_url('diklat/penelitian/konten'); ?>">Konten</a></li>
												</ul>
											</li>
										</ul>
										<!--Dropdown Menu End-->
									</li>
									<li class="<?php echo $s_profil; ?>"><a style="padding:13px 29px; background: linear-gradient(90.69deg, #273921 10.62%, #4A6F3E 91.86%); letter-spacing: 1px; color:white" href="#">Daftar Online</a>
										<ul>
											<li><a href="https://rsukarsahusadabatu.jatimprov.go.id/daftaronline/">PENDAFTARAN POLI</a></li>
										</ul>
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
				<div class="row row__mobile">
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