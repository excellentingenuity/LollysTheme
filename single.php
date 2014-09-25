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
			<div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1 post-wrapper">
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
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
			</div>
			<div class="col-md-3_5 col-sm-3_5 col-xs-3_5 post-reel-sidebar-container">
				<div class="newsletter-signup-container">
					<h4 class="subscribe-header">Stay connected with Lolly</h4>
					<p class="subscribe-copy">Sign up for Lolly's exclusive newsletter!</p>
					<form  method="post" action="http://dev.lollydaskal.com/" role="form" class="newsletter-subscribe-form">
						<input type="hidden" name="sp_list" value="10275"/>
						<input type="hidden" name="sendpress" value="post" />
						<input type="email" class="form-control subscribe-email" name="sp_email" placeholder="Email">
						<button type="submit" class="sendpress-submit btn subscribe-submit" type="submit" id="submit" name="submit">Subscribe</button>
					</form>
				</div>
				<div class="post-reel-sidebar">
					<ul class="recent-posts-list">
						<h4 class="recent-post-list-header">You May Also Like</h4>
						<?php
							$result = abstractGetRecentPosts($cur_post);
							echo $result['list'];
						?>
					</ul>
					<div class="more-recent-posts-button-container">
						<button class="btn more-recent-posts-button" id="more-recent-posts-button">More Posts &darr;</button>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>

		
</div>
<script>
jQuery( document ).ready(function() {
	jQuery('.recent-posts-list').css({'height': jQuery('.post-container').innerHeight() - 380});
});
</script>
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
<script>
	jQuery('#more-recent-posts-button').click(
		function(){
			var t_exclude = jQuery('#exclude').text();
			var move_to_post = 0;
			var t_offset = jQuery('#offset').text();
			jQuery.ajax({
				url: '/wp-admin/admin-ajax.php',
				type: 'POST',
				action: 'getMoreRecentPosts',
				data: {
					action: 'getMoreRecentPosts',
					numberofposts: 15,
					exclude: t_exclude,
					offset:  t_offset
				},
				success: function(results){
				console.log(results)
				data = results.data;
				jQuery('.recent-posts-list').append(data['list']);
				jQuery('#offset').text(data['offset']);
				jQuery('#counter').text(data['counter']);
				move_to_post = data['first_post_in_list'];
				scroll_to_post(move_to_post, data['counter']);
			}
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});

	function scroll_to_post(id, counter){
		var height = jQuery('.recent-posts-list').height();
		scrollToElement('#' + id, '.recent-posts-list', 1000, height * counter );

	}
	function scrollToElement(selector, parent, time, verticalOffset) {
	    time = typeof(time) != 'undefined' ? time : 1000;
	    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	    element = $(selector);
	    offset = element.offset();
	    //offsetTop = offset.top + verticalOffset;
	    jQuery('.recent-posts-list').scrollTop(verticalOffset);
	    //jQuery(parent).animate({
	     //   scrollTop: offsetTop
	    //}, time);           
	}
</script>
<?php
include("footer.php");
?>