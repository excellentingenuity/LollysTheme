<?php
	$titan = TitanFramework::getInstance( 'lolly' );
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="" <?php language_attributes(); ?>> <!--<![endif]-->

    <head>
    	
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('-', true, 'right'); bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- CSS -->

        <link rel="stylesheet" href="<?php echo child_template_directory(); ?>/style.css">
        
        

        
        <!-- Favicon -->
        <link rel="shortcut icon" href="">
        
        <?php wp_head(); ?>

    </head>

    <body>

		
		