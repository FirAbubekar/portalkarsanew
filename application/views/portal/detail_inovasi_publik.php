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
                        <p>INOVASI PUBLIK</p>
                    </div>
                    <h1><?php echo $inovasi->judul; ?></h1>
                </div>
            </div>
        </section>

        <section id="desc__halaman">
            <?php foreach ($detail->result() as $row) { ?>
                <div class="container container__padding">
                    <h2 class="col-12"><?php echo $row->judul; ?></h2>
                    <div class="row mx-0">
                        <p class="col-12">
                            <?php echo $row->deskripsi; ?>
                        </p>
                        <div style="width: 100%;">
                            <?php $file = substr($row->file, -4);
                            if ($file == ".pdf") { ?>
                                <div class="column col-md-6 col-sm-12 col-lg-12">
                                    <div class="content">
                                        <embed src="<?php echo base_url('file/inovasi/detail/' . $row->file); ?>" style="width:100%;height:800px;" />
                                    </div>
                                </div>
                            <?php } else {
                            ?>

                                <div class="col-md-6 pt-20">
                                    <img style="width:auto;height:500px;" src="<?php echo base_url('file/inovasi/detail/' . $row->file); ?>" class="gambar" alt="-">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
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