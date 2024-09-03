<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php $this->load->view('portal/template/header_css'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
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

    <section id="breadcrumb">
      <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
      <div class="breadcrumb__overlay">
        <div class="container container__padding">
          <div class="sub-text">
            <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
            <p>SEJARAH</p>
          </div>
          <h1>SEJARAH</h1>
        </div>
      </div>
    </section>
    <section class="design-section">
      <div class="timeline">
        <?php
        $i = '0';
        foreach ($sejarah->result() as $row) {
          if ($row->gambar != null) {
            $gambar = "<br><img src=" . base_url('file/sejarah/' . $row->gambar) . " alt='' width='100%'>";
          }
          if ($i % 2 == 0) {
            echo '<div class="timeline-empty">
                  </div>
                  <div class="timeline-middle">
                    <div class="timeline-circle"></div>
                  </div>
                  <div class="timeline-component timeline-content">
                    <h3>Tahun ' . $row->tahun . '</h3>
                    ' . $row->deskripsi . '
                    ' . $gambar . '
                  </div>';
          } else {
            echo '<div class="timeline-component timeline-content">
                    <h3>Tahun ' . $row->tahun . '</h3>
                    ' . $row->deskripsi . '
                    ' . $gambar . '
                  </div>
                  <div class="timeline-middle">
                    <div class="timeline-circle"></div>
                  </div>
                  <div class="timeline-empty">
                  </div>';
          }
          $i++;
        } ?>
      </div>
    </section>

    <!--Brand Area End-->

    <?php  $this->load->view('portal/template/footer'); ?>
    <!--Footer Area End-->
    </div>

    <!--Jquery 1.12.4-->
    <script src="<?php echo base_url();?>assets_portal/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets_portal/js/vendor/jquery-1.12.4.min.js"></script>
    <!--Waypoints-->
    <script src="<?php echo base_url();?>assets_portal/js/waypoints.min.js"></script>
    <!--Counterup-->
    <script src="<?php echo base_url();?>assets_portal/js/jquery.counterup.min.js"></script>
    <!--Carousel-->
    <script src="<?php echo base_url();?>assets_portal/js/owl.carousel.min.js"></script>
    <!--Meanmenu-->
    <script src="<?php echo base_url();?>assets_portal/js/jquery.meanmenu.min.js"></script>
    <!--Instafeed-->
    <script src="<?php echo base_url();?>assets_portal/js/instafeed.min.js"></script>
    <!--Datepicker-->
    <script src="<?php echo base_url();?>assets_portal/js/jquery.datepicker.min.js"></script>
    <!--Calendar-->
    <script src="<?php echo base_url();?>assets_portal/js/zabuto-calendar.min.js"></script>
    <!--ScrollUp-->
    <script src="<?php echo base_url();?>assets_portal/js/jquery.scrollUp.min.js"></script>
    <!--Wow-->
    <script src="<?php echo base_url();?>assets_portal/js/wow.min.js"></script>
    <!--Venobox-->
    <script src="<?php echo base_url();?>assets_portal/js/venobox.min.js"></script>
    <!--Popper-->
    <script src="<?php echo base_url();?>assets_portal/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="<?php echo base_url();?>assets_portal/js/bootstrap.min.js"></script>
    <!--Plugins-->
    <script src="<?php echo base_url();?>assets_portal/js/plugins.js"></script>
    <!--Main Js-->
    <script src="<?php echo base_url();?>assets_portal/js/main.js"></script>
</body>

</html>