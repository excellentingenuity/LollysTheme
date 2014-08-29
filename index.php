<?php
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");
?>
<!-- body tag opened at the end of header -->
<div class="container home-page">
	<?php include('includes/page-partials/page-header.php'); ?>
	<?php
			if ( have_posts() ) {
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					echo the_post();

				endwhile;
				// Previous/next post navigation.
							if ( function_exists('wp_pagenavi') )
						    {
						      	wp_pagenavi();
						   	}
						    elseif ( get_next_posts_link() || get_previous_posts_link() )
						    {
						?>
						    <div class="wp-navigation clearfix grid-blog-pagination-block">
						        <div class="aligncenter grid-blog-pagination grid-blog-pagination-right"><?php previous_posts_link('&laquo; Newer Entries'); ?></div>
						        <?php if (($paged > 1) && ($paged != $wp_query->max_num_pages)){ ?>
						        <div class="grid-blog-pagination grid-blog-page-pagination-seperator">||</div>
						        <?php } ?>
						        <div class="aligncenter grid-blog-pagination grid-blog-pagination-left"><?php next_posts_link('Older Entries  &raquo;');?></div>
						        </div>
						<?php }//if wp_pagenavi
					

			} else {
				// If no content, include the "No posts found" template.
				echo "No Posts Found";

			}
		?>
</div> <!-- closing container-fluid div -->
<!-- body tag closed in footer -->
<?php
include("footer.php");
?>
