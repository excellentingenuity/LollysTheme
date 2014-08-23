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

	$tab_1->createOption(array(
			'name' => 'Header Text',
			'id'   => 'header_slider_text',
			'type' => 'textarea',
			'desc' => 'Header Slideshow Message Text'
		));

	//Header Slideshow
	$tab_1->createOption( array('name' => 'Header Slideshow Image 1', 'id' => 'header_slider_image_1', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_1->createOption( array('name' => 'Header Slideshow Image 2', 'id' => 'header_slider_image_2', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_1->createOption( array('name' => 'Header Slideshow Image 3', 'id' => 'header_slider_image_3', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_1->createOption( array('name' => 'Header Slideshow Image 4', 'id' => 'header_slider_image_4', 'type' => 'upload', 'desc' => 'Upload your image') );
	$tab_1->createOption( array('name' => 'Header Slideshow Image 5', 'id' => 'header_slider_image_5', 'type' => 'upload', 'desc' => 'Upload your image') );

	$tab_1->createOption( array('name' => 'Background', 'id' => 'speaker-background', 'type' => 'select',
							'desc' => 'Choose the type of background for this section',
							'options' => array('white' => 'White', 'image' => 'Fullscreen image'), 'default' => 'white') );
	$tab_1->createOption( array('name' => 'Speaker With Heart Image', 'id' => 'speaker_with_heart_background', 'type' => 'upload', 'desc' => 'Upload your image'));
	$tab_1->createOption(array(
			'name' => 'Speaker With Heart Text',
			'id'   => 'speaker_text',
			'type' => 'textarea',
			'desc' => 'Speaker With Heart Message Text'
		));

	$tab_1->createOption( array(
		'name' => 'Speaker With Heart Link',
		'id' => 'speaker_text_link',
		'type' => 'select-pages',
		'default' => '',
		'desc' => 'Enter the page for the Speaker With Heart text should link to'
	));


	$tab_1->createOption(array('type' => 'save'));
?>