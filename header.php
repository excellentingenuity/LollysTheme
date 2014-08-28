<?php
	$titan = TitanFramework::getInstance( 'lolly');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $titan->getOption('site_name'); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- Bootstrap -->
	    <link href="<?php echo bloginfo('template_directory');; ?>/style.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/flexslider-min.css" type="text/css">
		
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo get_image_source_from_titan_option($titan, 'favicon'); ?>">
		<?php wp_head(); ?>
	</head>
	<body>