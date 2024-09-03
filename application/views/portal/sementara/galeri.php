<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('portal/template/header_css'); ?>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_portal/css/pendukung/pelayanan.css">

</head>


<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <?php $this->load->view('portal/template/menu'); ?>
        <!-- Navbar End -->


        <!-- Header End -->
        <section id="breadcrumb">
            <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
            <div class="breadcrumb__overlay">
                <div class="container container__padding">
                    <div class="sub-text">
                        <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
                        <p>Zona Integritas</p>
                    </div>
                    <h1>GALERI</h1>
                </div>
            </div>
        </section>
        <!-- Header End -->


        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                    <h2 style="color: #ff8906;" class="text-left mb-5 wow fadeInUp" data-wow-delay="0.1s">Apel Akbar Zona Integritas RSUD Karsa Husada Batu</h2>
                    <hr style="border-top: 5px solid #888;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <!-- <a class="cat-item rounded p-4"> -->
                                    <div class="col-lg-4 col-sm-12 wow fadeInUp" style="margin-bottom: 30px;" data-wow-delay="0.1s">
                                        <img src="https://rsukarsahusadabatu.jatimprov.go.id/file/zonaintegritas/galeri/1.JPG" style="width: 100%;" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-4 col-sm-12 wow fadeInUp" style="margin-bottom: 30px;" data-wow-delay="0.1s">
                                        <img src="https://rsukarsahusadabatu.jatimprov.go.id/file/zonaintegritas/galeri/2.JPG" style="width: 100%;" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-4 col-sm-12 wow fadeInUp" style="margin-bottom: 30px;" data-wow-delay="0.1s">
                                        <img src="https://rsukarsahusadabatu.jatimprov.go.id/file/zonaintegritas/galeri/3.JPG" style="width: 100%;" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-4 col-sm-12 wow fadeInUp" style="margin-bottom: 30px;" data-wow-delay="0.1s">
                                        <img src="https://rsukarsahusadabatu.jatimprov.go.id/file/zonaintegritas/galeri/4.JPG" style="width: 100%;" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-4 col-sm-12 wow fadeInUp" style="margin-bottom: 30px;" data-wow-delay="0.1s">
                                        <img src="https://rsukarsahusadabatu.jatimprov.go.id/file/zonaintegritas/galeri/5.JPG" style="width: 100%;" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-4 col-sm-12 wow fadeInUp" style="margin-bottom: 30px;" data-wow-delay="0.1s">
                                        <img src="https://rsukarsahusadabatu.jatimprov.go.id/file/zonaintegritas/galeri/6.JPG" style="width: 100%;" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-4 col-sm-12 wow fadeInUp" style="margin-bottom: 30px;" data-wow-delay="0.1s">
                                        <img src="https://rsukarsahusadabatu.jatimprov.go.id/file/zonaintegritas/galeri/7.JPG" style="width: 100%;" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-4 col-sm-12 wow fadeInUp" style="margin-bottom: 30px;" data-wow-delay="0.1s">
                                        <img src="https://rsukarsahusadabatu.jatimprov.go.id/file/zonaintegritas/galeri/10.JPG" style="width: 100%;" alt="" srcset="">
                                    </div>
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- Footer Start -->
        <?php $this->load->view('portal/template/footer'); ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>