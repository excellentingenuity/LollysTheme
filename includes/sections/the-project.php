<?php
	if($titan->getOption('tab_3_bg') == "image" && lolly_get_image_src($titan, "tab_3_bg_image") != "") {
		$fullscreen_bg_class_3 = "section-container-full-bg";
	}
?>

        <!-- About the new site -->
        <div class="about-container section-container <?php echo $fullscreen_bg_class_3; ?>">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about section-description wow fadeInLeftBig">
	                    <h3><?php echo $titan->getOption('tab_3_title'); ?></h3>
	                    <div><?php echo $titan->getOption('tab_3_description'); ?></div>
	                </div>
	            </div>
	        <?php
	        	$active_boxes = lolly_active_boxes($titan, "tab_3");
	        	$active_boxes_nr = count($active_boxes);
	        	foreach($active_boxes as $k => $box_nr) {
	        		if(($k + 1) % 3 == 1) {
	        		?>
	        			<div class="row">
	        		<?php
	        		}
	        	?>
	        		<div class="col-sm-4 about-box-1 wow fadeInUp">
	                	<div class="about-box-1-icon">
	                		<i class="fa <?php echo $titan->getOption('tab_3_box_' . $box_nr . '_icon'); ?>"></i>
	                	</div>
	                    <h4><?php echo $titan->getOption('tab_3_box_' . $box_nr . '_title'); ?></h4>
	                    <div><?php echo $titan->getOption('tab_3_box_' . $box_nr . '_description'); ?></div>
	                </div>
	        	<?php
	        		if(($k + 1) % 3 == 0 || ($k + 1) == $active_boxes_nr) {
	        		?>
	        			</div>
	        		<?php
	        		}
	        	}
	        ?>  
	        </div>
        </div>
        