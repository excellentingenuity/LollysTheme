<?php
/*
Template Name: Stripped Page
*/
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");
?>
<!-- body tag opened at the end of header -->
<div class="container-fluid">
	<?php include('includes/page-partials/page-header.php'); ?>
</div>
<div class="container-fluid stripped-page-container">
	
	<?php if(have_posts()): ?>

				
		<?php while ( have_posts() ) : the_post(); ?>
			
		
				<h2 class="post-header">
					<?php the_title(); ?>
				</h2>
				
					<?php the_content(); ?>
				
		<?php endwhile; ?>
	<?php endif; ?>
		
	
</div> <!-- closing container-fluid div -->
<!-- body tag closed in footer -->

<?php
include("footer.php");
?>