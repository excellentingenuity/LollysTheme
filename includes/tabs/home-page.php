<?php

	// ***** Home Page tab *****
	$tab_1 = $panel->createTab(array('name' => 'Home Page Options') );

	// Menu
	$tab_1->createOption(array(
		'name' => 'Top Menu',
		'id' => 'top-menu',
		'type' => 'text',
		'desc' => 'Enter the name of the menu you wish to be used for the Top Menu',
		'default' => 'Primary'
	));

	//Header Slideshow
	$tab_1->createOption( array('name' => 'Header Slideshow Image 1', 'id' => 'header_slider_image_1', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_1->createOption( array('name' => 'Header Slideshow Image 2', 'id' => 'header_slider_image_2', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_1->createOption( array('name' => 'Header Slideshow Image 3', 'id' => 'header_slider_image_3', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_1->createOption( array('name' => 'Header Slideshow Image 4', 'id' => 'header_slider_image_4', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_1->createOption( array('name' => 'Header Slideshow Image 5', 'id' => 'header_slider_image_5', 'type' => 'upload', 'desc' => 'Upload your image') );

	$tab_1->createOption(array('type' => 'save'));
?>