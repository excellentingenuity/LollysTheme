<?php
/**
 * The Template for displaying comments
 *
 * @package LollysTheme
 * 
 */
if ( post_password_required() ) {
	return;
}
?>
<?php if ( have_comments() ) : ?>
<div class="fluid-container comments-container">

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>
	<div class="row comments-row">
		
		<ol class="comment-list col-md-6 col-md-offset-1_5 col-sm-6 col-sm-offset-1_5">
			<h3 class="comments-title">
			Comments
			</h3>
			<div class="row">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size'=> 74,
				) );
			?>
			</div>
		</ol><!-- .comment-list -->
	</div>
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>
	


	<div class="comment-form-wrapper">		
		<?php if ( ! comments_open() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
		<?php endif; ?>

		<?php endif; // have_comments() ?>
		
		<div class="row comment-form-row">
			<div class="col-md-6 col-md-offset-1_5 col-sm-6 col-sm-offset-1_5 comment-form-container">
				<?php comment_form(); ?>
			</div>
		</div>
	</div>
</div>