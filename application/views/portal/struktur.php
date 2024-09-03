<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php $this->load->view('portal/template/header_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets_portal/css/pendukung/struktur.css">

</head>

<body>
  <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

  <div class="wrapper">
    <!--Header Area Start-->
    <?php $this->load->view('portal/template/menu'); ?>
    <!--Header Area End-->
    <!--Slider Area Start-->


    <!--Brand Area Start-->
    <section id="breadcrumb">
      <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
      <div class="breadcrumb__overlay">
        <div class="container container__padding">
          <div class="sub-text">
            <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
            <p>Struktur Organisasi</p>
          </div>
          <h1>STRUKTUR ORGANISASI</h1>
        </div>
      </div>
    </section>
    <section id="desc__halaman">
      <div class="container container__padding pb-1">
        <h3>Bagan Organisasi</h3>
        <p>Klik pada salah satu bagan untuk melihat lebih jelas.</p>
        <div class="row">
          <div class="col-sm-1 col-md-4"> <a href="<?php echo base_url('assets_portal/img/SKSOTKinternalRSKH-1.jpg') ?>" data-lightbox="photos">
              <img class="img-fluid center" src="<?php echo base_url('assets_portal/img/SKSOTKinternalRSKH-1.jpg') ?>">
            </a></div>
          <div class="col-sm-1 col-md-4"><a href="<?php echo base_url('assets_portal/img/gambar2.jpg') ?>" data-lightbox="photos">
              <img class="img-fluid" src="<?php echo base_url('assets_portal/img/gambar2.jpg') ?>">
            </a></div>
          <div class="col-sm-1 col-md-4"><a href="<?php echo base_url('file/struktur/struktur.png') ?>" data-lightbox="photos">
              <img class="img-fluid " src="<?php echo base_url('file/struktur/struktur.png') ?>">
            </a></div>
        </div>
      </div>
    </section>

    <section id="desc__halaman">
      <div class="container container__padding pb-1">
        <h3>Detail Struktur Organisasi</h3>
        <?php
        $this->db->where('urutan', '0');
        $dbdir = $this->db->get('detail_struktur')->row();
        ?>
        <div class="row mb-5 mx-auto">
          <div class="col-sm-12 col-md-4 mx-auto">
            <div class="card__struktur">
              <div class="card__img_container">
                <img src="<?php echo base_url('file/struktur/' . $dbdir->gambar); ?>" class="card__img" alt="Artikel Karsa Husada Batu">
                <div class="card__txt_container">
                  <h4 class="m-0"><?php echo $dbdir->nama; ?></h4>
                  <p class="card__jabatan"><?php echo $dbdir->jabatan; ?></p>
                  <a href="<?php echo $dbdir->link; ?>" target="_blank" rel="noopener noreferrer"><span class="label label-warning" style="color: black;"><?php echo $dbdir->title; ?></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- END GRID -->
        <div class="row mx-0">
          <?php foreach ($struktur->result() as $row) { ?>
            <div class="col-sm-12 col-md-3 mb-5">
              <div class="card__struktur">
                <div class="card__img_container">
                  <img src="<?php echo base_url('file/struktur/' . $row->gambar); ?>" class="card__img" alt="" style="width:100%">
                  <div class="card__txt_container">
                    <h4 class="m-0"><?php echo $row->nama; ?></h4>
                    <p class="card__jabatan"><?php echo $row->jabatan; ?></p>
                    <?php if($row->title!=""||$row->link!=""){?>
                      <a href="<?php echo $row->link; ?>" target="_blank" rel="noopener noreferrer"><span class="label label-warning" style="color: black;">LHKASN</span></a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <!-- END GRID -->
      </div>
    </section>

    <!--Brand Area End-->
    <?php $this->load->view('portal/template/footer'); ?>
    <!--Footer Area End-->
  </div>

  <!--Jquery 1.12.4-->
  <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>