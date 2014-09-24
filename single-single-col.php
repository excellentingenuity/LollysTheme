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
<div class="post-page">
	<div class="blog-ober-container container-fluid">
		<div class="blog-ober-row row">
			<div class="blog-ober-content-section col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
				<div class="container-fluid post-container">
							<?php if(have_posts()): ?>

								
								<?php while ( have_posts() ) : the_post(); ?>
									
								<div class="row">
									<div class="content-container col-sm-12 col-md-10 col-md-offset-1">
										<div class="post-block">
											<h2 class="post-header">
												<?php the_title(); ?>
											</h2>
											<div class="post-content">
												<?php the_content(); ?>
											</div>
											<!--<div class="post-tags">
												<p><?php //the_tags(); ?></p>
											</div>-->
										</div>
										<div class="related-content-container">
											<?php echo do_shortcode( '[jetpack-related-posts]' ); ?>
										</div>
									</div>
								</div>
				</div>
				<div class="post-bio-white-container">
					<div class="row post-bio-row">
						<div class="col-sm-12 col-md-10 col-md-offset-1 comments-bio-container">
							<?php echo do_shortcode('[gravatar email="lollydaskal@mac.com" size="74"]'); ?>
							<?php echo $titan->getOption('blog_bio_text');?>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
								
	<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
	?>

		<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php
include("footer.php");
?>