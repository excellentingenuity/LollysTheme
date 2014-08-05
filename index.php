<?php 
/**
 * Template Name: index.php
 */

get_header(); ?>

<?php
	$titan = TitanFramework::getInstance( 'lolly' );
?>
		<!--Lolly's Theme-->
        <!-- Coming Soon -->
        <div class="coming-soon">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        	<div class="logo text-right">
                        		<h1 class="sitename"><a href=""><?php bloginfo( 'name' ); ?></a></h1>
                        		<h1 class="tagline"><a href="">Lead From Within</a></h1>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php //include('menu.php'); ?>
        <div class="coach-consultant">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-2 text-right">
						<h2>Coach</h2>
						<ul class="list-unstyled coach-consultant-list">
							<li>Executive Coaching</li>
							<li>Leadership Development</li>
							<li>Interim CEO Coaching</li>
							<li>Entrepreneurship Coaching</li>
						</ul>
					</div>
					<div class="col-md-4 text-left">
						<h2>Consultant</h2>
						<ul class="list-unstyled coach-consultant-list">
							<li>Leadership Development</li>
							<li>Team Building Design</li>
							<li>Cultural Transformation</li>
							<li>Employee Engagement</li>
						</ul>
					</div>
				</div>	
			</div>
        </div>
        <div class="blog">
        	
        </div>
        <div class="subscribe">
        	
        </div>
        <?php
        	foreach(lolly_chosen_sections($titan) as $section) {
        		include 'includes/sections/' . $section['section'] . '.php';
        	}
        ?>

<?php get_footer(); ?>
