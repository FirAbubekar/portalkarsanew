<!doctype html>
<html class="no-js" lang="en">

<head>
<?php $this->load->view('portal/template/header_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_portal/css/pendukung/alur.css">

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
    <div class="latest-blog-area pt-120blog">
      <img src="<?php echo base_url(); ?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
    </div>
    <div class="title">
      ALUR
    </div>
      <section id="tabs">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                  <?php foreach ($alur->result() as $row) { ?>
                    <a class="nav-item nav-link col-sm-4 col-md-4 col-lg-3" id="nav-profile-tab" data-toggle="tab" href="#<?php echo str_replace(' ','-', $row->alur); ?>" role="tab"
                    aria-controls="nav-profile" aria-selected="false"><?php echo $row->alur; ?></a>
                  <?php } ?>
                </div>
              </nav>
              
              <div class="tab-content py-3 px-3 px-sm-0" id="nav-profile">
                <?php foreach ($t_alur->result() as $row){ ?>
                <div class="tab-pane fade" id="<?php echo str_replace(' ','-', $row->alur); ?>" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="t_cont col-sm-12 col-md-12 col-lg-12">
                    <div class="content">
                      <img src="<?php echo base_url('file/alur/'.$row->gambar);?>"style="width:50%">
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
              
            </div>
          </div>
        
      </section>
      
      <!-- END MAIN -->
    </div>

    <?php $this->load->view('portal/template/footer'); ?>
  </div>

  <!--Jquery 1.12.4-->
 <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>
