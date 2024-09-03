<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('portal/template/header_css'); ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_portal/css/pendukung/tarif.css">
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
                        <p>Tarif Pelayanan</p>
                    </div>
                    <h1>TARIF PELAYANAN</h1>
                </div>
            </div>
        </section>
        <!-- <section id="breadcrumb"> -->
            <div class="sub_title">
                <h3><?php echo strtoupper($kategori); ?></h3>
                <hr>
            </div>
            <div class="d_misi">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <?php foreach ($row_tabel as $rows) { ?>
                                <th><?php echo $rows; ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($kategori == "rawat jalan") { ?>
                            <?php foreach ($query->result() as $row) { ?>
                                <tr>
                                    <td><?php echo $row->jenis_pelayanan; ?></td>
                                    <td><?php echo "Rp. " . $row->tarif_rajal; ?></td>
                                </tr>
                            <?php }
                        } elseif ($kategori == "rawat inap") {  ?>
                            <?php foreach ($query->result() as $row) { ?>
                                <tr>
                                    <td><?php echo $row->jenis_pelayanan; ?></td>
                                    <td><?php echo "Rp. " . $row->kelas1; ?></td>
                                    <td><?php echo "Rp. " . $row->kelas2; ?></td>
                                    <td><?php echo "Rp. " . $row->kelas3; ?></td>
                                    <td><?php echo "Rp. " . $row->kelas_utama; ?></td>
                                    <td><?php echo "Rp. " . $row->kelas_vvip; ?></td>
                                </tr>
                            <?php }
                        } elseif ($kategori == "instalasi gawat darurat" || $kategori == "laboratorium pk" || $kategori == "laboratorium pa" || $kategori == "laboratorium mk" || $kategori == "bank darah" || $kategori == "radiologi") {  ?>
                            <?php foreach ($query->result() as $row) { ?>
                                <tr>
                                    <td><?php echo $row->jenis_pelayanan; ?></td>
                                    <td><?php echo "Rp. " . $row->tarif; ?></td>
                                </tr>
                        <?php }
                        } ?>

                    </tbody>
                </table>
                <?php if($catatan!=""){
                    echo $catatan;
                }?>
            </div>
        <!-- </section> -->

        <!--Brand Area End-->
        <?php $this->load->view('portal/template/footer'); ?>
        <!--Footer Area End-->
    </div>

    <!--Jquery 1.12.4-->
    <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>