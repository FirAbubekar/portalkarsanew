<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('portal/template/header_css'); ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_portal/css/pendukung/kepuasan.css">
</head>

<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="wrapper">
        <!--Header Area Start-->
        <?php $this->load->view('portal/template/menu'); ?>
        <!--Header Area End-->

        <section id="breadcrumb">
            <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
            <div class="breadcrumb__overlay">
                <div class="container container__padding">
                    <div class="sub-text">
                        <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
                        <p>PENGUMUMAN</p>
                    </div>
                    <h1>PENGUMUMAN</h1>
                </div>
            </div>
        </section>


        <div class="title">

            <hr>
        </div>
        <div class="main">
            <!-- END GRID -->
            <div class="row">
                <!-- END GRID -->
                <div class="d_misi">
                    <div class="l_file col-sm-12 col-md-12 col-lg-12">
                        <h3>REKRUTMEN RSUD KARSA HUSADA 2024</h3>
                        <hr>
                        <p><b>RSUD Karsa Husada Batu membuka kesempatan untuk bergabung bersama kami melalui seleksi penerimaan Pegawai BLUD Non PNS RSUD Karsa Husada Batu dengan kualifikasi dan persyaratan sebagai berikut :</b></p>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>PENGUMUMAN LOWONGAN KERJA</h4>
                                <div class="col-md-4">
                                    <a href="<?php echo 'https://rsukarsahusadabatu.jatimprov.go.id/file/pengumuman/FINAL_PENGUMUMAN_REKRUTMEN_RSUDKARSAHUSADA_2024.pdf'; ?>" class="center" alt="" download><img src="<?php echo 'https://rsukarsahusadabatu.jatimprov.go.id/assets/document-management-big.png'; ?>" style="width: 180px;height: 180px;" alt=""></a>
                                    <h5><b>DOWNLOAD LOWONGAN KERJA</b></h5>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <hr>
                            <p><b>Serta melampirkan beberapa dokumen berikut</b></p>
                            <hr>
                            </div>
                            <div class="col-md-12">
                                <h4>DOKUMEN LAMPIRAN</h4>
                                <hr>
                                <div class="col-md-6">
                                    <a href="<?php echo 'https://rsukarsahusadabatu.jatimprov.go.id/file/pengumuman/Lampiran_1_surat_lamaran.doc'; ?>" class="center" alt="" download><img src="<?php echo 'https://rsukarsahusadabatu.jatimprov.go.id/assets/document-management-big.png'; ?>" style="width: 180px;height: 180px;" alt=""></a>
                                    <h5><b>DOWNLOAD SURAT LAMARAN</b></h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php echo 'https://rsukarsahusadabatu.jatimprov.go.id/file/pengumuman/Lampiran_2_CV.docx'; ?>" class="center" alt="" download><img src="<?php echo 'https://rsukarsahusadabatu.jatimprov.go.id/assets/document-management-big.png'; ?>" style="width: 180px;height: 180px;" alt=""></a>
                                    <h5><b>DOWNLOAD CV</b></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END GRID -->
            </div>
        </div>

        <?php $this->load->view('portal/template/footer'); ?>
        <!--Footer Area End-->
    </div>
    <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>