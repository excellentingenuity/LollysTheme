<?php
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");
?>
<!-- body tag opened at the end of header -->
<div class="container home-page">
	<?php include('includes/page-partials/page-header.php'); ?>
	<div class="row">
		<div class="col-sm-12">
			<div class="featured-fade-slideshow">
				<a href="<?php echo get_site_url(); ?>" class="header_slideshow_link">
					<h1 class="header_slideshow_text"><?php echo $titan->getOption('header_slider_text')?></h1>
					<h1 class="header_slideshow_text2"><?php echo $titan->getOption('header_slider_text2')?></h1>
				</a>
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
						<li class="coach-list-item">Leadership Development</li>
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
						Show all services<br /><span class="all-services-link-greater-than">&gt;</span>
						</a>
					</div>
					
				</div>
				<a href="<?php echo get_site_url() . '/' . $titan->getOption('speaker_text_link')?>" class="speaker_with_heart_link">
					<h2 class="speaker_with_heart_text"><?php echo $titan->getOption('speaker_text')?></h2>
					<h2 class="speaker_with_heart_text2"><?php echo $titan->getOption('speaker_text2')?></h2>
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="about-lolly">
			<div class="about-lolly-header col-sm-12">
				<h3 class="about-lolly-h3">
					<?php echo $titan->getOption('home_values_header')?>
				</h3>
			</div>
			<div class="row lollys-values-subrow">
				<div class="col-sm-6 values-block">
					<div class="values-inner pull-right">
						<i class="fa fa-heart"></i>
						<div class="values-elipses"><?php echo $titan->getOption('home_value_1_elipsis_text')?></div>
						<h1 class="values-inner-header"><?php echo $titan->getOption('home_value_1')?></h1>
						<i class="fa fa-angle-down"></i>
						<div class="values-content-wrapper">
							<div class="values-content"><?php echo $titan->getOption('home_value_1_hover_text')?></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 values-block">
					<div class="values-inner pull-left">
						<i class="fa fa-user"></i>
						<div class="values-elipses"><?php echo $titan->getOption('home_value_2_elipsis_text')?></div>
						<h1 class="values-inner-header"><?php echo $titan->getOption('home_value_2')?></h1>
						<i class="fa fa-angle-down"></i>
						<div class="values-content-wrapper">
							<div class="values-content"><?php echo $titan->getOption('home_value_2_hover_text')?></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 values-block">
					<div class="values-inner pull-right">
						<i class="fa fa-check"></i>
						<div class="values-elipses"><?php echo $titan->getOption('home_value_3_elipsis_text')?></div>
						<h1 class="values-inner-header"><?php echo $titan->getOption('home_value_3')?></h1>
						<i class="fa fa-angle-down"></i>
						<div class="values-content-wrapper">
							<div class="values-content"><?php echo $titan->getOption('home_value_3_hover_text')?></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 values-block">
					<div class="values-inner pull-left">
						<i class="fa fa-star"></i>
						<div class="values-elipses"><?php echo $titan->getOption('home_value_4_elipsis_text')?></div>
						<h1 class="values-inner-header"><?php echo $titan->getOption('home_value_4')?></h1>
						<i class="fa fa-angle-down"></i>
						<div class="values-content-wrapper">
							<div class="values-content"><?php echo $titan->getOption('home_value_4_hover_text')?></div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="row about-link-subrow">
				<div class="col-sm-12 about-link-container-div">
					<div class="about-link-boundry">
						<a href="about" class="home-about-link">
								More<br />about<br />me<br /><span class="all-services-link-greater-than">&gt;</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="testimonials-row">
			<div class="col-sm-12 testimonials">
				<div class="testimonials-flexslider">
  					<ul class="slides">
    					<?php
							//this is normally where the WP Loop would be. Instead we add a loop to get pods stuff 
		 					 $params = array(     
							    'limit' => 3 
							    ); 
		 					 $mypod = pods('testimonial');
		 					 $mypod->find($params);      
						?>
						 <?php while ( $mypod->fetch() ) : ?>
		 
					    <?php
					      // set our variables
					      $text = $mypod->field('testimonial_text');
					      $author = $mypod->field('testimonial_author');
					      echo '<li>
					      			<div class="testimonial-slide-container">
					      				<div class="testimonial-text">"' .
					      					$text .
					      				'"</div><div class="testimonial-author">-' .
					      					$author . 
					      				'</div>
					      			</div>
					      		</li>';	
					    ?>
					    <?php endwhile; ?> 
     
					</ul>
				</div>
			</div>
		</div>
		<div class="row testimonials-link-subrow">
			<div class="col-sm-12 all-testimonials-container">
				<div class="all-testimonials-link-div">
						<a href="" class="all-testimonials-link">
						See all testimonials<br /><span class="all-services-link-greater-than">&gt;</span>
						</a>
				</div>
					
			</div>
		</div>
	</div>
	<div class="row">
		<div class="subscribe">
			<?php dynamic_sidebar( 'subscription_1' ); ?>
		</div>
	</div>
	<div class="row">
		<div class="lower-navigation icon-navigation">
			<div class="col-md-2 col-sm-2 lower-nav-item outer-nav-item-left"></div>
			<div class="col-md-2 col-sm-2 lower-nav-item"></div>
			<div class="col-md-2 col-sm-2 lower-nav-item"></div>
			<div class="col-md-2 col-sm-2 lower-nav-item"></div>
			<div class="col-md-2 col-sm-2 lower-nav-item"></div>
			<div class="col-md-2 col-sm-2 lower-nav-item outer-nav-item-right"></div>
		</div>
	</div>
	<div class="row">
		<div class="awards-and-mentions">
			<div class="awards-and-mentions-content">
				Content
			</div>
			button
		</div>
	</div>
	<div class="row">
		<div class="home-footer">
			<div class="col-sm-4 contact-us">
				<?php dynamic_sidebar( 'footer_left_1' ); ?>
			</div>
			<div class="col-sm-4 social icons">
				<?php dynamic_sidebar( 'footer_center_1' ); ?>
			</div>
			<div class="col-sm-4 static-map">
				<?php dynamic_sidebar( 'footer_right_1' ); ?>
			</div>
		</div>
	</div>
</div> <!-- closing container-fluid div -->
<!-- body tag closed in footer -->
<?php
include("footer.php");
?>
