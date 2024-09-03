<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/notifications/pnotify.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/pages/components_notifications_pnotify.js"></script>
		<div class="sidebar sidebar-main">
			<div class="sidebar-content">
	
				<!-- User menu -->
				<?php if($biodata==null){ ?>
				<div class="sidebar-user-material">
					<div class="category-content">
						<div class="sidebar-user-material-content">
							<a href="#"><img src="<?php
							 
							 echo base_url('assets/admin/assets/images/placeholder.jpg');		
							 
							 ?>" class="img-circle img-responsive" alt=""></a>
							<h6><?php  echo $this->session->userdata('no_pasien'); ?></h6>
							<span class="text-size-small"></span>
						</div>
					</div>
				</div>
				<?php } else { ?>
				<div class="sidebar-user-material">
					<div class="category-content">
						<div class="sidebar-user-material-content">
							<a href="#"><img src="<?php
							 if($biodata[0]->jenisKelamin=='P'){
							 echo base_url('assets/admin/assets/images/woman.png');
							 }
							 elseif($biodata[0]->jenisKelamin=='L'){
							 echo base_url('assets/admin/assets/images/man.png');	
							 }
							 else{
							 echo base_url('assets/admin/assets/images/placeholder.jpg');		
							 }

							 ?>" class="img-circle img-responsive" alt=""></a>
							<h6><?php  echo $biodata[0]->nmPasien; ?></h6>
							<span class="text-size-small"><?php  echo $biodata[0]->alamat; ?></span>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="sidebar-category sidebar-category-visible">
					<div class="category-content no-padding">
						<ul class="navigation navigation-main navigation-accordion">

							<!-- Main -->
							<li class="<?php echo $a_profile; ?>"><a href="<?php echo base_url('pasien/home'); ?>"><span>Profil</span> <i class=" icon-home5" title="Main pages"></i></a></li>
							<li class="<?php echo $a_poli; ?>"><a href="<?php echo base_url('pasien/poli'); ?>"><span>Daftar Poli</span> <i class=" icon-table2" title="Main pages"></i></a></li>
							<li><a type="button" id="pnotify-confirm1"><span>Logout</span> <i class="icon-exit3" title="Main pages"></i></a></li>
							<!-- <li><a title="Batalkan Pendaftaran" data-placement="right" class="btn btn-danger" data-toggle="modal" href="#"><i class="icon-database-remove position-left"></i>Logout</a></li> -->
							<!-- /page kits -->
						</ul>
					</div>
				</div>
				<!-- /main navigation -->

			</div>
		</div>
			<script>
		$('#pnotify-confirm1').on('click', function () {

        // Setup
        var notice = new PNotify({
            title: 'Konfirmasi',
            text: '<p>Apakah Anda Yakin Ingin Keluar?</p>',
            hide: false,
            type: 'warning',
            confirm: {
                confirm: true,
                buttons: [
                    {
                        text: 'Logout',
                        addClass: 'btn btn-sm btn-primary'
                    },
                    {
                        addClass: 'btn btn-sm btn-link'
                    }
                ]
            },
            buttons: {
                closer: false,
                sticker: false
            },
            history: {
                history: false
            }
        })

        // On confirm
        notice.get().on('pnotify.confirm', function() {
            location.href = "home/logout";
        })

        // On cancel
        notice.get().on('pnotify.cancel', function() {
            
        });
    });
	</script>

