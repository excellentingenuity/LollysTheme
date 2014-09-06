<div class="row">
		<div class="tweetchat-section">
			<img class="col-md-6 col-sm-6 tweetchat-logo" src="<?php echo get_image_source_from_titan_option($titan, 'tweetchat_logo');?>"/>
			<div class="col-md-6 col-sm-6 tweetchat-content">
				<div class="tweetchat_text">
					<?php echo $titan->getOption('tweetchat_text');?>
				</div>
				<button class="btn btn-default tweetchat-button" href="<?php echo get_site_url() . '/' . $titan->getOption('tweetchat_link');?>">View<br />Schedule<br /><span class="all-services-link-greater-than">&gt;</span></button>
			</div>
			
		</div>
	</div>