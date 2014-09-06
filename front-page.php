<?php
/*
Template Name: Front-Page
*/
$titan = TitanFramework::getInstance( 'lolly' );
include("header.php");
?>
<!-- body tag opened at the end of header -->
<div class="container-fluid">
	<?php include('includes/page-partials/page-header.php'); ?>
</div>
<div class="container-fluid home-page">
	<div class="row">
		<div class="col-sm-12">
			<div class="featured-fade-slideshow">
				<a href="<?php echo get_site_url(); ?>" class="header_slideshow_link">
					<h1 class="header_slideshow_text"><?php echo $titan->getOption('header_slider_text');?></h1>
					<div class="header_slideshow_text2"><?php echo $titan->getOption('header_slider_text2');?></div>
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 commitment">
			<div class="commitment-text-div">
				<h4 class="commitment-text-header">
					<?php echo $titan->getOption('commitment_iam_text');?>
				</h4>
			</div>
			<div class="row commitment-subrow">
				<div class="col-sm-5 col-md-5 coach-block">
					<h3 class="coach-header">
						Coach
					</h3>
					<ul class="coach-list">
						<?php echo $titan->getOption('commitment_coaching_list');?>
					</ul>
				</div>
				<div class="col-sm-2 col-md-2 comitment-subrow-center commitment-amperstand">
					<p class="commitment-amperstand-p">&amp;</p>
				</div>
				<div class="col-sm-5 col-md-5 consultant-block">
					<h3 class="consultant-header">
						Consultant
					</h3>
					<ul class="consultant-list">
						<?php echo $titan->getOption('commitment_consulting_list');?>
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
					<div class="speaker_with_heart_text"><?php echo $titan->getOption('speaker_text');?></div>
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="about-lolly">
			<div class="about-lolly-header col-sm-12">
				<p class="about-lolly-h3">
					<?php echo $titan->getOption('home_values_header')?>
				</p>
			</div>
			<div class="blog-ober-row row">
				<div class="blog-ober-content-section col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
					<div class="row lollys-values-subrow">
						<div class="col-sm-6 values-block">
							<div class="values-inner pull-right">
								<i class="fa fa-heart"></i>
								<div class="values-elipses"><?php echo $titan->getOption('home_value_1_elipsis_text');?></div>
								<h1 class="values-inner-header"><?php echo $titan->getOption('home_value_1');?></h1>
								<i class="fa fa-angle-down"></i>
								<div class="values-content-wrapper">
									<div class="values-content"><?php echo $titan->getOption('home_value_1_hover_text');?></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 values-block">
							<div class="values-inner pull-left">
								<i class="icon-keyhole"></i>
								<div class="values-elipses"><?php echo $titan->getOption('home_value_2_elipsis_text');?></div>
								<h1 class="values-inner-header"><?php echo $titan->getOption('home_value_2');?></h1>
								<i class="fa fa-angle-down"></i>
								<div class="values-content-wrapper">
									<div class="values-content"><?php echo $titan->getOption('home_value_2_hover_text');?></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 values-block">
							<div class="values-inner pull-right">
								<i class="fa fa-check"></i>
								<div class="values-elipses"><?php echo $titan->getOption('home_value_3_elipsis_text');?></div>
								<h1 class="values-inner-header"><?php echo $titan->getOption('home_value_3')?></h1>
								<i class="fa fa-angle-down"></i>
								<div class="values-content-wrapper">
									<div class="values-content"><?php echo $titan->getOption('home_value_3_hover_text');?></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 values-block">
							<div class="values-inner pull-left">
								<i class="fa fa-star"></i>
								<div class="values-elipses"><?php echo $titan->getOption('home_value_4_elipsis_text');?></div>
								<h1 class="values-inner-header"><?php echo $titan->getOption('home_value_4');?></h1>
								<i class="fa fa-angle-down"></i>
								<div class="values-content-wrapper">
									<div class="values-content"><?php echo $titan->getOption('home_value_4_hover_text');?></div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row about-link-subrow">
				<div class="col-sm-12 about-link-container-div">
					<div class="about-link-boundry">
						<a href="<?php echo get_site_url() . '/' . $titan->getOption('about_me_link');?>" class="home-about-link">
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
							    'limit' => 10 
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
						<a href="<?php echo get_site_url() . '/' . $titan->getOption('testimonials_link');?>" class="all-testimonials-link">
						See all testimonials<br /><span class="all-services-link-greater-than">&gt;</span>
						</a>
				</div>
					
			</div>
		</div>
	</div>
	<div class="blog-ober-row row">
		<div class="lower-icon-nav-ober-section col-md-10 col-sm-10">
			<div class="row">
				<div class="col-sm-12">
					<div class="lower-icon-nav-header">
						
						<?php echo $titan->getOption('icon_nav_header_text');?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="lower-navigation icon-navigation">
					<div class="col-md-2 col-sm-2 lower-nav-item lower-outer-nav-item-left">
						<a href="<?php echo get_site_url() . '/' . $titan->getOption('icon_nav_link_1');?>" class="lower-nav-icon-link">
							<i class="icon-development lower-nav-icon"></i>
							<div class="lower-nav-text-wrapper">
								<p id="development" class="lower-nav-text">
									<?php echo $titan->getOption('icon_nav_text_1');?>
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-2 col-sm-2 lower-nav-item">
						<a href="<?php echo get_site_url() . '/' . $titan->getOption('icon_nav_link_2');?>" class="lower-nav-icon-link">
							<i class="icon-consulting lower-nav-icon"></i>
							<div class="lower-nav-text-wrapper">
								<p class="lower-nav-text">
									<?php echo $titan->getOption('icon_nav_text_2');?>
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-2 col-sm-2 lower-nav-item">
						<a href="<?php echo get_site_url() . '/' . $titan->getOption('icon_nav_link_3');?>" class="lower-nav-icon-link">
							<i class="icon-training lower-nav-icon"></i>
							<div class="lower-nav-text-wrapper">
								<p class="lower-nav-text">
									<?php echo $titan->getOption('icon_nav_text_3');?>
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-2 col-sm-2 lower-nav-item">
						<a href="<?php echo get_site_url() . '/' . $titan->getOption('icon_nav_link_4');?>" class="lower-nav-icon-link">
							<i class="icon-impact lower-nav-icon"></i>
							<div class="lower-nav-text-wrapper">
								<p class="lower-nav-text">
									<?php echo $titan->getOption('icon_nav_text_4');?>
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-2 col-sm-2 lower-nav-item">
						<a href="<?php echo get_site_url() . '/' . $titan->getOption('icon_nav_link_5');?>" class="lower-nav-icon-link">
							<i class="icon-culture lower-nav-icon"></i>
							<div class="lower-nav-text-wrapper">
								<p class="lower-nav-text">
									<?php echo $titan->getOption('icon_nav_text_5');?>
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-2 col-sm-2 lower-nav-item lower-outer-nav-item-right">
						<a href="<?php echo get_site_url() . '/' . $titan->getOption('icon_nav_link_6');?>" class="lower-nav-icon-link">
							<i class="icon-workshop lower-nav-icon"></i>
							<div class="lower-nav-text-wrapper">
								<p class="lower-nav-text">
									<?php echo $titan->getOption('icon_nav_text_6');?>
								</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="awards-and-mentions">
			<div class="col-md-12 col-sm-12 awards-and-mentions-content">
				<div class="awards-and-mentions-text-center">
					<?php echo $titan->getOption('awards_text_center');?>
				</div>
				
			</div>
			<button class="btn btn-default awards-button" href="<?php echo get_site_url() . '/' . $titan->getOption('awards_link');?>">Read<br />more<br /><span class="all-services-link-greater-than">&gt;</span></button>
		</div>
	</div>
	<div class="row">
		<div class="subscribe">
			<?php dynamic_sidebar( 'subscription_1' ); ?>
		</div>
	</div>
	<div class="row">
		<div class="tweetchat-section">
			<!--<img class="col-md-6 col-sm-6 tweetchat-logo" src="<?php echo get_image_source_from_titan_option($titan, 'tweetchat_logo');?>"/> -->
			<div class="col-md-6 col-sm-6 tweetchat-content">
				<div class="tweetchat_text">
					<?php echo $titan->getOption('tweetchat_text');?>
				</div>
				<button class="btn btn-default tweetchat-button" href="<?php echo get_site_url() . '/' . $titan->getOption('tweetchat_link');?>">View<br />Schedule<br /><span class="all-services-link-greater-than">&gt;</span></button>
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="home-footer">
			<div class="col-sm-5 col-sm-offset-1">
				<?php dynamic_sidebar( 'footer_left_1' ); ?>
			</div>
			<div class="col-sm-5 col-sm-offset-1">
				<?php dynamic_sidebar( 'footer_right_1' ); ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="home-footer">
			<div class="col-sm-5 col-sm-offset-1">
				<?php dynamic_sidebar( 'footer_left_2' ); ?>
			</div>
			<div class="col-sm-5 col-sm-offset-1">
				<?php dynamic_sidebar( 'footer_right_2' ); ?>
			</div>
		</div>
	</div>
</div> <!-- closing container-fluid div -->
<!-- body tag closed in footer -->
<?php
include("footer.php");
?>
