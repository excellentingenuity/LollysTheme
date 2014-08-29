<?php
/*
Template Name: Blog Gallery
*/
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$posts_per_page = 30;
$date = false;
$enable_hover_description = true;
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");
?>
<!-- body tag opened at the end of header -->
<div class="container-fluid">
	<?php include('includes/page-partials/page-header.php'); ?>
</div>
<div class="container-fluid blog-page">
	
	<?php
					query_posts(
    					array('post_type' => 'post', 'posts_per_page' => $posts_per_page, 'paged' => $paged)
					);
				?>
				<!-- Sing Post Starts -->
					
					
						<?php
							$i = 0;
							$j = 0;
							
							$count_posts = $wp_query->post_count;
							$num_posts = $count_posts - 2;
							echo '<div class="row blog-grid-row">';
							if(have_posts()) :
								while(have_posts()) :
									the_post();
									
									$img = catch_that_image();
									//if($img == "/path/to/default.png"){
									//	$img = 'http://www.lollydaskal.com/wp-content/uploads/2013/03/Screen-shot-2013-03-22-at-10.37.42-PM-e1364007776356.png';
									//}
									echo '<div class="col-sm-6 col-xs-12 grid-div">';
									echo '<div class="grid-img-text-blocks-wrapper">';
									echo '<a class="grid-post-link" href="';
									echo the_permalink();
									echo '">';
									if ($enable_hover_description == true){
					 					echo '<div class="grid-hover-text">';
										echo wp_trim_words(get_the_content(), 25 );
					 					echo '</div>';
					 				}
									echo '<div class="grid-img-block">';
									echo '<img class="grid-post-img" src="';
		 							echo $img;
					 				echo '" alt="" />';
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
					 				
					 				/*echo '<div class="grid-text-social-icons">';
					 				echo '<div class="sharedaddy sd-sharing-enabled custom-grid-sd">';
									echo '<div class="robots-nocontent sd-block sd-social sd-social-icon sd-sharing custom-grid-sd-block">';
									echo '<div class="sd-content custom-grid-sd-content">';
									echo '<ul>';
									echo '<li class="share-facebook">';
									echo '<a rel="nofollow" target="_blank" class="share-facebook sd-button share-icon no-text" href="';
									echo the_permalink();
									echo '?share=facebook&amp;nb=1" title="Share on Facebook" id="sharing-facebook-9333">';
									echo '</a></li>';
									echo '<li class="share-linkedin">';
									echo '<a rel="nofollow" target="_blank" class="share-linkedin sd-button share-icon no-text" href="';
									echo the_permalink();
									echo '?share=linkedin&amp;nb=1" title="Click to share on LinkedIn" id="sharing-linkedin-9333">';
									echo '</a></li>';
									echo '<li class="share-twitter">';
									echo '<a rel="nofollow" target="_blank" class="share-twitter sd-button share-icon no-text" href="';
									echo the_permalink();
									echo '?share=twitter&amp;nb=1" title="Click to share on Twitter" id="sharing-twitter-9333">';
									echo '</a></li>';
									echo '<li class="share-google-plus-1"><a rel="nofollow" target="_blank" class="share-google-plus-1 sd-button share-icon no-text" href="';
									echo the_permalink();
									echo '?share=google-plus-1&amp;nb=1" title="Click to share on Google+" id="sharing-google-9333">';
									echo '</a></li>';
									echo '<li class="share-pinterest">';
									echo '<a rel="nofollow" target="_blank" class="share-pinterest sd-button share-icon no-text" href="';
									echo the_permalink();
									echo '?share=pinterest&amp;nb=1" title="Click to share on Pinterest">';
									echo '</a></li><li class="share-end"></li></ul></div></div></div>';*/
					 				echo '</div>';
					 				echo '</div>';
					 				if(($j > $num_posts) || ($j >= $posts_per_page)){
					 					echo '</div>';	
					 				} else {
					 					if($i == 1) {
											echo '</div><div class="row">';
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
						<?php
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
						<?php } //if wp_pagenavi
						?>
						</div>
					
						

					
	
</div> <!-- closing container-fluid div -->
<!-- body tag closed in footer -->
<?php
include("footer.php");
?>