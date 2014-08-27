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

	// header text
	$tab_0->createOption( array(
		'name' => 'Header Bar Text',
		'id' => 'header_text',
		'type' => 'text',
		'default' => '',
		'desc' => 'Enter the text you want to appear in the header bar'
	));

	// header text link
	$tab_0->createOption( array(
		'name' => 'Header Bar Link',
		'id' => 'header_text_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the header bar text should link to'
	));

	// Menu
	$tab_0->createOption(array(
		'name' => 'Top Menu',
		'id' => 'top-menu',
		'type' => 'text',
		'desc' => 'Enter the name of the menu you wish to be used for the Top Menu',
		'default' => 'Primary'
	));

	
	$tab_0->createOption(array('type' => 'save'));

?>