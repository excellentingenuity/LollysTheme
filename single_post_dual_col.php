<?php
/**
 * The Template for displaying all single posts
 * Template Name: Dual Column Post Page
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
<div class="container-fluid single-post-dual-col">
	<div class="row">
		<div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1">
			<div class="post-container">
				<?php if(have_posts()): ?>		
				<?php while ( have_posts() ) : the_post(); ?>
				<h2 class="post-header">
					<?php the_title(); ?>
				</h2>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1">
			<div class="post-reel-sidebar">
				
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>