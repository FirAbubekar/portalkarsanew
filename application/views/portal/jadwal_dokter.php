<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('portal/template/header_css');?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_portal/css/pendukung/jadwal.css">
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="wrapper">
        <!--Header Area Start-->
        <?php $this->load->view('portal/template/menu');?>
        <!--Header Area End-->
        <!--Brand Area Start-->
        <div class="latest-blog-area pt-120blog">
            <img src="<?php echo base_url();?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
        </div>
 <style>
     .column {
    float: left;
    margin-bottom: 40px;
    height: 600px;
}
.content {
    background-color: white;
    border-radius: 2%;
    box-shadow: 0px 4px 10px rgb(0 0 0 / 10%);
    height: 600px;
}
 </style>
        <div class="misi">
            <div class="title1 pt-120blog pb-85blog">
                <h1>JADWAL DOKTER</h1>
            </div>
        </div>
        
        <div class="relative">
            <div class="absolute">
                <select name="" id="">
                    <option value="">Filter</option>
                    <option value="">jadwal</option>
                </select>
            </div>
        </div>
        <div class="main">
            <!-- END GRID -->
            <div class="row">
                <?php foreach ($jadwal->result() as $row){ ?>
                <div class="column col-md-6 col-sm-8 col-lg-3">
                    <div class="content">
                        <img class="img_jadwal" src="<?php if($row->gambar!=null){ echo base_url('file/jadwal/'.$row->gambar); }else{ echo base_url('assets_portal/img/icon/user.jpg'); }?>" style="width:100%; height: 60%;">
                        <div class="box">
                            <div class="desc">
                            <font style="font-size: 15px;color: #fff;">
                            <?php echo str_replace('_', '.', $row->nama); ?>    
                            <p style="padding: 13px;"><?php echo $row->unit; ?></p>
                            </font>
                            </div>
                        </div>
                            <h5 style="font-weight: normal; padding-left: 15px;">Jadwal Dokter :<br><hr><?php echo $row->jadwal; ?></h5>
                    </div>
                </div>
                <?php } ?>
                <!-- END GRID -->
            </div>
        </div>


        <!--Brand Area End-->
        <?php $this->load->view('portal/template/footer');?>
        <!--Footer Area End-->
    </div>

    <!--Jquery 1.12.4-->
    <?php $this->load->view('portal/template/footer_js');?>
</body>

</html>
