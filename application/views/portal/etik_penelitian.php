<!doctype html>
<html class="no-js" lang="en">

<head>
	<?php $this->load->view('portal/template/header_css');?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets_portal/css/pendukung/perpustakaan.css">
	  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

	<div class="wrapper">
		<!--Header Area Start-->
		<?php $this->load->view('portal/template/menu');?>
		<!--Slider Area Start-->
		<!--Brand Area Start-->
		<div class="latest-blog-area pt-120blog">
			<img src="<?php echo base_url();?>assets_portal/img/bg/head2.png" style="width: 100%;" alt="">
		</div>

		<div class="title">
			<h2>Alur & Dokumen Etik Penelitian (KEPK)</h2>
			<hr>
		</div>

		<div class="main">
			<!-- END GRID -->
			<div class="subtitle">
				<label for="">Search</label>
				<div class="tsearch">
					<input type="search" placeholder="Ketik pencarian anda disini" name="search_text"
						style="background-color: #F2F2F2; color: #009982; width: 100%;" id="search_text">
				</div>
				<hr>
			</div>

			<div class="row">
				<!-- END GRID -->
                <font style="color: red;">* untuk download Alur & Dokumen Etik Penelitian silahkan di klik dokumen yang diinginkan</font>
				<div class="d_misi col-lg-12">
					
					<div id="result"></div>
				
				</div>
				 

				<!-- END GRID -->
			</div>
		</div>

	</div>

	<!--Brand Area End-->




	<?php $this->load->view('portal/template/footer');?>
	<!--Footer Area End-->
	</div>

	<!--Jquery 1.12.4-->
	<?php $this->load->view('portal/template/footer_js');?>
</body>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>etik_penelitian/getdata",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
</html>
