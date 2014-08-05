<?php
	$titan = TitanFramework::getInstance( 'lolly' );
?>

        <!-- Footer -->
        <footer>
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-7 footer-copyright">
	                    <?php echo $titan->getOption('tab_7_copyright'); ?>
	                </div>
	                <div class="col-sm-5 footer-social">
	                <?php
	                	foreach(lolly_active_footer_social_icons($titan, "tab_7") as $icon_nr) {
	                		$icon_name = $titan->getOption('tab_7_icon_' . $icon_nr);
	                		$icon_link = $titan->getOption('tab_7_icon_' . $icon_nr . '_link');
	                		if(strpos($icon_name, 'email') !== FALSE) {
	                			$icon_link = "mailto:" . $icon_link;
	                		}
	                	?>
	                		<a class="ultm ultm-<?php echo $icon_name; ?> ultm-48 ultm-square ultm-gray-to-color" 
	                			href="<?php echo $icon_link; ?>" target="_blank"></a>
	                	<?php
	                	}
	                ?>
	                </div>
	            </div>
	        </div>
        </footer>
        
        <?php wp_footer(); ?>

    </body>

</html>