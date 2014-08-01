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
                        	<div class="logo wow fadeInDown img-circle">
                        		<h1><a href=""><?php bloginfo( 'name' ); ?></a></h1>
                        	</div>
                            <h2 class="wow fadeInLeftBig"><?php echo $titan->getOption( 'tab_1_title' ); ?></h2>
                            <div class="wow fadeInLeftBig"><?php echo $titan->getOption( 'tab_1_description' ); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        	foreach(lolly_chosen_sections($titan) as $section) {
        		include 'includes/sections/' . $section['section'] . '.php';
        	}
        ?>

<?php get_footer(); ?>
