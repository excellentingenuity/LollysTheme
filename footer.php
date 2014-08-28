<?php

?>
	<div class="container-fluid">
		<div class="row">
			<footer>
				<div class="copyright-notices-bar">
					<div class="col-sm-6 copyright">
						&copy; Copyright <?php echo date("Y") ?> LollyDaskal.com
					</div>
					<div class="col-sm-6 social icons">
					<?php dynamic_sidebar( 'footer_bar_social_icons' ); ?>
					</div>
				</div>
			</footer>
		</div>
	</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script> 
    	(function($) {
	
	// $ Works! You can test it with next line if you like
	// console.log($);
	
		})( jQuery );
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
  		$(window).load(function() {
    		$('.testimonials-flexslider').flexslider({
    			animation: "slide",
				pauseOnHover: true,
				directionNav: false,

    		});
  		});
	</script>
  <?php wp_footer(); ?>
  </body>
</html>