<?php
/*
Template Name: Blog Gallery
*/
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$posts_per_page = 33;
$date = false;
$enable_hover_description = true;
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");
?>
<!-- body tag opened at the end of header -->
<div class="container-fluid">
	<?php include('includes/page-partials/page-header.php'); ?>
</div>
<div class="blog-ober-container container-fluid">
	<div class="blog-ober-row row">
		<div class="blog-ober-content-section col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
			<div class="container-fluid blog-page">
	
				<?php
					query_posts(
						array('post_type' => 'post', 'posts_per_page' => $posts_per_page, 'paged' => $paged)
					);
				?>
				<!-- Loop for posts -->
								
								
				<?php
					$i = 0;
					$j = 0;
					
					$count_posts = $wp_query->post_count;
					$num_posts = $count_posts - 2;
					echo '<div class="row blog-grid-row">';
					echo '<div class="col-sm-10 col-sm-offset-1">';
					echo '<div class="row">';
					if(have_posts()) :
						while(have_posts()) :
							the_post();
							
							$img = catch_that_image();
							

							echo '<div class="col-sm-4 col-md-4 grid-div">';
							echo '<div class="grid-div-background">';
							//echo $spacer_class;					
							echo '<div class="grid-img-text-blocks-wrapper">';
							echo '<a class="grid-post-link" href="';
							echo the_permalink();
							echo '">';
							
							echo '<div class="pic grid-img-block">';
							echo '<img class="grid-post-img" src="';
								echo $img;
			 				echo '" alt="" />';
			 				if ($enable_hover_description == true){
			 					echo '<span class="pic-caption top-to-bottom">';
								echo wp_trim_words(get_the_content(), 25 );
			 					echo '</span>';
			 				}
			 				echo '</div>';
			 				echo '<div class="grid-text-block">';
			 				echo '<div class="grid-text">';
			 				echo the_title();
			 				echo '</div>';
			 				if ($date == true){
								echo '<div class="grid-text-post-date">';
								echo the_date();
								echo '</div>';
							}
			 				echo '</div>';
			 				echo '</a>';
			 				echo '</div>';
								 				
			 				echo '<div class="grid-text-social-icons">';
			 				include("includes/page-partials/social-share.php");
			 				echo '</div>'; //end of social icons

			 				echo '</div></div>';//gird-div and grid-div-background
			 				//echo '</div>';
			 				if(($j > $num_posts) || ($j >= $posts_per_page)){
			 					echo '</div>';	
			 				} else {
			 					if($i == 2) {
									echo '</div></div></div><div class="row blog-grid-row">';
									echo '<div class="col-sm-10 col-sm-offset-1">';
									echo '<div class="row">';
									$i = 0;
									$j++;
			 					} else {
			 						$i++;
			 						$j++;
			 					}
			 				}
									 			
				 		?>
						<?php
							     
								endwhile;
							endif;
						?>
						</div>
					</div>			
									
				
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="clearfix grid-blog-pagination-block">
								<?php
									if ( function_exists('wp_pagenavi') )
								    {
								      	wp_pagenavi();
								   	}
								    elseif ( get_next_posts_link() || get_previous_posts_link() )
								    {
								?>
							</div>
						    <div class="wp-navigation clearfix grid-blog-pagination-block">
						        <div class="aligncenter grid-blog-pagination grid-blog-pagination-right"><?php previous_posts_link('&laquo; Newer Entries'); ?></div>
						        <?php if (($paged > 1) && ($paged != $wp_query->max_num_pages)){ ?>
						        <div class="grid-blog-pagination grid-blog-page-pagination-seperator">||</div>
						        <?php } ?>
						        <div class="aligncenter grid-blog-pagination grid-blog-pagination-left"><?php next_posts_link('Older Entries  &raquo;');?></div>
						    </div>
								<?php } //if wp_pagenavi
								?>
						</div>
					</div>
				</div>

						
								
				
			</div> <!-- closing container-fluid div -->
		</div>
	</div>
</div>

<!-- body tag closed in footer -->
<?php
include("footer.php");
?>