<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('portal/template/header_css');?>
    <link rel="stylesheet" href="<?php echo base_url();?>assets_portal/css/pendukung/sakip.css">
    </head>

<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="wrapper">
        <!--Header Area Start-->
        <?php $this->load->view('portal/template/menu');?>

        <!--Brand Area Start-->
        <div class="latest-blog-area pt-120blog">
            <img src="<?php echo base_url();?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
        </div>

        <div class="title">
            SAKIP
            <hr>
        </div>

        <div class="main">
            <div class="row">
                <!-- END GRID -->
                <div class="d_misi">
                    <?php foreach ($sakip->result() as $row){ ?>                        
                    <div style="height:500px" class="l_file col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <a href="<?php echo base_url('informasi/download/'.$row->id); ?>">
                        <div class="files col-xs-12 ">
                            <div class="icon col-xs-12 ">
                                <img class="gmbr" src="<?php echo base_url();?>assets_portal/img/icon/pdf.png" alt="">
                            </div>                            
                        </div>
                        <div class="filename ">
                                <?php echo $row->nama_file ?>
                        </div>
                        </a>
                    </div>
                    <?php } ?>

                </div>

                <!-- END GRID -->
            </div>
        </div>

    </div>

    <!--Brand Area End-->

    <?php $this->load->view('portal/template/footer');?>
    <!--Footer Area End-->
    </div>
<?php $this->load->view('portal/template/footer_js');?>
</body>

</html>