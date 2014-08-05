<?php
	if($titan->getOption('tab_4_bg') == "image" && lolly_get_image_src($titan, "tab_4_bg_image") != "") {
		$fullscreen_bg_class_4 = "section-container-full-bg";
	}
?>

        <!-- Testimonials -->
        <div class="testimonials-container section-container <?php echo $fullscreen_bg_class_4; ?>">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 testimonials section-description wow fadeIn">
	                    <h3><?php echo $titan->getOption('tab_4_title'); ?></h3>
	                    <div class="testimonial-active"></div>
	                    <div class="testimonial-quote">&ldquo; &rdquo;</div>
	                <?php
	                	foreach(lolly_active_boxes($titan, "tab_4") as $box_nr) {
	                ?>
	                		<div class="testimonial-single">
		                    	<div class="testimonial-single-text"><?php echo $titan->getOption('tab_4_box_' . $box_nr . '_text'); ?></div>
		                    	<div class="testimonial-single-image">
		                    		<img src="<?php echo lolly_get_image_src($titan, 'tab_4_box_' . $box_nr . '_image'); ?>" alt="testimonial-image">
		                    	</div>
		                    </div>
	                <?php
	                	}
	                ?>
					</div>
	            </div>
	        </div>
        </div>
