<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php $this->load->view('portal/template/header_css'); ?>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_portal/css/pendukung/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
  <!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function() {
      $('#carousel-dokter').owlCarousel({
        navigation : true,
        items: 4,
        loop: true,
        margin: 20,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          992: {
            items: 3
          },
          1200: {
            items: 4
          }
        }
      })
      $('#carousel-tautan').owlCarousel({
        navigation : true,
        items: 11,
        loop: true,
        margin: 20,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 3
          },
          768: {
            items: 4
          },
          992: {
            items: 5
          },
          1200: {
            items: 8
          }
        }
      })
      $("#collapseMenu").collapse({
        "toggle": false,
        'parent': '#navaccordion'
      });
      $("#collapseQuickLinks").collapse({
        "toggle": false,
        'parent': '#navaccordion'
      });
    });
  </script>
</head>

<body>
  <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

  <div class="wrapper">
    <!--Header Area Start-->
    <?php $this->load->view('portal/template/menu'); ?>
    <!--Header Area End-->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
      <!-- <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol> -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class=" d-block w-100 h-100" style="object-fit: cover;" src="<?php echo base_url(); ?>assets_portal/img/slider/bg1.jpg">
          <div class=" overlay">
            <div class="container">
              <div class="text-block">
                <h2 class="title">Selamat datang di RSUD Karsa Husada Batu</h2>
                <p class="sub_title">Rumah Sakit Umum Karsa Husada Batu selalu memberi pelayanan prima agar menjadi rumah sakit pilihan utama masyarakat khususnya di Kota Batu</p>
                <div class="row__button">
                  <button href="https://rsukarsahusadabatu.jatimprov.go.id/daftaronline" class="btn1__slide">Daftar Online</button>
                  <button href="#" class="btn2__slide">Jadwal Dokter</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class=" d-block w-100 h-100" style="object-fit: cover;" src="<?php echo base_url(); ?>assets_portal/img/slider/bg2.jpg">
          <div class=" overlay">
            <div class="container">
              <div class="text-block">
                <h2 class="title">Lebih Mudah Mengantri Menggunakan JKN Mobile</h2>
                <p class="sub_title">Kini JKN MOBILE telah menyediakan berbagai fitur yang mempermudah dalam mengakses kebutuhan terkait BPJS sampai antri online.</p>
                <div class="row__button">
                  <button href="https://rsukarsahusadabatu.jatimprov.go.id/daftaronline" class="btn1__slide">Daftar Online</button>
                  <button href="<?php echo base_url('pelayanan/jadwal_dokter'); ?>" class="btn2__slide">Jadwal Dokter</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class=" d-block w-100 h-100" style="object-fit: cover;" src="<?php echo base_url(); ?>assets_portal/img/slider/bg3.jpg">
          <div class=" overlay">
            <div class="container">
              <div class="text-block">
                <h2 class="title">Pelayanan Rumah Sakit Terbaik di Kota Batu</h2>
                <p class="sub_title">RSUD Karsa Husada Batu selalu memberikan pelayanan dan teknologi terbaik bagi setiap pasiennya</p>
                <div class="row__button">
                  <button href="https://rsukarsahusadabatu.jatimprov.go.id/daftaronline" class="btn1__slide">Daftar Online</button>
                  <button href="#" class="btn2__slide">Jadwal Dokter</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class=" d-block w-100 h-100" style="object-fit: contain;" src="<?php echo base_url(); ?>assets_portal/img/slider/zi.jpeg">
        </div>

      </div>
      <a class="carousel-control-prev left carousel-control" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next right carousel-control" href="#carouselExampleIndicators" role="button" data-slide="next">
        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <section id="shortcut">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="blurb__shortcut">
            <div class="icon">
              <img src="<?php echo base_url(); ?>assets_portal/img/icon/stethoscope.png" alt="icon stethoscope" />
            </div>
            <div class="content">
              <h4>Rawat Jalan</h4>
              <p>Kami melayani rawat jalan dengan jumlah 22 Poli dan peralatan yang lengkap.</p>
              <a href="<?php echo base_url('pelayanan/rawat_jalan'); ?>">
                ➜ <b>
                  Layanan Rawat Jalan
                </b>
              </a>
            </div>
          </div>
          <img src="<?php echo base_url(); ?>assets_portal/img/icon/stethoscope.png" alt="icon stethoscope" class="img__blurb" />
        </div>
        <div class="col-md-4">
          <div class="blurb__shortcut">
            <div class="icon">
              <img src="<?php echo base_url(); ?>assets_portal/img/icon/bed.png" alt="icon bed" />
            </div>
            <div class="content">
              <h4>Rawat Inap</h4>
              <p>Tersedia banyak ruang rawat onap dengan fasilitas yang lengkap dan tentunya memadai.</p>
              <a href="<?php echo base_url('pelayanan/rawat_inap'); ?>">
                ➜ <b>
                  Layanan Rawat Inap
                </b> </a>
            </div>
          </div>
          <img src="<?php echo base_url(); ?>assets_portal/img/icon/bed.png" alt="icon bed" class="img__blurb" />
        </div>
        <div class="col-md-4">
          <div class="blurb__shortcut">
            <div class="icon">
              <img src="<?php echo base_url(); ?>assets_portal/img/icon/healthcare.png" alt="icon healthcare" />
            </div>
            <div class="content">
              <h4>Instalasi Gawat Darurat</h4>
              <p>Dalam setiap momentum tenaga medis kami selalu sigap dan tanggap melayani anda.</p>
              <a href="tel:596898">☎ <b>(0341) 596898</b></a>
            </div>
          </div>
          <img src="<?php echo base_url(); ?>assets_portal/img/icon/healthcare.png" alt="icon healthcare" class="img__blurb" />
        </div>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="container container__padding">
      <div class="row">
        <div class="col-md-8">
          <h1>Menjadi Rumah Sakit Pilihan Utama Masyarakat</h1>
          <p><strong>
              Menyediakan semua aspek praktik medis untuk seluruh keluarga Anda, termasuk pemeriksaan umum atau membantu Anda yang cedera.
            </strong></p>
          <p>Kami hadir untuk memberikan pelayanan kesehatan terbaik dengan memprioritaskan kebutuhan pasien dan keluarga. Dengan tujuan utama untuk menjadi rumah sakit pilihan utama masyarakat khususnya Kota Batu. Kami selalu memberikan layanan kesehatan sesuai standar rumah sakit agar memberikan pengalaman terbaik bagi pasien.</p>
          <a href="<?php echo base_url('profil/visimisi'); ?>">
            <button class="btn__main">Visi Misi Kami</button>
          </a>
        </div>
        <div class="col-md-4">
          <img src="<?php echo base_url(); ?>assets_portal/img/bg/image__about.jpg" alt="image about karsa">
          <div class="blurb__about">
            <img src="<?php echo base_url(); ?>assets_portal/img/icon/healthcare-icon.svg" alt="healthcare">
            <p>Selalu memberikan yang terbaik pada setiap keluarga.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="dokterkami">
    <div class="container container__padding">
      <div class="row row__judul">
        <h1>Dokter Karsa Husada</h1>
        <p>Semua dokter dan staf kami memiliki keterampilan orang yang luar biasa serta terlatih untuk membantu Anda dan keluarga</p>
      </div>
      <div class="row">
        <div id="carousel-dokter" class="owl-carousel">
          <div class="item">
            <img src="<?php echo base_url(); ?>assets_portal/img/dokter/drg__priyati_esti_utami_,sp_ort.jpg">
            <h5>drg. Priyati Esti Utami, Sp.Ort</h5>
            <p>Poli Gigi Ortodonti</p>
          </div>
          <div class="item">
            <img src="<?php echo base_url(); ?>assets_portal/img/dokter/dr__jenadi__sp_bm.jpg">
            <h5>dr. Jenadi. Sp.BM</h5>
            <p>Poli Bedah Mulut</p>
          </div>
          <div class="item">
            <img src="<?php echo base_url(); ?>assets_portal/img/dokter/dr__novvini_miriam_suaebo,_m_kkk.jpg">
            <h5>dr. Novvini Miriam Suaebo, M.KK</h5>
            <p>Poli MCU (Medical Check Up)</p>
          </div>
          <div class="item">
            <img src="<?php echo base_url(); ?>assets_portal/img/dokter/dr__bambang_widiwanto,_sp__ot.jpg">
            <h5>dr. Bambang Widiwanto, Sp. OT</h5>
            <p>Poli Orthopaedi & Traumatologi</p>
          </div>
        </div>
        <p>Cari tahu jadwal dokter di RSUD Karsa Husada dengan cara klik <a href="<?php echo base_url('pelayanan/jadwal_dokter'); ?>"><strong>tulisan ini.</strong></a></p>

      </div>
    </div>
  </section>

  <section id="jkn">
    <div class="container container__padding">
      <div class="row" id="id__jkn">
        <div class="col-md-4">
          <img src="<?php echo base_url(); ?>assets_portal/img/jkn_mobile_mockup_compres.png" alt="image about karsa">
        </div>
        <div class="col-md-8">
          <h1>Permudah Mengantri Menggunakan JKN Mobile</h1>
          <p><strong>
              Kini JKN MOBILE telah menyediakan berbagai fitur yang mempermudah dalam mengakses kebutuhan terkait BPJS sampai antri online.
            </strong></p>
          <p>Aplikasi Mobile JKN merupakan aplikasi yang diluncurkan oleh BPJS Kesehatan yang memungkinkan peserta JKN mengakses layanan BPJS, seperti cek tagihan, mengubah data, dan sebagainya, langsung dari ponsel.</p>
          <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile">
            <img src="<?php echo base_url(); ?>assets_portal/img/google_play_download_logo.png" alt="image about karsa">
          </a>
          <a href="https://apps.apple.com/id/app/mobile-jkn/id1237601115">
            <img src="<?php echo base_url(); ?>assets_portal/img/app_store_download_logo.png" alt="image about karsa">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="blogberanda">
    <div class="container container__padding">
      <div class="row row__judul">
        <h1>Kabar Terbaru</h1>
        <p>Hasil dari liputan setiap kegiatan maupun penyuluhan secara onlline oleh staf rumah sakit untuk diketahui masyarakat luas</p>
      </div>
      <div class="row">
        <!--Column Blog Start-->
        <?php foreach ($berita->result() as $row) {
          $caption = substr($row->deskripsi, 0, 100);
        ?>
          <div class="col-md-4">
            <div class="blog-box">
              <div class="blog-img-container">
                <?php if ($row->kategori == "video") { ?>
                  <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c545.png" class="blog-img" alt="Artikel Karsa Husada Batu">
                <?php } else { ?>
                  <img src="<?php echo base_url('file/berita/' . $row->image); ?>" class="blog-img" alt="Artikel Karsa Husada Batu">
                <?php } ?>
              </div>
              <div class="blog-container">
                <h3 class="blog-title"><?php echo substr($row->judul, 0, 50); ?>...</h3>
                <!-- <p class="blog-date-desc"><strong>Tanggal Terbit: </strong><?php echo date('d F Y', strtotime($row->tanggal)); ?></p> -->
                <p class="blog-date-desc"><?php echo trim(preg_replace('/<[^>]*>/', '', $caption)); ?>...</p>
                <a href="<?php echo base_url('informasi/readmore/' . $row->id); ?>">
                  <button class="btn__main">Baca Selengkapnya</button>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
        <!--Column Blog End-->
      </div>
    </div>
  </section>

  <section id="jkn">
    <div class="container container__padding">
      <div class="row" id="id__jkn" style="padding-bottom: 40px;">
        <div class="col-md-4">
          <img src="<?php echo base_url(); ?>assets_portal/img/icon-pengumuman.png.png" alt="image about karsa">
        </div>
        <div class="col-md-8">
          <h1>Open Recruitmen Pegawai BLUD Non PNS 2024</h1>
          <p><strong>
              Informasi Lebih Lanjut Silahkan Kunjungi Link Dibawah Ini
            </strong></p><br>
            <button href="https://rsukarsahusadabatu.jatimprov.go.id/daftaronline" class="btn1__slide">Daftar</button>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container container__padding">
      <div class="row row__judul">
        <h1>Agenda Kegiatan</h1>
        <p>Kalendar Kegiatan RSUD Karsa Husada</p>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12">
          <!--Single Timeline Strat-->
          <?php $this->load->view('portal/calender'); ?>
          <!--Single Timeline End-->
        </div>
      </div>
    </div>
  </section>

  <section id="tautanlain">
    <div class="container container__padding">
      <div class="row row__judul">
        <h1>Tautan Lain</h1>
        <p>Beberapa tautan dari daerah Kota Batu yang bisa anda akses dengan klik pada gambar dibawah ini</p>
      </div>
      <div class="row">
        <div id="carousel-tautan" class="row">
        <!-- <div id="carousel-tautan" class="owl-carousel owl-theme"> -->
          <div class="item col-md-2">
            <a target="_blank" href="https://faskes.bpjs-kesehatan.go.id/aplicares/#/app/dashboard">
              <img src="<?php echo base_url(); ?>assets_portal/img/tautan/BPJS.png" style="width:100%" class="hover-shadow cursor">
            </a>
          </div>
          <div class="item col-md-2">
            <img src="<?php echo base_url(); ?>assets_portal/img/tautan/BPJS_TK.png" style="width:100%" class="hover-shadow cursor">
          </div>
          <div class="item col-md-2">
            <img src="<?php echo base_url(); ?>assets_portal/img/tautan/BIAKES_MASKIN.png" style="width:100%" class="hover-shadow cursor">
          </div>
          <div class="item col-md-2">
            <img src="<?php echo base_url(); ?>assets_portal/img/tautan/JAMPERSAL_BATU.png" style="width:100%" class="hover-shadow cursor">
          </div>
          <div class="item col-md-2">
            <img src="<?php echo base_url(); ?>assets_portal/img/tautan/JAMPERSAL_KABMALANG.png" style="width:100%" class="hover-shadow cursor">
          </div>
          <div class="item col-md-2">
            <img src="<?php echo base_url(); ?>assets_portal/img/tautan/JASA_RAHARJA.png" style="width:100%" class="hover-shadow cursor">
          </div>
          <div class="item col-md-2">
            <a target="_blank" href="https://www.kpk.go.id/id/"><img src="<?php echo base_url(); ?>assets_portal/img/tautan/KPK.png" style="width:100%" class="hover-shadow cursor"></a>
          </div>
          <div class="item col-md-2">
            <a target="_blank" href="https://lpse.jatimprov.go.id/eproc4"><img src="<?php echo base_url(); ?>assets_portal/img/tautan/LPSE_JATIM.png" style="width:100%" class="hover-shadow cursor"></a>
          </div>
          <div class="item col-md-2">
            <a target="_blank" href="http://lpse.batukota.go.id/eproc4"><img src="<?php echo base_url(); ?>assets_portal/img/tautan/LPSE_BATU.png" style="width:100%" class="hover-shadow cursor"></a>
          </div>
          <div class="item col-md-2">
            <a target="_blank" href="https://www.perpusnas.go.id/index.php?lang=id"><img src="<?php echo base_url(); ?>assets_portal/img/tautan/PERPUSTAKAAN.png" style="width:100%" class="hover-shadow cursor"></a>
          </div>
          <div class="item col-md-2">
            <a target="_blank" href="<?php echo base_url('etik_penelitian') ?>"><img src="<?php echo base_url(); ?>assets_portal/img/tautan/SIM-EPK.png" style="width:100%" class="hover-shadow cursor"></a>
          </div>
          <div class="item col-md-2">
            <a target="_blank" href="https://www.lapor.go.id/tentang"><img src="<?php echo base_url(); ?>assets_portal/img/tautan/span_lapor.jpg" style="width:100%" class="hover-shadow cursor"></a>
          </div>
        </div>
        <p>Geser untuk melihat layanan lainnya.</p>
      </div>
    </div>
  </section>

  <!--Footer Area Start-->
  <?php $this->load->view('portal/template/footer'); ?>
  <!--Footer Area End-->

  <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>
