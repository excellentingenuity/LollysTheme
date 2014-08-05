<?php
	if($titan->getOption('tab_6_bg') == "image" && lolly_get_image_src($titan, "tab_6_bg_image") != "") {
		$fullscreen_bg_class_6 = "section-container-full-bg";
	}
?>

        <!-- How to contact us -->
        <div class="contact-container section-container <?php echo $fullscreen_bg_class_6; ?>">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 contact section-description wow fadeInLeftBig">
	                    <h3><?php echo $titan->getOption('tab_6_title'); ?></h3>
	                    <div><?php echo $titan->getOption('tab_6_description'); ?></div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-7 contact-form wow fadeInUp">
	                    <h4><?php echo $titan->getOption('tab_6_contact_form_title'); ?></h4>
	                    <form method="post" action="">
	                        <input type="text" name="email" placeholder="Email..." class="contact-email">
	                        <input type="text" name="subject" placeholder="Subject..." class="contact-subject">
	                        <textarea name="message" placeholder="Message..." class="contact-message"></textarea>
	                        <button type="submit">Send</button>
	                    </form>
	                    <div class="contact-success-message"><?php echo $titan->getOption('tab_6_contact_form_success'); ?></div>
	                </div>
	                <div class="col-sm-5 contact-address wow fadeInUp">
	                <?php
						if($titan->getOption('tab_6_map_display') == true) {
					?>
	                    <h4><?php echo $titan->getOption('tab_6_map_title'); ?></h4>
	                    <div class="map"></div>
					<?php
						}
			        ?>
	                    <h4><?php echo $titan->getOption('tab_6_address_title'); ?></h4>
	                <?php
	                	foreach(lolly_active_address_lines($titan, "tab_6") as $line_nr) {
	                	?>
	                	<div class="address-line">
	                		<i class="fa <?php echo $titan->getOption('tab_6_address_line_' . $line_nr . '_icon'); ?>"></i>
	                		<?php echo $titan->getOption('tab_6_address_line_' . $line_nr . '_text'); ?>
	                	</div>
	                	<?php
	                	}
	                ?>
	                </div>
	            </div>
	        </div>
        </div>
