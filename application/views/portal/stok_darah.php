<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php $this->load->view('portal/template/header_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets_portal/css/pendukung/pelayanan.css">

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
    <section id="desc__halaman">
      <?php foreach ($unggulan->result() as $row) { ?>
        <div class="container container__padding">
          <h2><?php if ($row->sub_judul == "") {
                echo $title;
              } else {
                echo $row->sub_judul;
              } ?>
          </h2>
          <p>Klik pada salah satu gambar untuk melihat lebih jelas.</p>
          <div class="row mx-0">
            <!--Single Funfactor Area Start-->
            <?php
            $this->db->where('id_pelayanan', $row->id);
            $gmbr = $this->db->get('detail_pelayanan');
            foreach ($gmbr->result() as $img) { ?>
              <?php
              if ($row->sub_judul != null) {
                $judul =  $row->sub_judul;
              } else {
                $judul =  $row->judul;
              }
              $judul = strtolower(preg_replace("/[^a-zA-Z]/", "_", $judul));
              ?>
              <div class="col-md-4 col-sm-12 p-3"><a href="<?php echo base_url('file/pelayanan/' . $judul . '/' . $img->gambar); ?>" data-lightbox="photos">
                  <img class="img-fluid center" style="width: 100%;height: 100%;object-fit: cover;" src="<?php echo base_url('file/pelayanan/' . $judul . '/' . $img->gambar); ?>" alt=""></a>
              </div>
            <?php } ?>
          </div>
          <h4 class="mt-5">Jam Pelayanan:</h4>
          <p><?php echo $row->waktu_pelayanan; ?></p>
          <h4 class="mt-5">Keterangan:</h4>
          <p> <?php echo $row->keterangan; ?></p>
        </div>
      <?php } ?>
    </section>
  </div>
  <!--Brand Area End-->

  <?php $this->load->view('portal/template/footer'); ?>
  <!--Footer Area End-->
  </div>

  <!--Jquery 1.12.4-->
  <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>