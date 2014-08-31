<?php
/**
 * The Template for displaying all single posts
 *
 * @package LollysTheme
 * 
 */
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");
 ?>
<!-- body tag opened at the end of header -->
<div class="container-fluid">
	<?php include('includes/page-partials/page-header.php'); ?>
</div>
<div class="blog-ober-container container-fluid">
	<div class="blog-ober-row row">
		<div class="blog-ober-content-section col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
			<div class="container-fluid post-container">
						<?php if(have_posts()): ?>

							
							<?php while ( have_posts() ) : the_post(); ?>
								
							<div class="row">
								<div class="content-container col-sm-12 col-md-8 col-md-offset-2">
									<h2 class="post-header">
										<?php the_title(); ?>
									</h2>
									<div class="post-content">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
			</div>
		</div>
	</div>
</div>
								
	

		<?php endwhile; ?>
	<?php endif; ?>
	
<?php
include("footer.php");
?>