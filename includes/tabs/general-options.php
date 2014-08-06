<?php
	$tab_0 = $panel->createTab(array('name' => 'General Options') );

	$tab_0->createOption(array(
		'name' => 'Site Name',
		'id' => 'site_name',
		'type' => 'text',
		'desc' => 'Enter your site name'
	));

	// logo
	$tab_0->createOption(array(
		'name' => 'Logo',
		'id' => 'site_logo',
		'type' => 'upload', 
		'default' => get_template_directory_uri() . '/img/logo.png',
		'desc' => 'Upload your site logo' 
	));

	// favicon
	$tab_0->createOption( array(
		'name' => 'Favicon',
	 	'id' => 'favicon',
	 	'type' => 'upload',
	 	'default' => get_template_directory_uri() . '/img/favicon.png',
		'desc' => 'Upload your favicon'
	) );

	
	$tab_0->createOption(array('type' => 'save'));

?>