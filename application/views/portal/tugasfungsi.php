<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php $this->load->view('portal/template/header_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_portal/css/pendukung/profil.css">

</head>

<body>
  <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

  <div class="wrapper">
    <!--Header Area Start-->
    <?php $this->load->view('portal/template/menu'); ?>

    <?php foreach ($tugasfungsi->result() as $row) { ?>
      <section id="breadcrumb">
        <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
        <div class="breadcrumb__overlay">
          <div class="container container__padding">
            <div class="sub-text">
              <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
              <p><?php echo $row->subjudul; ?></p>
            </div>
            <h1><?php echo $row->subjudul; ?></h1>
          </div>
        </div>
      </section>

      <section id="desc__halaman">
        <div class="container container__padding">
          <p><?php echo $row->deskripsi; ?></p>
        </div>
      </section>
    <?php } ?>
    <!--Brand Area End-->
    <?php $this->load->view('portal/template/footer'); ?>
    <!--Footer Area End-->
  </div>
  <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>
