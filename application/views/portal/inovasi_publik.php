<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('portal/template/header_css'); ?>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_portal/css/pendukung/struktur.css">

</head>

<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="wrapper">
        <!--Header Area Start-->
        <?php $this->load->view('portal/template/menu'); ?>
        <!--Slider Area Start-->
        <!--Brand Area Start-->
        <section id="breadcrumb">
            <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
            <div class="breadcrumb__overlay">
                <div class="container container__padding">
                    <div class="sub-text">
                        <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
                        <p>INOVASI PUBLIK</p>
                    </div>
                    <h1>INOVASI PUBLIK</h1>
                </div>
            </div>
        </section>

        <div class="row" style="padding-top: 20px; margin-left: 15%;margin-right: 15%;">
          <?php foreach ($inovasi->result() as $row) { ?>
            <div class="col-sm-12 col-md-6 mb-5" style="padding: 0px;padding-left: 10px;padding-right: 10px;">
            <a href="<?php echo base_url('informasi/detail_inovasi/'.$row->id); ?>">
              <div class="card__struktur" style="height: 500px;">
                <div class="card__img_container" style="height: 500px;">
                  <img src="<?php echo base_url('file/inovasi/' . $row->gambar); ?>" class="card__img" alt="" style="width:100%;height: 500px;">
                </div>
                <div>
                <div class="card__txt_container" style="width: 97%;padding-left: 10px;">
                    <h3 class="m-0"><b><?php echo $row->judul; ?></b></h3>
                    <hr>
                    <p class=""><?php echo $row->deskripsi; ?></p>
                  </div>
                </div>
              </div>
              </a>
            </div>
          <?php } ?>
        </div>

    </div>

    <!--Brand Area End-->

    <?php $this->load->view('portal/template/footer'); ?>
    <!--Footer Area End-->
    </div>

    <!--Jquery 1.12.4-->
    <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>