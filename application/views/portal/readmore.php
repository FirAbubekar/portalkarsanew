<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('portal/template/header_css'); ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_portal/css/pendukung/read_more.css">
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="wrapper">
    <!--Header Area Start-->
    <?php $this->load->view('portal/template/menu'); ?>
    <!--Header Area End-->

    <div class="latest-blog-area pt-120blog">
        <img src="<?php echo base_url(); ?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
    </div>
    <div class="main">
    <style>
        .detailnews{
            height:'500px';
        }
    </style>
        <div class="row">
            <div class="column col-md-12 col-sm-12 col-lg-10">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <center>
                        <h1 style="color: #105b50"><?php echo $read->judul; ?></h1>
                        <hr>
                        <div class="datenews">
                            <center>
                                <p><?php echo $read->penulis; ?>, <?php echo date('d-m-Y', strtotime($read->tanggal)); ?></p>
                            </center>
                        </div>
                    </center>
                    <div class="content">
                        <?php if($read->kategori != "video"){
                         ?>
                        <div class="img_detail">
                            <img class="center" src="<?php echo base_url('file/berita/'.$read->image); ?>">
                        </div>
                        <?php } ?>

                        <div class="detailnews">
                            <?php if($read->kategori == "video"){
                             ?>
                            <style>
                            .detailnews {
    line-height: 40px;
    letter-spacing: 0.01em;
    padding-top: 50px;
    font-family: Nunito;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 35px;
    letter-spacing: 0.01em;
    color: #4D4D4D;
    height: 700px;
}
                            </style>
                                <?php echo $read->link; ?>
                            <?php } ?>
                            <p>
                                <?php echo $read->deskripsi; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recent col-md-12 col-sm-12 col-lg-2">
                <h4>Berita Terkait</h4>
                <hr class="recenthr">
                <?php foreach ($recent->result() as $row) { ?>
                <div>
                        <div>
                            <p>
                                <a href="<?php echo base_url('informasi/readmore/'.$row->id); ?>">
                                <b><?php echo substr($row->judul, 0,50); ?></b>
                                </a>
                                <br>
                                <small><?php echo $row->penulis; ?>, <?php echo date('d-m-Y', strtotime($row->tanggal)); ?></small>
                            </p>
                        </div>
                        <hr class="recenthr">
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- END GRID -->

    </div>
    <?php $this->load->view('portal/template/footer'); ?>
    <!--Footer Area End-->
</div>

<!--Jquery 1.12.4-->
<?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>
