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
    <!--Brand Area Start-->
    <section id="breadcrumb">
      <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
      <div class="breadcrumb__overlay">
        <div class="container container__padding">
          <div class="sub-text">
            <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
            <p>Visi Misi</p>
          </div>
          <h1>Visi Misi</h1>
        </div>
      </div>
    </section>

    <?php foreach ($visimisi->result() as $row) { ?>
      <section id="desc__halaman">
        <?php if ($row->judul == "VISI") { ?>
          <div class="container container__padding" style="padding-bottom:0 !important;">
          <?php } else { ?>
            <div class="container container__padding"> <?php } ?>
            <h1><?php echo $row->judul; ?></h1>
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