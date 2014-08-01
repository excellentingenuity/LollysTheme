<?php
	$titan = TitanFramework::getInstance( 'mira' );
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
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300,100,100italic,300italic,400italic,700,700italic">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/ultimate-flat-social-icons/ultm-css/ultm.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        
        <style>
        	a, a:hover, a:focus, nav a:hover, .error-message, 
        	.about-box-1 .about-box-1-icon:hover {
        		color: <?php echo $titan->getOption( 'tab_0_color' ); ?>;
        	}
        	::-moz-selection { background: <?php echo $titan->getOption( 'tab_0_color' ); ?>; }
        	::selection { background: <?php echo $titan->getOption( 'tab_0_color' ); ?>; }
        	.timer .days-wrapper:hover,
			.timer .hours-wrapper:hover,
			.timer .minutes-wrapper:hover,
			.timer .seconds-wrapper:hover,
			.about-box-1 .about-box-1-icon {
				background: <?php echo $titan->getOption( 'tab_0_color' ); ?>;
				border-color: <?php echo $titan->getOption( 'tab_0_color' ); ?>;
			}
			.whos-behind-box-1 .whos-behind-photo .whos-behind-social, 
			.subscribe button, .contact-form button, 
			.subscribe button:focus, .contact-form button:focus, 
			.btn:focus, .btn:active:focus, .btn.active:focus {
				background: <?php echo $titan->getOption( 'tab_0_color' ); ?>;
			}
			.contact-form form .contact-error, 
			input[type="text"]:focus, textarea:focus, 
			.section-container-full-bg input[type="text"]:focus, 
			.section-container-full-bg textarea:focus {
				border-color: <?php echo $titan->getOption( 'tab_0_color' ); ?>;
			}
        	<?php
        		$logo_src = mira_get_image_src($titan, "tab_1_logo");
        		if($logo_src != "") {
        	?>
        			.coming-soon .logo a { background-image: url(<?php echo $logo_src; ?>); }
        	<?php
        		}
        		$logo_hover_src = mira_get_image_src($titan, "tab_1_logo_hover");
        		if($logo_hover_src != "") {
        	?>
        			.coming-soon .logo a:before { content: url(<?php echo $logo_hover_src; ?>); }
        			.coming-soon .logo a:hover { background-image: url(<?php echo $logo_hover_src; ?>); }
        	<?php
        		}
        	?>
        </style>

        <script type="text/javascript" src="//use.typekit.net/lcw0wkz.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo mira_get_image_src($titan, "tab_0_favicon"); ?>">
        
        <?php wp_head(); ?>

    </head>

    <body>

		<!-- Top menu -->
		<nav>
			<a class="scroll-link" href="#top">Top</a>
		<?php
			foreach(mira_top_menu_items($titan) as $menu_item) {
			?>
				<a class="scroll-link" href="#<?php echo $menu_item['section-container']; ?>"><?php echo $menu_item['menu-item-name']; ?></a>
			<?php
			}
		?>			
			<div class="hide-menu">
				<a href="" rel="tooltip" data-placement="bottom" data-original-title="Hide menu">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</nav>
		<div class="show-menu">
			<a href="" rel="tooltip" data-placement="bottom" data-original-title="Show menu">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		