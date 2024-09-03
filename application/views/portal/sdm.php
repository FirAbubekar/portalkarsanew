<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php $this->load->view('portal/template/header_css'); ?>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets_portal/css/pendukung/sdm.css">
</head>

<body>
  <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

  <div class="wrapper">
    <!--Header Area Start-->
    <?php $this->load->view('portal/template/menu'); ?>
    <!--Header Area End-->
    <!--Slider Area Start-->


    <!--Brand Area Start-->

    <section id="breadcrumb">
      <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
      <div class="breadcrumb__overlay">
        <div class="container container__padding">
          <div class="sub-text">
            <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
            <p>Sumber Daya Manusia</p>
          </div>
          <h1>Sumber Daya Manusia</h1>
        </div>
      </div>
    </section>

    <section id="desc__halaman">
      <div class="container container__padding pb-1">
        <div class="row m-0">
          <h3>Sumber Daya Manusia</h3>
        </div>
        <div class="row">
          <div class="col-6 col-md-3">
            <h2><span class="counter"><?php echo number_format((($subsdm->pns / $subsdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $subsdm->pns; ?> Tenaga <strong>CPNS</strong></p>
          </div>
          <div class="col-6 col-md-3">
            <h2><span class="counter"><?php echo number_format((($subsdm->blud / $subsdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $subsdm->blud; ?> Tenaga <strong>BLUD</strong></p>
          </div>
          <div class="col-6 col-md-3">
            <h2><span class="counter"><?php echo number_format((($subsdm->mou / $subsdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $subsdm->mou; ?> Tenaga <strong>MoU</strong>
            </p>
          </div>
          <div class="col-6 col-md-3">
            <h2><span class="counter"><?php echo number_format((($subsdm->kontrak / $subsdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $subsdm->kontrak; ?> Tenaga <strong>Kontrak</strong></p>
          </div>
        </div>
        <?php
        $total = 0;
        foreach ($sdm->result() as $row) {
          $total += intval($row->jumlah);
        }
        ?>
        <table class="table table__sdm mt-3">
          <thead>
            <tr>
              <th>Jenis Sumber Daya Manusia</th>
              <th>Jumlah</th>
              <th>Presentase</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($sdm->result() as $row) { ?>
              <tr>
                <td><?php echo $row->jenis ?></td>
                <td>
                  <font style="color: #105b50;"><?php echo $row->jumlah ?></font>
                </td>
                <td><?php echo number_format(($row->jumlah * 100) / $total, 1); ?>%</td>
              </tr>
            <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>
                <h4>Total</h4>
              </th>
              <td>
                <font style="color: #105b50;">
                  <h4><?php echo $total; ?>
                </font>
                </h4>
              </td>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </section>


    <section id="desc__halaman">
      <div class="container container__padding pt-0">
        <div class="row m-0">
          <h3>Pendidikan SDM</h3>
        </div>
        <div class="row row__sdm__pendidikan">
          <div class="col">
            <h2><span class="counter"><?php echo number_format((($pendidikansdm->s2 / $pendidikansdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $pendidikansdm->s2; ?> Tenaga <strong>S2</strong></p>
          </div>
          <div class="col">
            <h2><span class="counter"><?php echo number_format((($pendidikansdm->s1 / $pendidikansdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $pendidikansdm->s1; ?> Tenaga <strong>S1</strong></p>
          </div>
          <div class="col">
            <h2><span class="counter"><?php echo number_format((($pendidikansdm->d4 / $pendidikansdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $pendidikansdm->d4; ?> Tenaga <strong>D4</strong></p>
          </div>
          <div class="col">
            <h2><span class="counter"><?php echo number_format((($pendidikansdm->d3 / $pendidikansdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $pendidikansdm->d3; ?> Tenaga <strong>D3</strong></p>
          </div>
          <div class="col">
            <h2><span class="counter"><?php echo number_format((($pendidikansdm->d2 / $pendidikansdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $pendidikansdm->d2; ?> Tenaga <strong>D2</strong></p>
          </div>
          <div class="col">
            <h2><span class="counter"><?php echo number_format((($pendidikansdm->d1 / $pendidikansdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $pendidikansdm->d1; ?> Tenaga <strong>D1</strong></p>
          </div>
          <div class="col">
            <h2><span class="counter"><?php echo number_format((($pendidikansdm->sma / $pendidikansdm->jumlah) * 100), 1); ?></span> %</h2>
            <p><?php echo $pendidikansdm->sma; ?> Tenaga <strong>SMA</strong></p>
          </div>
        </div>
        <table class="table table__sdm mt-3">
          <thead>
            <tr>
              <th>Pendidikan Sumber Daya Manusia</th>
              <th>S2</th>
              <th>S1</th>
              <th>D4</th>
              <th>D3</th>
              <th>D2</th>
              <th>D1</th>
              <th>SMA</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($sdm->result() as $row) {
              $totalkanan = $row->s2 + $row->s1 + $row->d4 + $row->d3 + $row->d2 + $row->d1 + $row->sma;
            ?>
              <tr>
                <td><?php echo $row->jenis ?></td>
                <td>
                  <font style="color: #105b50;"><?php echo $row->s2 ?></font>
                </td>
                <td>
                  <font style="color: #105b50;"><?php echo $row->s1 ?></font>
                </td>
                <td>
                  <font style="color: #105b50;"><?php echo $row->d4 ?></font>
                </td>
                <td>
                  <font style="color: #105b50;"><?php echo $row->d3 ?></font>
                </td>
                <td>
                  <font style="color: #105b50;"><?php echo $row->d2 ?></font>
                </td>
                <td>
                  <font style="color: #105b50;"><?php echo $row->d1 ?></font>
                </td>
                <td>
                  <font style="color: #105b50;"><?php echo $row->sma ?></font>
                </td>
                <td><?php echo $totalkanan; ?></td>
              </tr>
            <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>
                <h4>Total</h4>
              </th>
              <th><?php echo $pendidikansdm->s2; ?> </th>
              <th><?php echo $pendidikansdm->s1; ?> </th>
              <th><?php echo $pendidikansdm->d4; ?> </th>
              <th><?php echo $pendidikansdm->d3; ?> </th>
              <th><?php echo $pendidikansdm->d2; ?> </th>
              <th><?php echo $pendidikansdm->d1; ?> </th>
              <th><?php echo $pendidikansdm->sma; ?> </th>
              <th><?php echo $pendidikansdm->s2 + $pendidikansdm->s1 + $pendidikansdm->d4 + $pendidikansdm->d3 + $pendidikansdm->d2 + $pendidikansdm->d1 + $pendidikansdm->sma; ?> </th>
            </tr>
          </tfoot>
        </table>
      </div>
    </section>

    <!--Brand Area End-->
    <?php $this->load->view('portal/template/footer'); ?>
    <!--Footer Area End-->
  </div>

  <!--Jquery 1.12.4-->
  <?php $this->load->view('portal/template/footer_js'); ?>
</body>

</html>