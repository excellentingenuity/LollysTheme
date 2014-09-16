<?php
/**
 * The Template for displaying all single posts
 * 
 * @package LollysTheme
 * 
 */
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");
$cur_post = '';
 ?>
 <!-- body tag opened at the end of header -->
<div class="container-fluid">
	<?php include('includes/page-partials/page-header.php'); ?>
</div>
<div class="single-post-dual-col-page-background-wrapper">
	<div class="container-fluid single-post-dual-col">

		<div class="row">
			<div class="more-posts-mobile-button-wrapper visible-xs">
				<a class="btn more-posts-btn" id="recent-post-button">Recent Posts</a>
			</div>
			<div class="col-md-6 col-md-offset-1_5 col-sm-6 col-sm-offset-1_5 post-wrapper">
				<div class="row">
					<div class="col-md-12 col-sm-12 post-container">
						<?php if(have_posts()): ?>		
						<?php while ( have_posts() ) : the_post(); ?>
						<h2 class="post-header">
							<?php $cur_post = get_the_ID(); ?>
							
							<?php the_title(); ?>
						</h2>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 post-bio-container">
						<?php echo do_shortcode('[gravatar email="lollydaskal@mac.com" size="74"]'); ?>
						<?php echo $titan->getOption('blog_bio_text');?>
					</div>
				</div>
			</div>
			<div class="col-md-3_5 col-sm-3_5 col-xs-3_5 post-reel-sidebar-container">
				<div class="post-reel-sidebar">
					<ul class="recent-posts-list">
						<h4 class="recent-post-list-header">You May Also Like</h4>
						<?php
							
							$recent_post_args = array(
								'numberposts' => '20',
								'post_status' => 'publish',
								'exclude' => (string)$cur_post
								);
							$recent_posts = wp_get_recent_posts($recent_post_args);
							foreach( $recent_posts as $recent ){
								echo '<li class="row recent-post-list-item">';
								echo '<a class="recent-post-link" href="';
								echo get_permalink($recent["ID"]);
								echo '">';	
								echo '<div class="col-sm-12 col-md-12 recent-post-block">';
								$recent_img = catch_recent_post_image($recent);
								echo '<div class="recent-post-title">';
								echo $recent['post_title'];
								echo '</div>';
								echo '<img class="recent-post-image" src="'.$recent_img.'"/>';
								
								

								echo '</div>';
								echo '</a>';
								echo '</li>';
							}
						?>
					</ul>
				</div>
			</div>
			<div class="col-md-1 col-sm-1 spacer-class"></div>
		</div>
		
	</div>

		<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
		?>
</div>
<script>

jQuery('#recent-post-button').toggle( 
    function() {
        $('.post-reel-sidebar-container').animate({ right: 0 }, 'slow', function() {
            $('#recent-post-button').html('Close');
        });
    }, 
    function() {
        $('.post-reel-sidebar-container').animate({ right: -400 }, 'slow', function() {
            $('#recent-post-button').html('Recent Posts');
        });
    }
);
</script>
<?php
include("footer.php");
?>