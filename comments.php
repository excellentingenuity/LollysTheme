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

<div class="fluid-container comments-container">

<?php if ( have_comments() ) : ?>
	<div class="row comments-row">
		
		<ol class="comment-list col-md-12 col-sm-12">
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
	
	


		

<?php endif; // have_comments() ?>
	<div class="comment-form-wrapper">	
		<div class="row comment-form-row">
			<div class="col-md-12 col-sm-12 comment-form-container">
				<?php comment_form(); ?>
			</div>
		</div>
	</div>
</div>