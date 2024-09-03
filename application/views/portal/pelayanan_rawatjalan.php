<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php $this->load->view('portal/template/header_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets_portal/css/pendukung/pelayanan_pendukung.css">

</head>

<body>
  <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

  <div class="wrapper">
    <!--Header Area Start-->
    <?php $this->load->view('portal/template/menu'); ?>
    <!--Header Area End-->
    <!--Brand Area Start-->
    <section id="breadcrumb">
      <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
      <div class="breadcrumb__overlay">
        <div class="container container__padding">
          <div class="sub-text">
            <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
            <p><?php echo $title; ?></p>
          </div>
          <h1><?php echo $title; ?></h1>
        </div>
      </div>
    </section>
    <section id="tabs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/anak'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/anak.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/anastesi'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/anastesi.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/bedah_digestif'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/bedahdigestif.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/bedah_plastik'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/bedahplastik.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/bedah_syaraf'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/bedahsyaraf.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/bedah_umum'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/bedahumum.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/bedah_urologi'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/bedahurologi.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/gigi'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/gigi.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/jantung'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/jantung.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/jiwa'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/jiwa.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/kandungan'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/kandungan.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/kulit_dan_kelamin'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/kulitkelamin.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/mata'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/mata.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/mcu'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/mcu.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/orthopaedi'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/orthopaedi.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/paru'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/paru.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/penyakit_dalam'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/penyakitdalam.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/psikologi'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/psikologi.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/rehab_medik'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/rehabmedik.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/syaraf'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/syaraf.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/tht'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/tht.png'); ?>" style="width:100%"></a>
              </div>
            </div>
            <div class="t_cont col-sm-12 col-md-12 col-lg-3">
              <div class="content">
                <a href="<?php echo base_url('pelayanan/detail_rawatjalan/tms_robotic'); ?>"><img src="<?php echo base_url('assets_portal/img/rawatjalan/tms.png'); ?>" style="width:100%"></a>
              </div>
            </div>

            <!-- <nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="btn nav-item nav-link active col-sm-4 col-md-4 col-lg-4" id="nav-home-tab"
									data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-profile"
									aria-selected="false">PENUNJANG MEDIS</a>
								<a class="nav-item nav-link col-sm-4 col-md-4 col-lg-4" id="nav-contact-tab"
									data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
									aria-selected="false">PENUNJANG NON
									MEDIS</a>
							</div>
						</nav> -->
            <!-- <div class="tab-content py-3 px-3 px-sm-0" id="nav-profile">
							<div class="tab-pane fade show active" id="nav-home" role="tabpanel"
								aria-labelledby="nav-home-tab">
								
							</div>

						</div> -->

          </div>
        </div>

    </section>

    <!-- END MAIN -->
  </div>

  <?php $this->load->view('portal/template/footer'); ?>

  </div>

  <!--Jquery 1.12.4-->
  <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>