<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php $this->load->view('portal/template/header_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_portal/css/pendukung/mutu.css">
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
    MUTU
    <hr>
  </div>
  <section id="tabs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <button class="btn nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
              aria-controls="nav-profile" aria-selected="false">MUTU SEMESTER</button>
              <button class="btn nav-item nav-link " id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
              aria-controls="nav-contact" aria-selected="false">MUTU KUNCI</button>
            </div>
          </nav>
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-profile">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="t_cont">
                <div class="content">
                  <div class="deskripsi">
                  <?php foreach ($semester->result() as $row) { ?>
                   <div class="column nature ">
                    <div class="content">
                      <img src="<?php echo base_url('file/mutu/'.$row->gambar);?>" alt="Mountains" style="width:100%">
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="t_cont">
              <div class="content">
                <?php foreach ($kunci->result() as $row) { ?>
                <div class="l_file col-xs-12 col-sm-12 col-md-6 col-lg-3">
                <a href="<?php echo base_url('informasi/downloadmutu/'.$row->id); ?>">
                  <div class="files col-xs-12 ">
                    <div class="icon col-xs-12 ">
                      <img class="gmbr" src="<?php echo base_url('assets_portal/img/icon/pdf.png');?>" alt="">
                    </div>
                    <div class="filename col-xs-12 ">
                      <?php echo $row->nama_file ?>
                    </div>
                  </div>
                </a>
                </div>
              <?php } ?>
              </div>
            </div>
          </div>

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