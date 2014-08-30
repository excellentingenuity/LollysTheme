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
	<!-- Loop for posts -->
					
					
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
				if ($j % 2){
					$alignment_class = ' ';
					//$spacer_class = '<div class="col-md-1">&nbsp;</div>';
				} else {
					$alignment_class = ' col-md-offset-1 ';
					//$spacer_class = "";
				}

				echo '<div class="col-md-5' . $alignment_class . 'grid-div">';
				echo '<div class="grid-div-background">';
				//echo $spacer_class;					
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
					 				
 				echo '<div class="grid-text-social-icons">';
 				include("includes/page-partials/social-share.php");
 				echo '</div>'; //end of social icons

 				echo '</div></div>';//gird-div and grid-div-background
 				//echo '</div>';
 				if(($j > $num_posts) || ($j >= $posts_per_page)){
 					echo '</div>';	
 				} else {
 					if($i == 1) {
						echo '</div><div class="row blog-grid-row">';
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
		</div>			
						
	</div>
					
	
</div> <!-- closing container-fluid div -->
<!-- body tag closed in footer -->
<?php
include("footer.php");
?>