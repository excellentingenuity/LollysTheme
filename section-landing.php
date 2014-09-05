<?php
/*
Template Name: Section Landing
*/
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");

$section = pods_v('last', 'url');
//$params = array('orderby' =>  'testimonial_date');
$mypods = pods('testimonial');
$mypods->find();
?>
<!-- body tag opened at the end of header -->
<div class="container-fluid">
	<?php include('includes/page-partials/page-header.php'); ?>
</div>
<div class="blog-ober-container container-fluid">
	<div class="blog-ober-row row">
		<div class="blog-ober-content-section col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
			<div class="container-fluid sections-page">
					<?php
					// Loop through the records returned 
					while ( $mypods->fetch() ) { 
					    $text = $mypods->field('testimonial_text');
					    $author = $mypods->field('testimonial_author'); 
					    echo $author;
					}
					?>
			</div>
		</div>
	</div>
</div>
<!-- body tag closed in footer -->
<?php
include("footer.php");
?>