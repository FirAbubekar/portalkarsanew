<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php $this->load->view('portal/template/header_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets_portal/css/pendukung/pelayanan_pendukung.css">

</head>
<style>
</style>

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
            <p>INSTALASI PENUNJANG</p>
          </div>
          <h1>INSTALASI PENUNJANG</h1>
        </div>
      </div>
    </section>
    <section id="tabs">
      <div class="container container__padding">
        <div class="row">
          <div class="col-xs-12">
            <nav>
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="btn nav-item nav-link active col-sm-4 col-md-4 col-lg-4" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-profile" aria-selected="false">PENUNJANG MEDIS</a>
                <a class="nav-item nav-link col-sm-4 col-md-4 col-lg-4" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">PENUNJANG NON
                  MEDIS</a>
              </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-profile">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/medis/rehab_medik'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/rehab.png'); ?>" style="width:100%"></a>
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/medis/gizi_dan_boga'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/gizi.png'); ?>" style="width:100%"></a>
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/medis/laboratorium'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/lab.png'); ?>" style="width:100%"></a>
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/medis/farmasi'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/farmasi.png'); ?>" style="width:100%"></a>
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/medis/instalasi_bedah'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/bedah.png'); ?>" style="width:100%"></a>
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/medis/radiologi'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/radiologi.png'); ?>" style="width:100%"></a>
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/medis/patologi_anatomi'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/patologi.png'); ?>" style="width:100%"></a>
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/medis/ambulans'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/ambulans.png'); ?>" style="width:100%"></a>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/nonmedis/sanitasi'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/sanitasi.png'); ?>" style="width:100%">
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/nonmedis/sarana_dan_prasarana'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/ips.png'); ?>" style="width:100%">
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/nonmedis/elektromedis'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/elektromedis.png'); ?>" style="width:100%">
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/nonmedis/sistem_informasi'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/sisteminformasi.png'); ?>" style="width:100%">
                  </div>
                </div>
                <div class="t_cont col-sm-12 col-md-12 col-lg-3">
                  <div class="content">
                    <a href="<?php echo base_url('pelayanan/nonmedis/laundry_dan_cssd'); ?>"><img src="<?php echo base_url('assets_portal/img/penunjang/laundry.png'); ?>" style="width:100%">
                  </div>
                </div>
              </div>

            </div>

          </div>
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