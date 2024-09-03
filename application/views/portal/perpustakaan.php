<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php $this->load->view('portal/template/header_css'); ?>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_portal/css/pendukung/perpustakaan.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>
  <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

  <div class="wrapper">
    <!--Header Area Start-->
    <?php $this->load->view('portal/template/menu'); ?>
    <!--Slider Area Start-->
    <!--Brand Area Start-->
    <section id="breadcrumb">
      <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
      <div class="breadcrumb__overlay">
        <div class="container container__padding">
          <div class="sub-text">
            <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
            <p>PERPUSTAKAAN</p>
          </div>
          <h1>PERPUSTAKAAN</h1>
        </div>
      </div>
    </section>

    <div class="main">
      <!-- END GRID -->
      <div class="subtitle col-md-6">
        <label for="">Search</label>
        <div class="tsearch">
          <input type="search" placeholder="Ketik pencarian anda disini" name="search_text" style="background-color: #F2F2F2; color: #009982; width: 100%;" id="search_text">
        </div>
      </div>
      <div class="subtitle col-md-6">
        <label for="">Kategori</label>
        <div class="form-group">
          <select name="" class="sel_kategori" id="">
            <option value=""></option>
            <?php foreach ($kategori as $key) { ?>
              <option value="<?php echo $key->kategori; ?>"><?php echo $key->kategori; ?></option>
            <?php } ?>
          </select>
        </div>

      </div>


      <div class="row">
        <!-- END GRID -->
        <div class="d_misi col-lg-12">
            <?php foreach ($perpustakaan->result() as $row) { ?>
              <div id="result"></div>
            <?php  } ?>
        </div>


        <!-- END GRID -->
      </div>

    </div>

  </div>

  <!--Brand Area End-->

  <script>
    $(document).ready(function() {
      $('.sel_kategori').change(function() {
        var kategori = $('.sel_kategori').val();

        if (kategori != '') {
          var search = $('#search_text').val();
          load_data(search, kategori);
        } else {
          load_data();
        }
      });
      load_data();

      function load_data(query, kategori) {
        $.ajax({
          url: "<?php echo base_url(); ?>perpustakaan/fetch",
          method: "POST",
          data: {
            query: query,
            kategori: kategori
          },
          success: function(data) {
            $('#result').html(data);
          }
        })
      }

      $('#search_text').keyup(function() {
        var search = $(this).val();
        var kategori = $('.sel_kategori').val();
        if (search != '') {

          load_data(search, kategori);
        } else {
          load_data();
        }
      });
    });
  </script>


  <?php $this->load->view('portal/template/footer'); ?>
  <!--Footer Area End-->
  </div>

  <!--Jquery 1.12.4-->
  <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>
