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
    <style>
        input {
            height: 20px;
        }
    </style>
    <div class="wrapper">
        <!--Header Area Start-->
        <?php $this->load->view('portal/template/menu'); ?>
        <!--Header Area End-->
        <!--Brand Area Start-->
        <div class="latest-blog-area pt-120blog">
            <img src="<?php echo base_url(); ?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
        </div>
        <div class="fun-factor-area bg-img ">
            <div class="container">
                <div class="ruangan">
                    <?php $flash_data = $this->session->flashdata();
                    if (isset($flash_data["error"])) {
                        echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" . $flash_data["error"] . "</div>";
                    } elseif (isset($flash_data["success"])) {
                        echo "<script>$('#modal_theme_info').modal('show');</script>";
                        echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" . $flash_data["success"] . "</div>";
                    } elseif (isset($flash_data["success_batal"])) {
                        echo "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" . $flash_data["success_batal"] . "</div>";
                    }
                    ?>
                    <h3>FORM PERMOHONAN INFORMASI</h3>
                    
                </div>
                <div class="describe">
                    <div class="describe">

                        <div class="d_ket">
                            <form action="<?php echo base_url('ppid/save_pengaduan'); ?>" method="post">
                                <fieldset>
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="jam">Identitas Pelapor : </div>
                                            <br>
                                            <hr>
                                            <div class="form-group">
                                                <label for="">Nama Lengkap</label>
                                                <input type="text" name="nama_pelapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Jenis Kelamin</label>
                                                <div class="col-md-12">
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="jk" name="jk_pelapor" value="Laki-Laki">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Laki-Laki<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="jk" name="jk_pelapor" value="Perempuan">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Perempuan<br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Alamat</label>
                                                <input type="text" name="alamat_pelapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Tanda Pengenal</label>
                                                <div class="col-md-12">
                                                    <div class="col-md-12">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="jk" name="tanda_pelapor" value="KTP">
                                                        </div>
                                                        <div class="col-md-9">
                                                            KTP<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="jk" name="tanda_pelapor" value="SIM">
                                                        </div>
                                                        <div class="col-md-9">
                                                            SIM<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="jk" name="tanda_pelapor" value="PASPOR">
                                                        </div>
                                                        <div class="col-md-9">
                                                            PASPOR<br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nomor</label>
                                                <input type="text" name="no_pelapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nomor Telp/Hp</label>
                                                <input type="text" name="notelp_pelapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Faximile</label>
                                                <input type="text" name="fax_pelapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">E-Mail</label>
                                                <input type="email" name="email_pelapor" class="form-control" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="jam">Identitas Terlapor : </div><br>
                                            <hr>
                                            <div class="form-group">
                                                <label for="">Nama Lengkap</label>
                                                <input type="text" name="nama_terlapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Instansi</label>
                                                <input type="text" name="instansi_terlapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Alamat</label>
                                                <input type="text" name="alamat_terlapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nomor Telp/Hp</label>
                                                <input type="text" name="notelp_terlapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Faximile</label>
                                                <input type="text" name="fax_terlapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">E-Mail</label>
                                                <input type="email" name="email_terlapor" class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Kronologis</label>
                                                <textarea name="kronologis_terlapor" class="form-control" id="" cols="30" rows="6"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <br>
                                <input type="submit" style="width: 100%;height: auto;font-size: 18px;" class="btn btn-primary" value="Kirim Pengaduan">
                            </form>
                            <br>
                            
                        </div>
                    </div>
                </div>
                <hr size="2">
            </div>
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