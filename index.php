<?php
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");
?>
<!-- body tag opened at the end of header -->
<div class="container-fluid home-page">
	<?php include('includes/page-partials/page-header.php'); ?>
	<div class="row">
		<div class="col-sm-12">
			<div class="featured-fade-slideshow">
				<a href="#" class="header_slideshow_link"><h2 class="header_slideshow_text"><?php echo $titan->getOption('header_slider_text')?></h2></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 commitment">
			<div class="commitment-text-div">
				<h4 class="commitment-text-header">
					I Am A Committed
				</h4>
			</div>
			<div class="row commitment-subrow">
				<div class="col-sm-4 col-md-4 col-sm-offset-1 col-md-offset-1 coach-block">
					<h3 class="coach-header">
						Coach
					</h3>
					<ul class="coach-list">
						<li class="coach-list-item">Leadership Devlopment</li>
						<li class="coach-list-item">Executive Coaching</li>
						<li class="coach-list-item">CEO Interim Training</li>
						<li class="coach-list-item">Entrepreneurship Coaching</li>
					</ul>
				</div>
				<div class="col-sm-2 col-md-2 comitment-subrow-center commitment-amperstand">
					<p class="commitment-amperstand-p">&amp;</p>
				</div>
				<div class="col-sm-4 col-md-4 consultant-block">
					<h3 class="consultant-header">
						Consultant
					</h3>
					<ul class="consultant-list">
						<li class="consultant-list-item">Team Building Design</li>
						<li class="consultant-list-item">Cultural Transformation</li>
						<li class="consultant-list-item">Employee Engagement</li>
						<li class="consultant-list-item">Workshop Training and Facilitation</li>
					</ul>
				</div>
				<div class="col-sm-1 commitment-spacer">&nbsp;</div>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 speaker-with-heart">
			<div class="row speaker-services-subrow">
				<div class="col-sm-12">
					<div class="all-services-link-div">
						<a href="" class="all-services-link">
						Show All Services<br /><span class="all-services-link-greater-than">&gt;</span>
						</a>
					</div>
					
				</div>
				<a href="<?php echo $titan->getOption('speaker_text_link')?>" class="speaker_with_heart_link"><h2 class="speaker_with_heart_text"><?php echo $titan->getOption('speaker_text')?></h2></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="about-lolly">
			<h3 class="about-lolly-h3">
				Leadership Coach. Consultant. Facilitator. Speaker. Author.
			</h3>
			<div class="col-sm-12 about-link-container-div">
				<div class="about-link-boundry">
					<a href="about" class="home-about-link">
						<h4 class="home-about-link-text">
							
						</h4>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="lollys-values">
			
		</div>
	</div>
	<div class="row">
		<div class="testimonials">
			
		</div>
	</div>
	<div class="row">
		<div class="subscribe">
			
		</div>
	</div>
	<div class="row">
		<div class="lower-navigation icon-navigation">
			
		</div>
	</div>
	<div class="row">
		<div class="awards-and-mentions">
			
		</div>
	</div>
	<div class="row">
		<div class="contact-us-blocks">
			
		</div>
	</div>
</div> <!-- closing container-fluid div -->

<!-- body tag closed in footer -->
<?php
include("footer.php");
?>
